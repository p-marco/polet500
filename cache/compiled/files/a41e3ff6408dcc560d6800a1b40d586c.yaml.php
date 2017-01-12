<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/polet500/user/plugins/archives/archives.yaml',
    'modified' => 1478499268,
    'data' => [
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
    ]
];
