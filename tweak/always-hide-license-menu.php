<?php

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (!empty($_POST['state']['always-hide-license-menu']) && !empty($_POST['state']['always-show-license-menu'])) {
        $_['alert']['error']['license-menu'] = 'Please decide one, whether to always hide the license menu or to always show it?';
    }
}

Hook::set('_', function($_) {
    $_['lot']['bar']['lot'][1]['lot']['license']['skip'] = true;
    return $_;
}, 10.2);

return $_;