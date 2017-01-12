<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/polet500/user/plugins/sitemap/blueprints.yaml',
    'modified' => 1478499274,
    'data' => [
        'name' => 'Sitemap',
        'version' => '1.7.0',
        'description' => 'Provide automatically generated **XML sitemaps** with this very useful, but simple to configure, Grav plugin.',
        'icon' => 'map-marker',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-sitemap',
        'keywords' => 'sitemap, plugin, xml, map, index',
        'bugs' => 'https://github.com/getgrav/grav-plugin-sitemap/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.1.6'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'Route to sitemap',
                    'placeholder' => '/sitemap',
                    'validate' => [
                        'pattern' => '/([a-z\\-_]+/?)+'
                    ]
                ],
                'ignores' => [
                    'type' => 'array',
                    'label' => 'Ignore',
                    'help' => 'URLs to ignore',
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ]
            ]
        ]
    ]
];
