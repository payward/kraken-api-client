<?php

use Dotenv\Dotenv;
use Payward\KrakenAPI;

require __DIR__.'/../vendor/autoload.php';

$dotenv = new Dotenv(__DIR__.'/../');
$dotenv->load();

// your api credentials
$key = getenv('KRAKEN_API_KEY');
$secret = getenv('KRAKEN_API_SECRET');

// set which platform to use (currently only beta is operational, live available soon)
$beta = false;
$url = $beta ? 'https://api.beta.kraken.com' : 'https://api.kraken.com';
$sslverify = $beta ? false : true;
$version = 0;

$kraken = new KrakenAPI($key, $secret, $url, $version, $sslverify);
