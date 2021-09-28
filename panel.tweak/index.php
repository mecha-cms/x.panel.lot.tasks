<?php namespace x\panel\route;

\State::set("x.panel\\.lot\\.folder.icons", (array) require __DIR__ . \DS . 'state' . \DS . 'icon.php');

function __lot($_) {
    extract($GLOBALS, \EXTR_SKIP);
    if ('g' === $_['task'] && '.lot' === $_['path']) {
        \State::set([
            'is' => [
                'page' => false,
                'pages' => true
            ]
        ]);
        $folders = [];
        foreach (\g(\LOT, 0) as $k => $v) {
            $n = \basename($k);
            $folders[$n] = [
                'title' => 'x' === $n ? 'Extension' : \To::title($n),
                'icon' => $_['lot']['bar']['lot'][0]['lot']['folder']['lot'][$n]['icon'] ?? [],
                'url' => $_['/'] . '/::g::/.lot/' . $n,
                'tasks' => [
                    'g' => [
                        'title' => 'Edit',
                        'description' => 'Edit',
                        'icon' => 'M5,3C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19H5V5H12V3H5M17.78,4C17.61,4 17.43,4.07 17.3,4.2L16.08,5.41L18.58,7.91L19.8,6.7C20.06,6.44 20.06,6 19.8,5.75L18.25,4.2C18.12,4.07 17.95,4 17.78,4M15.37,6.12L8,13.5V16H10.5L17.87,8.62L15.37,6.12Z',
                        'url' => $_['/'] . '/::g::/.lot/' . $n,
                        'stack' => 10
                    ],
                    'l' => [
                        'title' => 'Delete',
                        'description' => 'Delete',
                        'icon' => 'M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z',
                        'url' => $_['/'] . '/::l::/.lot/' . $n . $url->query('&', [
                            'q' => false,
                            'tab' => false,
                            'token' => $_['token']
                        ]),
                        'stack' => 20
                    ]
                ]
            ];
        }
        $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot'] = [
            'folders' => [
                'lot' => [
                    'folders' => [
                        'type' => 'folders',
                        'lot' => $folders,
                        'stack' => 10
                    ]
                ],
                'stack' => 10
            ]
        ];
        return $_;
    }
    \State::set([
        'is' => [
            'page' => true,
            'pages' => false
        ]
    ]);
    $icons = [];
    $n = $_['chop'][1] ?? "";
    foreach ((array) \State::get("x.panel\\.lot\\.folder.icons", true) as $k => $v) {
        $icons[$k] = [
            'title' => "" === $k ? 'Default' : \To::title($k),
            'icon' => "" === $k ? ($_['lot']['bar']['lot'][0]['lot']['folder']['lot'][$n]['icon'] ?? $v) : $v
        ];
    }
    $icons = (new \Anemon($icons))->sort([1, 'title'])->get();
    $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot'] = [
        'folder' => [
            'lot' => [
                'fields' => [
                    'type' => 'fields',
                    'lot' => [
                        'title' => [
                            'type' => 'title',
                            'name' => 'lot[title]',
                            'hint' => 'Folder',
                            'width' => true,
                            'stack' => 10
                        ],
                        'name' => [
                            'type' => 'name',
                            'x' => false,
                            'name' => 'lot[name]',
                            'value' => $n,
                            'hint' => 'folder',
                            'vital' => true,
                            'focus' => true,
                            'width' => true,
                            'stack' => 20
                        ]
                    ],
                    'stack' => 10
                ]
            ],
            'stack' => 10
        ],
        'icon' => [
            'lot' => [
                'fields' => [
                    'type' => 'fields',
                    'lot' => [
                        'icon' => [
                            'type' => 'item',
                            'name' => 'lot[icon]',
                            'sort' => false,
                            'lot' => $icons,
                            'value' => "",
                            'stack' => 10
                        ]
                    ],
                    'stack' => 10
                ]
            ],
            'stack' => 20
        ]
    ];
    $_['lot']['desk']['lot']['form']['lot'][2]['lot']['fields'] = [
        'type' => 'fields',
        'lot' => [
            0 => [
                'title' => "",
                'type' => 'field',
                'lot' => [
                    'tasks' => [
                        'type' => 'tasks/button',
                        'lot' => [
                            's' => [
                                'title' => 'g' === $_['task'] ? 'Update' : 'Create',
                                'type' => 'submit',
                                'name' => false,
                                'stack' => 10
                            ],
                            'l' => [
                                'title' => 'Delete',
                                'type' => 'link',
                                'url' => strtr($url->clean . $url->query('&', [
                                    'token' => $_['token']
                                ]), ['::g::' => '::l::']),
                                'skip' => 's' === $_['task'],
                                'stack' => 20
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];
    return $_;
}