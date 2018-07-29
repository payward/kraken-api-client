<?php

require './bootstrap.php';

$res = $kraken->QueryPrivate('Balance');

print_r($res);
