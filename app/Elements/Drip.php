<?php

namespace App\Elements;

class Drip extends Element
{
    protected $name = 'drip';

    protected $required = [
        'headline',
        'content',
        'ingredients',
    ];

    protected $types = [
        'headline' => 'string',
        'content' => 'string',
        'ingredients' => 'string[]',
    ];

    protected $normalizers = [
        'content' => 'file',
        'ingredients' => 'sort',
    ];
}
