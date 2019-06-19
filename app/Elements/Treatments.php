<?php

namespace App\Elements;

class Treatments extends Element
{
    protected $name = 'treatments';

    protected $required = [
        'treatments',
    ];

    protected $types = [
        'treatments' => 'array[]',
    ];

    protected $nested = [
        'treatments.*' => [
            'required' => [
                'headline',
                'text',
                'duration',
                'effect',
                'downtime',
                'buttons',
            ],
            'types' => [
                'headline' => 'string',
                'text' => 'string',
                'duration' => 'string',
                'effect' => ['string', 'null'],
                'downtime' => ['string', 'null'],
                'buttons' => 'array[]',
            ],
            'nested' => [
                'buttons.*' => [
                    'required' => [
                        'link',
                        'text',
                    ],
                    'types' => [
                        'link' => 'string',
                        'text' => 'string',
                    ],
                    'normalizers' => [
                        'link' => 'url',
                    ],
                ],
            ]
        ],
    ];
}
