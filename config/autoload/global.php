<?php
return [
    'zf-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'dummy' => [],
            'db' => [],
        ],
    ],
    'zf-mvc-auth' => [
        'authentication' => [
            'map' => [
                'QuotesAPI\\V1' => 'basic',
            ],
        ],
    ],
];
