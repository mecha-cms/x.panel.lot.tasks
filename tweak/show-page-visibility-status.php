<?php

Hook::set('_', function ($_) {
    if (0 === strpos($_['type'] . '/', 'pages/')) {
        if (!empty($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'])) {
            foreach ($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['pages']['lot']['pages']['lot'] as $k => &$v) {
                if (is_file($file = $v['path'] ?? $k) && !array_key_exists('status', $v)) {
                    $status = pathinfo($file, PATHINFO_EXTENSION);
                    if ('page' !== $status) {
                        $v['status'] = i($status);
                    }
                } else if (isset($v['type']) && 'page' === $v['type']) {
                    // Fake!
                }
            }
            unset($v);
        }
    }
    return $_;
}, 10.2);