<?php

namespace App\Export;

use Spatie\Export\Jobs\CleanDestination;
use Spatie\Export\Jobs\CrawlSite;
use Spatie\Export\Jobs\IncludeFile;

class Exporter extends \Spatie\Export\Exporter
{
    public function export(): void
    {
        if ($this->cleanBeforeExport) {
            $this->dispatcher->dispatchNow(
                new CleanDestination()
            );
        }

        if ($this->crawl) {
            $this->dispatcher->dispatchNow(
                new CrawlSite()
            );
        }

        foreach ($this->paths as $path) {
            $this->dispatcher->dispatchNow(
                new ExportPath($path)
            );
        }

        foreach ($this->includeFiles as $source => $target) {
            $this->dispatcher->dispatchNow(
                new IncludeFile($source, $target, $this->excludeFilePatterns)
            );
        }
    }
}
