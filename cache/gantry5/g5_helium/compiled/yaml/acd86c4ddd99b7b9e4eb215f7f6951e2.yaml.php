<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/hpelaez/Workspace/project-mozart/user/themes/g5_helium/blueprints/styles/intro.yaml',
    'modified' => 1584925572,
    'data' => [
        'name' => 'Intro Styles',
        'description' => 'Intro section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f4f5f7'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
