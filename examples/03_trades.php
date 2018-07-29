<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPublic('Trades', [
    'pair' => 'XBTCZEUR',
    'since' => '137589964200000000'
]);

print_r($res);
