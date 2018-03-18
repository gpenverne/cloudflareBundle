# CloudflareBundle
A Symfony3 bundle for the [PHP library for the Cloudflare v4 API `](https://github.com/cloudflare/cloudflare-php).

## Install
```bash
$ composer require gpenverne/cloudflare-bundle
```

## Load the bundle
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

## Configuration
```yaml
# app/config/parameters.yml
...
    cloudflare.api_email: your-cloudflare-account@email.com
    cloudflare.api_key: your_cloudflare_api_key
```

## Use it
```php
$cloudflareService = $this->container->get('cloudflare.service');

// Retrieve a Cloudflare SDK endpoint
$userEndpoint = $cloudflareService->get('User');

// Or use built-in shortcut
$userEndpoint = $cloudflareService->user;

// Listing all zones
$zones = $cloudflareService->zones->listZones();

// Adapted example from extracted from https://support.cloudflare.com/hc/en-us/articles/115001661191
$zones = $cloudflareService->zones;
foreach ($zones->listZones()->result as $zone) {
    echo "Cache purge for " . $zone->name . ": ";
    echo $zones->cachePurgeEverything($zone->id) == true ? "successful" : "failed";
    echo PHP_EOL;

}

// Add a domain to a zone
try {
    return $cloudflareService->dns->addRecord(
        $zone->id,
        'CNAME',
        'my-subdomain',
        'my-domain.com'
    );
} catch (\Exception $e) {
    return false;
}
```
