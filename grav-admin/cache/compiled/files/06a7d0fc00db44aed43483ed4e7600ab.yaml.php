<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/cwiggs/grav-admin/user/config/site.yaml',
    'modified' => 1478368384,
    'data' => [
        'title' => 'cwiggs',
        'author' => [
            'name' => 'Chris Wiggins',
            'email' => 'cwiggins@cwiggs.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Personal Page for Chris Wiggins'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
