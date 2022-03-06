<?php

Hook::set('_', function($_) {
    if (0 === strpos($_['type'] . '/', 'page/') && isset($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name'])) {
        $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name']['skip'] = false;
    }
    return $_;
}, 50);