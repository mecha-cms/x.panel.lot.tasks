<?php

$content = <<<CSS
.lot\:fields .lot\:field {
  display: block;
}
.lot\:fields .lot\:field > label {
  text-align: left;
  width: auto;
  padding: 0;
  margin: 0 0 calc(var(--y) / 4);
}
CSS;

$_['asset']['vertical-form-label'] = [
    'id' => false,
    'link' => 'data:text/css;base64,' . base64_encode($content),
    'stack' => 20
];

return $_;