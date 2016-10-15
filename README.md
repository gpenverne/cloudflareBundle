# CloudflareBundle
A bundle for the [`Jamesryanbell cloudflare api library`](https://github.com/jamesryanbell).

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
    cloudflare.api_email: your-cloud-account@email.com
    cloudflare.api_key: your_cloudflare_api_key
```

## Use it
```php
$cloudflareService = $this->container->get('cloudflare.service');

// Listing all zones
$zones = $cloudflareService->getZone()->zones();

// Get a dns_record information using the cloudflare endpoint
$cloudflareService->getApi()->get(sprintf('zones/%s/dns_records', 'aZoneId'));
```
