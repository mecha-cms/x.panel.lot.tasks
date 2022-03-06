<?php

Hook::set('_', function($_) {
    $_['lot']['bar']['lot'][0]['lot']['folder']['title'] = 'Folders';
    return $_;
}, 50);