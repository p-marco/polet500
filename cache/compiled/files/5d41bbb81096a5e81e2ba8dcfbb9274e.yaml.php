<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/polet500/user/config/site.yaml',
    'modified' => 1490264091,
    'data' => [
        'title' => 'PoLet500',
        'author' => [
            'name' => 'Polemiche Letterarie del Cinquecento',
            'email' => 'polet500@nuovorinascimento.org'
        ],
        'blog' => [
            'route' => ''
        ],
        'metadata' => [
            'title' => 'PoLet500 - Polemiche Letterarie del 500',
            'description' => 'PoLet500 è un progetto in costruzione di schedatura telematica di polemiche letterarie del Cinquecento italiano'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month',
            3 => 'char',
            4 => 'author',
            5 => 'chronology'
        ],
        'redirects' => [
            '/changelog' => '/testi/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/testi/focus-and-blur',
            '/another/one/(.*)' => '/testi/$1'
        ]
    ]
];
