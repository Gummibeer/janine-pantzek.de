<?php

namespace App\Pages;

use App\Pages\Traits\PageHasBanner;
use App\Pages\Traits\PageHasTitle;
use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;

class Man extends PageData implements Routable
{
    use PageHasContent, PageHasSlug, PageHasTitle, PageHasBanner, PageHasUrl;

    /** @var array */
    public $men = [];

    public function getUrl(): string
    {
        return url($this->slug);
    }
}
