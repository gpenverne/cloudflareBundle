# CloudflareBundle
A Symfony3 bundle for the [PHP library for the Cloudflare v4 API `](https://github.com/cloudflare/cloudflare-php).

## Install
```bash
$ composer require gpenverne/cloudflare-bundle
```

## Configuration
You have to generate a "APIToken" from your cloudflare "My Profile" > "API Tokens" page
```yaml
# app/config/packages/cloudflare.yaml
...
cloudflare:
    api_token: your_cloudflare_api_token
```
Or for older versions of symfony:
```yaml
# app/config/parameters.yml
parameters:
    cloudflare.api_token: some-cloudflare-api_token
```

## Use it
```php
$cloudflareService = $this->container->get('cloudflare.service');
// Or ...
$cloudflareService = $this->container->get(Gpenverne\CloudflareBundle\Services\CloudflareService::class)
// Or inject in your constructors

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
