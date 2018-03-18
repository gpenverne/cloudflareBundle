# CloudflareBundle
A Symfony3 bundle for the [PHP library for the Cloudflare v4 API `](https://github.com/cloudflare/cloudflare-php).
Needs php7.

## Install
```bash
$ composer require gpenverne/cloudflare-bundle
```

## Load the bundle
```php
// app/config/AppKernel.php

public function registerBundles()
{
    $bundles = [
        // ...
        new Gpenverne\CloudflareBundle\CloudflareBundle(),
        // ...
    ];
    // ...
}
```

## Configuration
```yaml
# app/config/parameters.yml
...
    cloudflare.api_email: your-cloudflare-account@email.com
    cloudflare.api_key: your_cloudflare_api_key
```

## Use it
```php
$cloudflareService = $this->container->get('cloudflare.service');

// Retrieve a Cloudflare SDK endpoint
$userEndpoint = $cloudflareService->get('User');

// Or use built-in shortcut
$userEndpoint = $cloudflareService->user;

// Listing all zones
$zones = $cloudflareService->zones->listZones();
```
