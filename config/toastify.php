<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Toastify CDN links
    |--------------------------------------------------------------------------
    |
    | Here you may specify the CDN links for the toastify library.
    |
    */

    'cdn' => [
        'js' => 'https://cdn.jsdelivr.net/npm/toastify-js',
        'css' => 'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css',
    ],

    /*
    |--------------------------------------------------------------------------
    | Toastify Toastifiers Options
    |--------------------------------------------------------------------------
    |
    | Each toastifier will be available as a method in the Toastify facade.
    |
    */

    'toastifiers' => [
        'toast' => [
            'style' => [
                'color' => '#fff',
                'background' => 'linear-gradient(to right, #1e3a8a, #3b82f6)', // Blue gradient
                'border-radius' => '8px',
                'box-shadow' => '0px 4px 6px rgba(0, 0, 0, 0.1)',
                'padding' => '12px 16px',
            ],
        ],
        'error' => [
            'style' => [
                'color' => '#fff',
                'background' => 'linear-gradient(to right, #b91c1c, #ef4444)', // Red gradient
                'border-radius' => '8px',
                'box-shadow' => '0px 4px 6px rgba(0, 0, 0, 0.1)',
                'padding' => '12px 16px',
            ],
        ],
        'success' => [
            'style' => [
                'color' => '#fff',
                'background' => 'linear-gradient(to right, #047857, #10b981)', // Green gradient
                'border-radius' => '8px',
                'box-shadow' => '0px 4px 6px rgba(0, 0, 0, 0.1)',
                'padding' => '12px 16px',
            ],
        ],
        'info' => [
            'style' => [
                'color' => '#fff',
                'background' => 'linear-gradient(to right, #2563eb, #3b82f6)', // Info blue
                'border-radius' => '8px',
                'box-shadow' => '0px 4px 6px rgba(0, 0, 0, 0.1)',
                'padding' => '12px 16px',
            ],
        ],
        'warning' => [
            'style' => [
                'color' => '#fff',
                'background' => 'linear-gradient(to right, #f59e0b, #fbbf24)', // Yellow-orange
                'border-radius' => '8px',
                'box-shadow' => '0px 4px 6px rgba(0, 0, 0, 0.1)',
                'padding' => '12px 16px',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Toastify Default Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default options for the toastify library.
    |
    */

    'defaults' => [
        'gravity' => 'toastify-top',  // ✅ Show at the top
        'position' => 'center', // ✅ Center align
        'duration' => 3000, // ✅ Stay visible for 5 seconds
        'close' => true, // ✅ Show close button
    ],
];
