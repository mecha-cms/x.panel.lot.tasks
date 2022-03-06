<?php

Hook::set('_', function($_) {
    $_['lot']['bar']['lot'][1]['lot']['license']['skip'] = false;
    return $_;
}, 50);