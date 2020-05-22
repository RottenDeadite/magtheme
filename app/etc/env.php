<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => 'localhost',
                'dbname' => 'magpul',
                'username' => 'root',
                'password' => '',
                'active' => '1',
                'persistent' => NULL,
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;'
            ],
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magpul',
                'username' => 'root',
                'password' => '',
                'active' => '1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;'
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '70e633dcbdbb597d8ffb83271d483cd9'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '9e3_'
            ],
            'page_cache' => [
                'id_prefix' => '9e3_'
            ]
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 0,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'target_rule' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'install' => [
        'date' => 'Sat, 29 Jun 2019 00:41:56 +0000'
    ]
];
