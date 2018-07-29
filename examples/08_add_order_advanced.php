<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPrivate('AddOrder', [
    'pair' => 'XBTUSD',
    'type' => 'buy',
    'ordertype' => 'limit',
    'price' => '101.9',
    'volume' => '2.12345678',
    'leverage' => '2:1',
    'close' => [
        'ordertype' => 'stop-loss-profit',
        'price' => '#5%',  // stop loss price (relative percentage delta)
        'price2' => '#10'  // take profit price (relative delta)
    ]
]);

print_r($res);
