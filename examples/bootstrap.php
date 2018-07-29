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
    0, // version
    filter_var(getenv('KRAKEN_API_SSL_VERIFY'), FILTER_VALIDATE_BOOLEAN)
);
