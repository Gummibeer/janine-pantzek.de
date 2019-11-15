<?php

namespace App\Pages;

use App\Pages\Traits\PageHasTitle;
use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;

class Treatment extends PageData implements Routable
{
    use PageHasContent, PageHasSlug, PageHasTitle, PageHasUrl;

    /** @var string */
    public $banner;

    /** @var string */
    public $headline;

    /** @var string */
    public $treatmentDuration;

    /** @var string|null */
    public $treatmentResult;

    /** @var string|null */
    public $effectDuration;

    /** @var string|null */
    public $downtime;

    /** @var array */
    public $drips = [];

    public function getUrl(): string
    {
        return url($this->slug);
    }
}
