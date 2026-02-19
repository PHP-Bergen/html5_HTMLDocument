# Code: Before & After

## PHP 8.4 — parse_url()

```php
$url = 'HTTPS://User:Pass@Example.COM:443'
      . '/products/list?page=1#top';

$parts = parse_url($url);
// No validation — returns false silently
// or wrong results for edge cases

$parts['scheme'] = 'https';
$parts['path']   = '/new-path';

// Manual string reconstruction — fragile!
$new = $parts['scheme'] . '://'
     . $parts['host']
     . $parts['path'];

echo $new;
// https://Example.COM/new-path
// Host NOT normalized!

```

## PHP 8.5 — Uri\Rfc3986\Uri

```php
use Uri\Rfc3986\Uri;

$uri = new Uri(
  'HTTPS://User:Pass@Example.COM:443'
  . '/products/list?page=1#top'
);

// Throws on invalid input — fail fast!

// Normalized getters (lowercased host etc.)
echo $uri->getScheme(); // https
echo $uri->getHost();   // example.com
echo $uri->getPort();   // 443

// Immutable modification — returns new instance
$updated = $uri
  ->withScheme('https')
  ->withPath('/new-path')
  ->withPort(null);     // removes default port

echo $updated->toString();
// https://User:Pass@example.com/new-path?page=1#top

```

### [> Next](standards-classes.md)

### [> Back](index.md)

### [> Home](../README.md)