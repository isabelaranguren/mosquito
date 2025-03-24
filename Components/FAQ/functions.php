<?php

namespace Flynt\Components\FAQ;

function getACFLayout(): array
{
    return [
        'name' => 'fAQ',
        'label' => __('Block: FAQ', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'table',
                'button_label' => __('Add Item', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'content',
                        'type' => 'wysiwyg',
                        'delay' => 0,
                        'media_upload' => 0,
                        'wrapper' => [
                            'width' => 60
                        ],
                    ],
                ]
            ],
        ]
    ];
}
