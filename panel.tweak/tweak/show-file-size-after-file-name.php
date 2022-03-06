<?php

Hook::set('_', function($_) {
    if (0 === strpos($_['type'] . '/', 'files/')) {
        if (!empty($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['files']['lot']['files']['lot'])) {
            foreach ($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['files']['lot']['files']['lot'] as $k => &$v) {
                if (is_file($file = $v['path'] ?? $k) && !array_key_exists('info', $v)) {
                    $v['info'] = '(' . size(filesize($file)) . ')';
                } else if (isset($v['type']) && 'file' === $v['type']) {
                    // Fake!
                }
            }
            unset($v);
        }
    }
    return $_;
}, 50);