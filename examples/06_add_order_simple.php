<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPrivate('AddOrder', [
    'pair' => 'XBTUSD',
    'type' => 'sell',
    'ordertype' => 'limit',
    'price' => '120',
    'volume' => '1.123'
]);

print_r($res);
