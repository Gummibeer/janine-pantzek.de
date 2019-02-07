<?php

namespace App\Elements;

class Banner extends Element
{
    protected $name = 'banner';

    protected $required = [
        'image',
        'bg_position',
    ];

    protected $types = [
        'image' => 'string',
        'bg_position' => 'string',
    ];

    protected $defaults = [
        'bg_position' => 'center',
    ];

    protected $values = [
        'bg_position' => ['top', 'center', 'bottom'],
    ];

    protected $normalizers = [
        'image' => 'asset',
    ];
}
