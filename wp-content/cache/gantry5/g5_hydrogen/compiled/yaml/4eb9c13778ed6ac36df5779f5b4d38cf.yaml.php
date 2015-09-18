<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/gsclube/wp-content/themes/g5_hydrogen/gantry/theme.yaml',
    'modified' => 1442615525,
    'data' => [
        'details' => [
            'name' => 'Hydrogen',
            'version' => '5.1.3',
            'icon' => 'paper-plane',
            'date' => 'September 15, 2015',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://www.rockettheme.com/docs/wordpress/theme/hydrogen'
            ],
            'support' => [
                'link' => 'http://www.rockettheme.com/forum/wordpress-theme-hydrogen'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/hydrogen.yaml'
            ],
            'news' => [
                'link' => 'http://news.rockettheme.com/prime/themes.yaml'
            ],
            'copyright' => '(C) 2005 - 2015 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Hydrogen Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'wordpress',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'hydrogen',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme',
                'textdomain' => 'g5_hydrogen'
            ],
            'fonts' => [
                'roboto' => [
                    400 => 'gantry-theme://fonts/roboto_regular_macroman/Roboto-Regular-webfont',
                    500 => 'gantry-theme://fonts/roboto_medium_macroman/Roboto-Medium-webfont',
                    700 => 'gantry-theme://fonts/roboto_bold_macroman/Roboto-Bold-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'hydrogen',
                    1 => 'hydrogen-wordpress',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'hydrogen'
                ],
                'overrides' => [
                    0 => 'hydrogen-wordpress',
                    1 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.0.*',
                'engine/nucleus' => '1.0.*',
                'asset/font-awesome' => 4.20000000000000017763568394002504646778106689453125,
                'particle/menu' => '1.0.*'
            ]
        ],
        'chrome' => [
            'gantry' => [
                'before_widget' => '<div id="%1s" class="widget %2s">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widgettitle">',
                'after_title' => '</h2>'
            ]
        ],
        'admin' => [
            'styles' => [
                'section' => [
                    0 => 'header',
                    1 => 'showcase',
                    2 => 'subfeature'
                ],
                'core' => [
                    0 => 'base'
                ]
            ],
            'content' => [
                'general' => [
                    0 => 'wpautop'
                ],
                'blog' => [
                    0 => 'heading',
                    1 => 'featured-image',
                    2 => 'title',
                    3 => 'meta-date',
                    4 => 'meta-author',
                    5 => 'meta-comments',
                    6 => 'meta-categories',
                    7 => 'meta-tags',
                    8 => 'read-more'
                ],
                'single' => [
                    0 => 'featured-image',
                    1 => 'title',
                    2 => 'meta-date',
                    3 => 'meta-author',
                    4 => 'meta-comments',
                    5 => 'meta-categories',
                    6 => 'meta-tags'
                ],
                'page' => [
                    0 => 'featured-image',
                    1 => 'title',
                    2 => 'meta-date',
                    3 => 'meta-author'
                ],
                'archive' => [
                    0 => 'heading',
                    1 => 'featured-image',
                    2 => 'title',
                    3 => 'meta-date',
                    4 => 'meta-author',
                    5 => 'meta-comments',
                    6 => 'meta-categories',
                    7 => 'meta-tags',
                    8 => 'read-more'
                ]
            ]
        ]
    ]
];
