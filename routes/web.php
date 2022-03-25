<?php

use Astrotomic\Stancy\Facades\PageFactory;
use Illuminate\Support\Facades\Route;

Route::redirect('/', config('app.locale'));

Route::get('/404.html', function () {
    return PageFactory::makeFromSheetName('error', '404');
});

Route::get('/{locale}', function (string $locale) {
    if(in_array($locale, ['de', 'en', 'es'])) {
        app()->setLocale($locale);
        return PageFactory::makeFromSheetName('static', "{$locale}/home");
    }

    return redirect()->to('de/'.$locale);
});

Route::get('/{locale}/{page}', function (string $locale, string $page) {
    app()->setLocale($locale);

    return PageFactory::makeFromSheetName('static', "{$locale}/{$page}");
});
