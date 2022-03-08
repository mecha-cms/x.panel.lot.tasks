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

$_['asset']['style'][] = [
    'content' => $content,
    'stack' => 20
];

return $_;