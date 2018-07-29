<?php

use Dotenv\Dotenv;
use Payward\KrakenAPI;

require __DIR__.'/../vendor/autoload.php';

$dotenv = new Dotenv(__DIR__.'/../');
$dotenv->load();

$kraken = new KrakenAPI(
    getenv('KRAKEN_API_KEY'),
    getenv('KRAKEN_API_SECRET'),
    getenv('KRAKEN_API_URL'),
    getenv('KRAKEN_API_VERSION'),
    getenv('KRAKEN_API_SSL_VERIFY')
);
