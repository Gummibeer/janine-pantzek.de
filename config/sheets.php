<?php

use Spatie\Sheets\ContentParsers\JsonParser;
use Spatie\Sheets\ContentParsers\YamlParser;

return [
    'default_collection' => 'static',

    'collections' => [
        'static',
        'error',
        'drip',
        'treatment' => [
            'content_parser' => JsonParser::class,
            'extension' => 'json',
        ],
        'data' => [
            'content_parser' => YamlParser::class,
            'extension' => 'yml',
        ],
    ],
];
