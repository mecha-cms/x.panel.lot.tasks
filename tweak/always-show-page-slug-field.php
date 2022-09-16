<?php

Hook::set('_', function ($_) {
    if (0 === strpos($_['type'] . '/', 'page/') && isset($_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name'])) {
        $r = To::JSON($GLOBALS['F'] ?? []);
        $script = <<<JS
(form => {
    if (!form) {
        return;
    }
    const r = $r;
    const name = form['page[name]'];
    const title = form['page[title]'];
    if (name && "" !== name.value) {
        return; // Edit mode?
    }
    name && title && title.addEventListener('input', () => {
        let value = "";
        (title.value || "").trim().split("").forEach(v => {
            value += r[v] || v;
        });
        name.value = value.replace(/[A-Z]/g, self => {
            return '-' + self.toLowerCase();
        }).replace(/[^a-z\d]+/g, '-').replace(/-+/g, '-').replace(/^-+|-+$/g, "");
    });
})(document.forms.set);
JS;
        $_['asset'][] = [
            'link' => 'data:text/js;base64,' . To::base64($script),
            'stack' => 10
        ];
        $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['page']['lot']['fields']['lot']['name']['skip'] = false;
    }
    return $_;
}, 10.2);