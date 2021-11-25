<?php
return [
    'filename' => 'sitemap.xml',
    'urls' => [
        [
            'loc' => route('site'),
            'priority' => '1.00'
        ],
        [
            'loc' => route('site.notices'),
            'priority' => '0.80'
        ],
    ],
    'images' => [
        'filename' => 'sitemap-images.xml',
        'directories' => [
            'assets/img/site',
            'storage/app/public'
        ]
    ]
];