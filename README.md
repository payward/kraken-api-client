# Kraken API Client

![Kraken API Client](/resources/kraken_logo.png?raw=true)

API client for running trading actions on the Kraken platform. See [https://www.kraken.com/help/api](https://www.kraken.com/help/api) for more info.

### 1. Install

Via composer:

    $ composer require "payward/kraken-api-client @dev"

### 2. Configuration

#### `.env.dev`

    KRAKEN_API_URL=https://api.beta.kraken.com
    KRAKEN_API_KEY="your api key"
    KRAKEN_API_SECRET="your api secret"

#### `.env.prod`

    KRAKEN_API_URL=https://api.kraken.com
    KRAKEN_API_KEY="your api key"
    KRAKEN_API_SECRET="your api secret"
    KRAKEN_API_SSL_VERIFY=true

> The `KRAKEN_API_SSL_VERIFY` variable is evaluated to `false` if not included in the `.env.dev` file, as it discussed at [Detect and convert types #104](https://github.com/vlucas/phpdotenv/issues/104)

### 3. Instantiation

```php
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
```

> `vlucas/phpdotenv` parses boolean variables as strings, as it discussed at [Detect and convert types #104](https://github.com/vlucas/phpdotenv/issues/104). So, it is recommended to use `filter_var` with `getenv('KRAKEN_API_SSL_VERIFY')`

### 3. Examples

Fetch the list of active assets and their properties:

    php examples/01_assets.php

Fetch the XBT/USD ticker:

    php examples/02_ticker.php

Fetch the XBT/EUR trades since 2013-08-07T18:20:42+00:00:

    php examples/03_trades.php

> The `since` parameter is subject to change in the future: it's precision may be modified, and it may no longer be representative of a timestamp. The best practice is to base it on the `last` value returned in the result set.

Fetch the balance:

    php examples/04_balance.php

Fetch the open orders and included related trades:

    php examples/05_open_orders.php

Add a simple order, sell 1.123 XBT/USD limit $120:

    php examples/06_add_order_simple.php

Add an intermediate order, buy 300 XBT/EUR market at 2013-08-12T09:27:22+0000:

    php examples/07_add_order_intermediate.php

Add an advanced order, buy 2.12345678 XBT/USD limit $101.9 with a few more options:

    php examples/08_add_order_advanced.php

> See the code of this example. 2:1 leverage, with
 a follow up stop loss, take profit sell order: stop at -5% loss, take profit at +$10 price increase (signed stop/loss prices determined automatically using # notation)
