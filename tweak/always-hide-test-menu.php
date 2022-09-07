<?php

Hook::set('_', function ($_) {
    $_['lot']['bar']['lot'][1]['lot']['test']['skip'] = true;
    return $_;
}, 10.2);