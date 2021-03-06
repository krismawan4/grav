<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/krismawan_riki/Sites/grav-admin/user/plugins/database/blueprints.yaml',
    'modified' => 1629781035,
    'data' => [
        'name' => 'Database',
        'version' => '1.0.2',
        'description' => 'Allows a unified way to access databases within Grav via PDO',
        'icon' => 'database',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'developers@getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-database',
        'keywords' => 'grav, plugin, database, sqlite, mysql',
        'bugs' => 'https://github.com/getgrav/grav-plugin-database/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-database/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
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
                'text_var' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_DATABASE.TEXT_VARIABLE',
                    'help' => 'PLUGIN_DATABASE.TEXT_VARIABLE_HELP'
                ]
            ]
        ]
    ]
];
