<?php

require './bootstrap.php';

$res = $kraken->QueryPublic('Assets');

print_r($res);
