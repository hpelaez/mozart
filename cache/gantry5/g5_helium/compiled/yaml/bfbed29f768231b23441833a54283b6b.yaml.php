<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/user/plugins/gantry5/engines/nucleus/particles/breadcrumbs.yaml',
    'modified' => 1584764143,
    'data' => [
        'name' => 'Breadcrumbs',
        'description' => 'Breadcrumbs Particle for Grav Breadcrumbs Plugin',
        'type' => 'particle',
        'icon' => 'fa-ellipsis-h',
        'dependencies' => [
            'platform' => [
                'grav' => [
                    'plugin' => [
                        'breadcrumbs' => true
                    ]
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable breadcrumbs particles.',
                    'default' => true
                ]
            ]
        ]
    ]
];
