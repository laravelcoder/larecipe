<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Documentation Routes
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of the LaRecipe docs basic route
    | where you can specify the url of your documentations, the location
    | of your docs and the landing page when a user visits /docs route.
    |
    |
    */

    'docs'        => [
        'route'   => '/docs',
        'path'    => '/resources/docs',
        'landing' => 'overview',
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Versions
    |--------------------------------------------------------------------------
    |
    | Here you may specify and set the versions and the default (latest) one
    | of your documentation's versions where you can redirect the user to.
    | Just make sure that the default version is in the published list.
    |
    |
    */

    'versions'      => [
        'default'   => '1.0',
        'published' => [
            '1.0'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Settings
    |--------------------------------------------------------------------------
    |
    | These options configure the additional behaviors of your documentation
    | where you can limit the access to only authenticated users in your
    | system. It is false initially so that guests can view your docs.
    |
    |
    */

    'settings' => [
        'auth' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache
    |--------------------------------------------------------------------------
    |
    | Obviously rendering markdown at the back-end is costly especially if
    | the rendered files are massive. Thankfully, caching is considered
    | as a good option to speed up your app when having high traffic.
    |
    | Caching period unit: minutes
    |
    */

    'cache'       => [
        'enabled' => false,
        'period'  => 5
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Repository
    |--------------------------------------------------------------------------
    |
    | This is an optional config you can set in order to show an external link
    | to your documentation's repository if you have one. Once you set the
    | value of the url, LaRecipe automatically will show the nav button.
    |
    |
    */

    'repository'   => [
        'provider' => 'github',
        'url'      => 'https://github.com/saleem-hadad/larecipe'
    ],

    /*
    |--------------------------------------------------------------------------
    | Appearance
    |--------------------------------------------------------------------------
    |
    | Here you can add configure the appearance of your docs. For example,
    | you can swap the default logo to custom one that matches your Id
    | Also, you can change the theme of your docs if you prefer that
    |
    | Supported Themes: 'light', 'dark'
    |
    */

    'ui'                 => [
        'show_app_name'  => false,
        'logo'           => '/images/logo.svg',
        'fav'            => '/fav.png',
        'theme'          => 'light',
        'back_to_top'    => true,
        'additional_css' => [
            //'css/custom.css',
        ],
        'additional_js'  => [
            //'js/custom.js',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | SEO
    |--------------------------------------------------------------------------
    |
    | These options configure the SEO settings of your docs. You can set the
    | author, the description and the keywords. Also, LaRecipe by default
    | sets the canonical link to the viewed page's link automatically.
    |
    |
    */

    'seo'             => [
        'author'      => '',
        'description' => '',
        'keywords'    => ''
    ]
];
