<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\gsclube//wp-content/themes/g5_hydrogen/blueprints/content/archive/title.yaml',
    'modified' => 1442615525,
    'data' => [
        'name' => 'Post Title',
        'description' => 'Options for displaying title',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display post titles.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link titles to the posts.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
