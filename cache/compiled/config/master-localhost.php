<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1483646423,
    'checksum' => '37d0e0d5a0dee636964f69b3e58bb401',
    'files' => [
        'user/config' => [
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1478942930
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1483623363
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1479628078
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1478499258
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1478499258
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1478499258
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1478499258
            ]
        ],
        'user/plugins' => [
            'plugins/archives' => [
                'file' => 'user/plugins/archives/archives.yaml',
                'modified' => 1478499268
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1478499270
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1478499270
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/feed.yaml',
                'modified' => 1478499270
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1478499260
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/pagination.yaml',
                'modified' => 1478499270
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1478499272
            ],
            'plugins/random' => [
                'file' => 'user/plugins/random/random.yaml',
                'modified' => 1478499272
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1478499272
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1478499272
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1478499274
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/taxonomylist.yaml',
                'modified' => 1478499274
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ],
                'taxonomy_names' => [
                    'month' => 'archives_month',
                    'year' => 'archives_year'
                ]
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'pagination' => [
                'enabled' => true,
                'built_in_css' => true,
                'delta' => 0
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'random' => [
                'enabled' => true,
                'route' => '/random',
                'redirect' => true,
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and'
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'ignores' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ]
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpeg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
            'title' => 'PoLet500',
            'author' => [
                'name' => 'Polemiche Letterarie del Cinquecento',
                'email' => 'polemicheletterarie@gmail.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag',
                2 => 'month',
                3 => 'char',
                4 => 'author',
                5 => 'chronology'
            ],
            'metadata' => [
                'title' => 'PoLet500 - Polemiche Letterarie del 500',
                'description' => 'PoLet500 è un progetto in costruzione di schedatura telematica di polemiche letterarie del Cinquecento italiano'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => [
                '/changelog' => '/testi/the-urban-jungle'
            ],
            'routes' => [
                '/something/else' => '/testi/focus-and-blur',
                '/another/one/(.*)' => '/testi/$1'
            ],
            'blog' => [
                'route' => '/testi/'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'polet500',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => 301,
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 0,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true
            ]
        ],
        'security' => [
            'salt' => 'qa8pUS203NuhTO'
        ]
    ]
];
