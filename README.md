ZfrStripeModule
===============

ZfrStripeModule is a Zend Framework 2 module that integrates with [ZfrStripe](https://github.com/zf-fr/zfr-stripe).


Versions
--------
For zend-servicemanager 2 use version 4.0

For zend-servicemanager 3 and above use version 5.0


Installation
------------

To install ZfrStripeModule, use composer:

```sh
$ composer require zfr/zfr-stripe-module ^5.0
```

Enable ZfrStripeModule in your `application.config.php`, then copy the file
`vendor/zfr/zfr-stripe-module/config/zfr_stripe.local.php.dist` to the
`config/autoload` directory of your application (don't forget to remove the
`.dist` extension from the file name!).

> ### zf-component-installer
>
> If you use [zf-component-installer](https://github.com/zendframework/zf-component-installer),
> that plugin will install ZfrStripeModule as a module for you.


Usage
-----

This module registers the ZfrStripe client in your application's service manager.
You can get it by requesting the service `ZfrStripe\Client\StripeClient`:

```php
$stripeClient = $serviceManager->get('ZfrStripe\Client\ZfrStripeClient');
```

For more information on the usage of `ZfrStripe`, please refer to [its documentation](https://github.com/zf-fr/zfr-stripe).
