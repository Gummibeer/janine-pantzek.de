<?php

namespace App\Elements;

class Treatment extends Element
{
    protected $name = 'treatment';

    protected $required = [
        'headline',
        'content',
        'treatment_duration',
        'treatment_result',
        'effect_duration',
        'downtime',
    ];

    protected $types = [
        'headline' => 'string',
        'content' => 'string',
        'treatment_duration' => 'string',
        'treatment_result' => 'string',
        'effect_duration' => ['string', 'null'],
        'downtime' => ['string', 'null'],
    ];

    protected $normalizers = [
        'content' => 'file',
    ];
}
