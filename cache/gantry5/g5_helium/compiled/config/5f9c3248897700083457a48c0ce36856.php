<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1584925588,
    'checksum' => 'af3fd4f6b545ad4ece4d4278d23c0bb1',
    'files' => [
        'user/themes/g5_helium/config/default' => [
            'page/body' => [
                'file' => 'user/themes/g5_helium/config/default/page/body.yaml',
                'modified' => 1584925572
            ],
            'particles/branding' => [
                'file' => 'user/themes/g5_helium/config/default/particles/branding.yaml',
                'modified' => 1584925572
            ],
            'particles/copyright' => [
                'file' => 'user/themes/g5_helium/config/default/particles/copyright.yaml',
                'modified' => 1584925572
            ],
            'particles/logo' => [
                'file' => 'user/themes/g5_helium/config/default/particles/logo.yaml',
                'modified' => 1584925572
            ],
            'particles/social' => [
                'file' => 'user/themes/g5_helium/config/default/particles/social.yaml',
                'modified' => 1584925572
            ],
            'particles/totop' => [
                'file' => 'user/themes/g5_helium/config/default/particles/totop.yaml',
                'modified' => 1584925572
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'contentcubes' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'contenttabs' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'animation' => 'slide'
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => '2016',
                    'end' => 'now'
                ],
                'target' => '_blank',
                'owner' => 'Gantry Framework',
                'link' => '',
                'additional' => [
                    'text' => 'Developed by RocketTheme exclusively<br />for Gantry 5.'
                ],
                'css' => [
                    'class' => ''
                ]
            ],
            'horizontalmenu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'target' => '_blank'
            ],
            'owlcarousel' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'nav' => 'disable',
                'dots' => 'enable',
                'autoplay' => 'disable',
                'imageOverlay' => 'enable'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry<span class="hidden-tablet"> Framework</span></a>',
                'css' => [
                    'class' => 'g-branding'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => '',
                'svg' => '<svg width="100%" height="100%" viewBox="0 0 67 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="logo" d="M16.508,3.838l14.882,7.044l0,18.089l-14.882,7.044l-14.883,-7.044l0,-18.089l14.883,-7.044l0,0ZM26.983,21.828c0.024,-0.138 0.046,-0.324 0.064,-0.556c0.018,-0.233 0.027,-0.469 0.027,-0.708c0,-0.654 -0.091,-1.267 -0.275,-1.839c-0.183,-0.572 -0.455,-1.066 -0.815,-1.481c-0.361,-0.414 -0.797,-0.741 -1.311,-0.98c-0.513,-0.239 -1.099,-0.359 -1.759,-0.359c-0.758,0 -1.421,0.135 -1.989,0.406c-0.568,0.27 -1.045,0.638 -1.43,1.103c-0.384,0.466 -0.675,1.013 -0.87,1.641c-0.196,0.629 -0.293,1.302 -0.293,2.019c0,0.729 0.094,1.402 0.284,2.018c0.189,0.616 0.482,1.147 0.879,1.594c0.398,0.446 0.911,0.795 1.54,1.047c0.629,0.251 1.384,0.377 2.264,0.377c1.197,0 2.272,-0.189 3.226,-0.566c-0.013,-0.402 -0.068,-0.779 -0.165,-1.132c-0.098,-0.352 -0.214,-0.654 -0.349,-0.905c-0.391,0.151 -0.803,0.267 -1.237,0.349c-0.434,0.082 -0.858,0.123 -1.274,0.123c-0.757,0 -1.368,-0.17 -1.833,-0.51c-0.464,-0.339 -0.721,-0.886 -0.769,-1.641l6.085,0ZM44.956,17.583c0.384,-0.064 0.763,-0.096 1.136,-0.096c0.373,0 0.752,0.032 1.136,0.096l0,4.384c0,0.438 0.035,0.798 0.104,1.08c0.069,0.283 0.176,0.507 0.32,0.672c0.144,0.166 0.323,0.283 0.536,0.352c0.213,0.07 0.464,0.104 0.752,0.104c0.395,0 0.725,-0.037 0.992,-0.112l0,-6.48c0.384,-0.064 0.757,-0.096 1.12,-0.096c0.373,0 0.752,0.032 1.136,0.096l0,7.952c-0.341,0.118 -0.792,0.232 -1.352,0.344c-0.56,0.112 -1.144,0.168 -1.752,0.168c-0.544,0 -1.067,-0.042 -1.568,-0.128c-0.501,-0.085 -0.941,-0.266 -1.32,-0.544c-0.379,-0.277 -0.68,-0.682 -0.904,-1.216c-0.224,-0.533 -0.336,-1.242 -0.336,-2.128l0,-4.448l0,0ZM13.566,20.017l0,5.867c0.452,0.075 0.904,0.113 1.356,0.113c0.428,0 0.874,-0.038 1.338,-0.113l0,-13.563c-0.464,-0.075 -0.916,-0.113 -1.356,-0.113c-0.44,0 -0.886,0.038 -1.338,0.113l0,5.32l-4.417,0l0,-5.32c-0.465,-0.075 -0.917,-0.113 -1.357,-0.113c-0.439,0 -0.885,0.038 -1.338,0.113l0,13.563c0.453,0.075 0.905,0.113 1.357,0.113c0.427,0 0.873,-0.038 1.338,-0.113l0,-5.867l4.417,0ZM36.11,14.063c0.352,0.002 0.714,0.034 1.086,0.096l0,8.4c0,0.331 0.019,0.598 0.056,0.8c0.037,0.203 0.096,0.36 0.176,0.472c0.08,0.112 0.184,0.19 0.312,0.232c0.128,0.043 0.288,0.064 0.48,0.064c0.085,0 0.179,-0.005 0.28,-0.016c0.101,-0.01 0.2,-0.026 0.296,-0.048c0.117,0.438 0.176,0.864 0.176,1.28c0,0.086 0,0.163 0,0.232c0,0.07 -0.011,0.147 -0.032,0.232c-0.171,0.054 -0.376,0.091 -0.616,0.112c-0.24,0.022 -0.461,0.032 -0.664,0.032c-0.821,0 -1.48,-0.226 -1.976,-0.68c-0.496,-0.453 -0.744,-1.192 -0.744,-2.216l0,-8.896c0.384,-0.064 0.763,-0.096 1.136,-0.096l0.034,0ZM40.636,19.311l-1.072,0c-0.032,-0.138 -0.056,-0.285 -0.072,-0.44c-0.016,-0.154 -0.024,-0.301 -0.024,-0.44c0,-0.288 0.032,-0.57 0.096,-0.848l3.296,0l0,8.272c-0.384,0.064 -0.757,0.096 -1.12,0.096c-0.352,0 -0.72,-0.032 -1.104,-0.096l0,-6.544l0,0ZM63.538,17.391c0.928,0.004 1.61,0.263 2.05,0.776c0.443,0.518 0.664,1.326 0.664,2.424l0,5.264c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-4.672c0,-0.576 -0.072,-1.018 -0.216,-1.328c-0.144,-0.309 -0.435,-0.464 -0.872,-0.464c-0.181,0 -0.36,0.027 -0.536,0.08c-0.176,0.054 -0.336,0.152 -0.48,0.296c-0.144,0.144 -0.261,0.347 -0.352,0.608c-0.091,0.262 -0.136,0.6 -0.136,1.016l0,4.464c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-4.672c0,-0.576 -0.072,-1.018 -0.216,-1.328c-0.144,-0.309 -0.435,-0.464 -0.872,-0.464c-0.181,0 -0.363,0.027 -0.544,0.08c-0.181,0.054 -0.344,0.158 -0.488,0.312c-0.144,0.155 -0.259,0.371 -0.344,0.648c-0.085,0.278 -0.128,0.64 -0.128,1.088l0,4.336c-0.384,0.064 -0.763,0.096 -1.136,0.096c-0.373,0 -0.752,-0.032 -1.136,-0.096l0,-8.272c0.149,-0.032 0.299,-0.056 0.448,-0.072c0.149,-0.016 0.315,-0.024 0.496,-0.024c0.181,0 0.341,0.008 0.48,0.024c0.139,0.016 0.283,0.04 0.432,0.072c0.032,0.054 0.061,0.131 0.088,0.232c0.027,0.102 0.051,0.208 0.072,0.32c0.021,0.112 0.04,0.222 0.056,0.328c0.016,0.107 0.029,0.198 0.04,0.272c0.085,-0.16 0.197,-0.32 0.336,-0.48c0.139,-0.16 0.304,-0.304 0.496,-0.432c0.192,-0.128 0.408,-0.232 0.648,-0.312c0.24,-0.08 0.509,-0.12 0.808,-0.12c1.291,0 2.117,0.491 2.48,1.472c0.213,-0.394 0.515,-0.738 0.904,-1.032c0.389,-0.293 0.883,-0.44 1.48,-0.44l0.022,0ZM24.618,19.961l-3.702,0c0.061,-0.642 0.25,-1.138 0.568,-1.49c0.318,-0.353 0.782,-0.529 1.393,-0.529c0.538,0 0.956,0.186 1.256,0.557c0.299,0.371 0.461,0.858 0.485,1.462ZM40.3,16.191c-0.064,-0.362 -0.096,-0.72 -0.096,-1.072c0,-0.341 0.032,-0.698 0.096,-1.072c0.181,-0.032 0.376,-0.056 0.584,-0.072c0.208,-0.016 0.397,-0.024 0.568,-0.024c0.181,0 0.379,0.008 0.592,0.024c0.213,0.016 0.411,0.04 0.592,0.072c0.032,0.182 0.053,0.36 0.064,0.536c0.011,0.176 0.016,0.355 0.016,0.536c0,0.171 -0.005,0.347 -0.016,0.528c-0.011,0.182 -0.032,0.363 -0.064,0.544c-0.181,0.032 -0.376,0.054 -0.584,0.064c-0.208,0.011 -0.403,0.016 -0.584,0.016c-0.171,0 -0.363,-0.005 -0.576,-0.016c-0.213,-0.01 -0.411,-0.032 -0.592,-0.064l0,0Z"/></svg>',
                'text' => '',
                'class' => 'g-logo g-logo-helium'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-twitter fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/rockettheme',
                        'name' => 'Twitter'
                    ],
                    1 => [
                        'icon' => 'fa fa-facebook fa-fw',
                        'text' => '',
                        'link' => 'http://www.facebook.com/RocketTheme',
                        'name' => 'Facebook'
                    ],
                    2 => [
                        'icon' => 'fa fa-google-plus fa-fw',
                        'text' => '',
                        'link' => 'https://plus.google.com/+rockettheme',
                        'name' => 'Google+'
                    ]
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'icon' => 'fa fa-chevron-up fa-fw',
                'content' => 'Back to top'
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'breadcrumbs' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'default',
                        'ordering' => 'asc'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'feed' => [
                'enabled' => true
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'langswitcher' => [
                'enabled' => true
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'login' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'search' => [
                'enabled' => true
            ]
        ],
        'styles' => [
            'above' => [
                'background' => '#f4f5f7',
                'text-color' => '#424753'
            ],
            'accent' => [
                'color-1' => '#4db2b3',
                'color-2' => '#8f4dae'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'expanded' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'features' => [
                'background' => '#ffffff',
                'text-color' => '#424753'
            ],
            'font' => [
                'family-default' => 'Raleway, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                'family-title' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
            ],
            'footer' => [
                'background' => '#312f38',
                'text-color' => '#ffffff'
            ],
            'header' => [
                'background' => '#312f38',
                'background-image' => 'gantry-media://header/img01.jpg',
                'background-overlay' => 'enabled',
                'text-color' => '#eceeef'
            ],
            'intro' => [
                'background' => '#f4f5f7',
                'text-color' => '#424753'
            ],
            'link' => [
                'regular' => '#4db2b3',
                'hover' => '#424753'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => 0
            ],
            'navigation' => [
                'background' => '#312f38',
                'text-color' => '#ffffff'
            ],
            'offcanvas' => [
                'background' => '#4db2b3',
                'text-color' => '#eceeef',
                'toggle-color' => '#4db2b3',
                'toggle-visibility' => 1,
                'width' => '12rem'
            ],
            'testimonials' => [
                'background' => '#8f4dae',
                'background-image' => 'gantry-media://testimonials/img01.jpg',
                'background-overlay' => 'enabled',
                'text-color' => '#eceeef'
            ],
            'utility' => [
                'background' => '#424753',
                'text-color' => '#ffffff'
            ]
        ],
        'page' => [
            'body' => [
                'attribs' => [
                    'class' => 'gantry g-helium-style',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'doctype' => 'html',
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => 1
            ]
        ],
        'pages' => [
            'blog_item' => [
                'header' => [
                    'process' => [
                        'markdown' => true,
                        'twig' => false
                    ],
                    'child_type' => 'default',
                    'admin' => [
                        'children_display_order' => 'collection'
                    ]
                ],
                'name' => 'default'
            ],
            'blog_list' => [
                'header' => [
                    'process' => [
                        'markdown' => true,
                        'twig' => false
                    ],
                    'child_type' => 'blog_item',
                    'admin' => [
                        'children_display_order' => 'collection'
                    ],
                    'content' => [
                        'items' => '@self.children',
                        'leading' => 0,
                        'columns' => 2,
                        'limit' => 5,
                        'order' => [
                            'by' => 'date',
                            'dir' => 'desc'
                        ],
                        'show_date' => 0,
                        'pagination' => 1,
                        'url_taxonomy_filters' => 1
                    ]
                ],
                'name' => 'default'
            ],
            'modular' => [
                'features' => [
                    'name' => 'modular/features',
                    'header' => [
                        'template' => 'modular/features'
                    ]
                ],
                'showcase' => [
                    'name' => 'modular/showcase',
                    'header' => [
                        'template' => 'modular/showcase',
                        'buttons' => [
                            'primary' => 1
                        ]
                    ]
                ],
                'text' => [
                    'name' => 'modular/text',
                    'header' => [
                        'template' => 'modular/text',
                        'image_align' => 'left'
                    ]
                ]
            ]
        ]
    ]
];
