<?php

require './bootstrap.php';

$res = $kraken->QueryPublic('Ticker', ['pair' => 'XBTUSD']);

print_r($res);
