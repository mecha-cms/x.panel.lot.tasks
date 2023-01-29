<?php

Hook::set('_', function ($_) use ($state) {
    $_['lot']['bar']['lot'][1]['lot']['test']['skip'] = true;
    if (isset($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['tweaks'])) {
        $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['tweaks']['lot']['tweaks']['lot'][basename(__FILE__, '.php')]['active'] = isset($state->x->{'test.panel'});
    }
    return $_;
}, 100.2);