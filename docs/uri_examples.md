## URI and URL Examples

```php
use Uri\Rfc3986\Uri;

$url = new Uri('HTTPS://thephp.foundation:443/sp%6Fnsor/');
$defaultPortForScheme = match ($url->getScheme()) {
  'http' => 80,
  'https' => 443,
  'ssh' => 22,
  default => null,
};

// Remove default ports from URLs.
if ($url->getPort() === $defaultPortForScheme) {
  $url = $url->withPort(null);
}
```

Getters normalize the URL by default. The `Raw` variants return the input unchanged.

```php

echo $url->toString(), PHP_EOL;
echo $url->toRawString(), PHP_EOL;
```

### Results:

```
https://thephp.foundation/sponsor/
HTTPS://thephp.foundation/sp%6Fnsor/
```

```php
$uri = Uri::parse('https://phpbergen.no/example');
$uri->getPath(); // /example
$uri->getHost(); // phpbergen.no
$uri->getScheme(); // https
$uri->toString(); // https://phpbergen.no/example
```

### Credentials

```php
$login = Uri::parse('https://helge:1234@phpbergen.no/example');
$login->getUsername(); // helge 
$login->getPassword(); // 1234
```

### Query parameters

```php
$query = Uri::parse('https://helge:1234@phpbergen.no/member?name=steinmb');
$query->getQuery(); // name=steinmb
```

## References

* [PHP RFC: Add RFC 3986 and WHATWG URL compliant API](https://wiki.php.net/rfc/url_parsing_api)
* [URL living standard](https://url.spec.whatwg.org/#title)

### [> Home](../README.md) > [Index](index.md)
