<?php 

return [
    'build' => [
        'source' => 'public',
    ],

    // base uri
    'baseUrl' => 'https://luthemes.test',

    // A custom title for the theme.
    'siteTitle' => 'Benjamin Lu',

    // A custom tagline for the theme.
    'siteTagline' => 'Full Stack Developer',

    // A custom primary menu for the site.
    'primaryMenu' => [
        [
            'link'  => '/about',
            'title' => 'About'
        ],
        [
            'link'  => '/archives',
            'title' => 'Archives'
        ],
    ],

    // a custom collections for the theme.
    'collections' => [
        'portfolios' => [
            'extends' => '_views.portfolio',
            'path' => 'portfolio/{-title}',
            'sort' => '-filename',
        ],
    ],
];