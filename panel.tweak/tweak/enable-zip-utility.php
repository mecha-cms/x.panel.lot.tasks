<?php

$zip = extension_loaded('zip');

Hook::set('_', function($_) use($zip) {
    if (0 === strpos($_['type'] . '/', 'files/')) {
        if (!empty($_['lot']['desk']['lot']['form']['lot'][0]['lot']['tasks'])) {
            $_['lot']['desk']['lot']['form']['lot'][0]['lot']['tasks']['lot']['pack'] = [
                'active' => $not_void = $zip && !!q(g($folder = $_['folder'] ?? P, 1)),
                'description' => $not_void ? 'Download as ZIP' : 'Folder is empty',
                'icon' => 'M5,20H19V18H5M19,9H15V3H9V9H5L12,16L19,9Z',
                'stack' => 11,
                'title' => false,
                'type' => 'link',
                'url' => $not_void ? [
                    'part' => 0,
                    'path' => strtr($folder, [LOT . D => "", D => '/']),
                    'query' => [
                        'stack' => null,
                        'tab' => null,
                        'token' => $_['token'],
                        'type' => null
                    ],
                    'task' => 'fire/zip'
                ] : null
            ];
        }
        if (!empty($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['files']['lot']['files']['lot'])) {
            foreach ($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['files']['lot']['files']['lot'] as $k => &$v) {
                if (is_file($file = $v['path'] ?? $k) && 'zip' == pathinfo($file, PATHINFO_EXTENSION)) {
                    $v['tasks']['extract'] = [
                        'active' => $zip,
                        'description' => 'Extract',
                        'icon' => 'M20 21H4V10H6V19H18V10H20V21M3 3H21V9H3V3M5 5V7H19V5M10.5 17V14H8L12 10L16 14H13.5V17',
                        'stack' => 9,
                        'title' => 'Extract',
                        'url' => [
                            'part' => 0,
                            'path' => strtr($file, [LOT . D => "", D => '/']),
                            'query' => [
                                'stack' => null,
                                'tab' => null,
                                'token' => $_['token'],
                                'type' => null
                            ],
                            'task' => 'fire/zip'
                        ]
                    ];
                } else if (is_dir($folder = $v['path'] ?? $k)) {
                    $v['tasks']['pack'] = [
                        'active' => $not_void = $zip && !!q(g($folder, 1)),
                        'description' => $not_void ? 'Pack' : 'Folder is empty',
                        'icon' => 'M20 21H4V10H6V19H18V10H20V21M3 3H21V9H3V3M5 5V7H19V5M10.5 11V14H8L12 18L16 14H13.5V11',
                        'stack' => 9,
                        'title' => 'Pack',
                        'url' => $not_void ? [
                            'part' => 0,
                            'path' => strtr($folder, [LOT . D => "", D => '/']),
                            'query' => [
                                'stack' => null,
                                'tab' => null,
                                'token' => $_['token'],
                                'type' => null
                            ],
                            'task' => 'fire/zip'
                        ] : null
                    ];
                }
            }
            unset($v);
        }
    }
    return $_;
}, 50);