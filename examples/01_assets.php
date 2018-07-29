<?php

require __DIR__.'/bootstrap.php';

$res = $kraken->QueryPublic('Assets');

print_r($res);
