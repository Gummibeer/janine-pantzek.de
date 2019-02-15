<?php

namespace App\Elements;

class Drip extends Element
{
    protected $name = 'drip';

    protected $required = [
        'headline',
        'usage',
        'ingredients',
    ];

    protected $types = [
        'headline' => 'string',
        'usage' => 'string[]',
        'ingredients' => 'string[]',
        'ingredients_plus' => 'string[]',
    ];
}
