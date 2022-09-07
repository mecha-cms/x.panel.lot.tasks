<?php

Hook::set('_', function ($_) {
    if (0 === strpos($_['type'] . '/', 'page/') && isset($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['type'])) {
        $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['type']['type'] = 'text';
    }
    return $_;
}, 10.2);