<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPrivate('Balance');

print_r($res);
