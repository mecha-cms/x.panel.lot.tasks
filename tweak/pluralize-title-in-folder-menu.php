<?php

Hook::set('_', function ($_) {
    $_['lot']['bar']['lot'][0]['lot']['folder']['lot'];
    if (!empty($_['lot']['bar']['lot'][0]['lot']['folder']['lot'])) {
        foreach ($_['lot']['bar']['lot'][0]['lot']['folder']['lot'] as &$v) {
            if (isset($v['title']) && is_string($title = $v['title'])) {
                if (
                    'ch' === substr($title, -2) ||
                    's' === substr($title, -1) ||
                    'sh' === substr($title, -2) ||
                    'x' === substr($title, -1) ||
                    'z' === substr($title, -1)
                ) {
                    $v['title'] .= 'es';
                } else {
                    $v['title'] .= 's';
                }
            }
        }
        unset($v);
    }
    return $_;
}, 10.2);