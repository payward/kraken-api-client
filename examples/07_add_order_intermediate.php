<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPrivate('AddOrder', [
    'pair' => 'XBTEUR',
    'type' => 'buy',
    'ordertype' => 'market',
    'oflags' => 'viqc',
    'volume' => '300',
    'starttm' => '1376299642'
]);

print_r($res);
