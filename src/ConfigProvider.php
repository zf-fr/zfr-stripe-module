<?php

namespace ZfrStripeModule;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies()
    {
        return [
            'factories' => [
                'ZfrStripe\Client\StripeClient' => Factory\StripeClientFactory::class,
            ],
        ];
    }
}
