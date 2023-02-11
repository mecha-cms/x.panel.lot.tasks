<?php

Hook::set('_', function ($_) use ($site) {
    $_['lot']['bar']['lot'][0]['lot']['folder']['caret'] = true;
    $_['lot']['bar']['lot'][0]['lot']['folder']['title'] = $site->title ?? 'Folders';
    return $_;
}, 10.2);