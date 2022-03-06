<?php

Hook::set('_', function($_) {
    $_['lot']['bar']['lot'][0]['lot']['folder']['skip'] = false;
    $_['lot']['bar']['lot'][0]['lot']['folder']['stack'] = 20; // Put after back link
    return $_;
}, 50);