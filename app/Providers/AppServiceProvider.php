<?php

namespace App\Providers;

use App\Pages\Page;
use Astrotomic\Stancy\Contracts\ExportFactory as ExportFactoryContract;
use Astrotomic\Stancy\Contracts\Page as PageContract;
use Illuminate\Support\ServiceProvider;
use Spatie\BladeX\Facades\BladeX;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PageContract::class, Page::class);
    }

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
