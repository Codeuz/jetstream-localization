<?php

return[

    'default_locale' => config('app.fallback_locale'),

    'supported_locales' => [
        'en' => [
            'native' => 'EN',
            'regional_code' => 'en_GB',
            'charset' => 'UTF-8',
            'constants' => ['LC_TIME'],
        ],
        'fr' => [
            'native' => 'FR',
            'regional_code' => 'fr_FR',
            'charset' => 'UTF-8',
            'constants' => ['LC_TIME'],
        ]
    ]
];
