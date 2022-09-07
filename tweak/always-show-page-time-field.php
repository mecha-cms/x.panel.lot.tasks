<?php

Hook::set('_', function ($_) {
    if (0 === strpos($_['type'] . '/', 'page/') && isset($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name'])) {
        $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['data']['lot']['fields']['lot']['time']['skip'] = false;
        if (empty($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['data']['lot']['fields']['lot']['time']['value'])) {
            $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['data']['lot']['fields']['lot']['time']['value'] = date('Y-m-d H:i:s');
        }
    }
    return $_;
}, 10.2);