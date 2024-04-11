<?php declare(strict_types=1);

return [
    'default' => env('ELASTIC_CONNECTION', 'default'),
    'connections' => [
        'default' => [
            'hosts' => [
                env('ELASTIC_HOST', 'localhost:9200'),
            ],
            // configure HTTP client (Guzzle by default)
            'httpClientOptions' => [
                'timeout' => 2,
            ],
        ],
    ],
];
