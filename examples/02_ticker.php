<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPublic('Ticker', [
    'pair' => 'XBTUSD'
]);

print_r($res);
