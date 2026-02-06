# URI Parsing API

Introduced in PHP 8.5.

An RFC 3986 and WHATWG URL compliant API. WHATWG uses Lexbor.

* High complexity.
* Security concerns.
    * [Dont mix parsers](https://daniel.haxx.se/blog/2022/01/10/dont-mix-url-parsers/).
    * Remember Log4j
        * `jndi:ldap://127.0.0.1#.evilhost.com:1389/a`
    * Security white paper [EXPLOITING URL PARSERS: THE GOOD, BAD, AND INCONSISTENT ](https://web-assets.claroty.com/exploiting-url-parsing-confusion.pdf)

### WHATWG
This is what is followed by web browsers.

* Lexbor - Added to PHP 8.4
* PHP uses Lexbor, written in C. https://lexbor.com/
* HTML5 support, CSS selectors, and modern DOM features to PHP.

### RFC 3986

Is the original URI standard from 2005. Gave up on RFC 3987. these two commonly used standards are incompatible with each other.

## IRI (Internationalized Resource Identifier)

<img src="images/iri_venn_diagramm.svg" alt="URL Parsing API" width="600">

## Examples

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

Result:
```
https://thephp.foundation/sponsor/
HTTPS://thephp.foundation/sp%6Fnsor/
```

```php
$uri->getHost();
$uri->getScheme();
$uri->getPort();
```

## References

* [PHP RFC: Add RFC 3986 and WHATWG URL compliant API](https://wiki.php.net/rfc/url_parsing_api)
* [URL living standard](https://url.spec.whatwg.org/#title)

## [> Home](../README.md) > [Index](index.md)
