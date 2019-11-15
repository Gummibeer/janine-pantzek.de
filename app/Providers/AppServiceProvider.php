<?php

namespace App\Providers;

use Astrotomic\Stancy\Contracts\ExportFactory as ExportFactoryContract;
use Illuminate\Support\ServiceProvider;
use Spatie\BladeX\Facades\BladeX;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        BladeX::components('components.**.*');

        $this->app->booted(function (): void {
            $this->app->call([$this, 'booted']);
        });
    }

    public function booted(ExportFactoryContract $exportFactory): void
    {
        $exportFactory->addSheetCollectionName('static');
    }
}
