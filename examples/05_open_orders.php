<?php

require './bootstrap.php';

$res = $kraken->QueryPrivate('OpenOrders', ['trades' => true]);

print_r($res);
