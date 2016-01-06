ZfrStripeModule
===============

ZfrStripeModule is a Zend Framework 2 module that integrates with [ZfrStripe](https://github.com/zf-fr/zfr-stripe).

Installation
------------

To install ZfrStripeModule, use composer:

```sh
php composer.phar require zfr/zfr-stripe-module:~4.0
```

Enable ZfrStripeModule in your `application.config.php`, then copy the file
`vendor/zfr/zfr-stripe-module/config/zfr_stripe.local.php.dist` to the
`config/autoload` directory of your application (don't forget to remove the
`.dist` extension from the file name!).

Usage
-----

This module registers the ZfrStripe client in your application's service manager.
You can get it by requesting the service `ZfrStripe\Client\StripeClient`:

```php
$stripeClient = $serviceManager->get('ZfrStripe\Client\ZfrStripeClient');
```

For more information on the usage of `ZfrStripe`, please refer to [its documentation](https://github.com/zf-fr/zfr-stripe).
