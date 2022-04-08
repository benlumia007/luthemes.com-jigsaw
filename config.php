<?php 

return [
    'build' => [
        'source' => 'public',
    ],

    // base url
    'baseUrl' => 'https://luthemes.test',
    'production' => false,

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
            'link'  => '/portfolio',
            'title' => 'Portfolio'
        ],
    ],

    // a custom collections for the theme.
    'collections' => [
        'posts'   => [
            'extends' => '_views.single',
            'path'    => 'blog/{-title}',
            'sort'    => '-date'
        ],
        'portfolios'  => [
            'extends' => '_views.portfolio',
            'path'    => 'portfolio/{-title}',
            'sort'    => '-filename',
        ],
    ],
];