<?php

namespace App\Pages;

use App\Pages\Traits\PageHasBanner;
use App\Pages\Traits\PageHasTitle;
use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;

class Plain extends PageData implements Routable
{
    use PageHasContent, PageHasSlug, PageHasTitle, PageHasBanner, PageHasUrl;

    public function getUrl(): string
    {
        return url($this->slug);
    }
}
