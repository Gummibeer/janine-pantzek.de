<?php

namespace App\Pages;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use RuntimeException;
use Spatie\Sheets\Facades\Sheets;
use Spatie\Sheets\Sheet;

class Page extends \Astrotomic\Stancy\Models\Page
{
    protected function getSheetData(array $sheets): array
    {
        if (empty($sheets)) {
            return [];
        }

        if (! Arr::isAssoc($sheets)) {
            throw new RuntimeException('The [_sheets] data has to be an associative array.');
        }

        $data = [];

        foreach ($sheets as $key => $sheet) {
            [$collection, $path] = explode(':', $sheet);

            if ($path === '*') {
                $data[$key] = Sheets::collection($collection)->all()
                    ->filter(function(Sheet $sheet) {
                        return Str::startsWith($sheet->getPath(), app()->getLocale().'/');
                    })
                    ->map(function (Sheet $sheet) {
                        return $this->prepareData($sheet->toArray());
                    })
                    ->all();

                continue;
            }

            $data[$key] = $this->prepareData(Sheets::collection($collection)->get($path)->toArray());
        }

        return $data;
    }
}
