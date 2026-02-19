# Two Standards, Two Classes

## Uri\Rfc3986\Uri

* Strict RFC 3986 validation — rejects invalid input
* Preserves input exactly (raw) or normalizes on request
* getRawHost() vs getHost() — encoded vs decoded
* Immutable with-er methods (withScheme, withPort…)
* URI comparison with UriComparisonMode enum
* Powered by the uriparser C library

## Uri\WhatWg\Url

* WHATWG URL Living Standard — browser behavior
* Auto-normalizes on parse (lowercases host, etc.)
* Unicode/IDNA host support via getUnicodeHost()
* Soft errors collected in $errors array, not thrown
* Hard errors throw InvalidUrlException
* Powered by Lexbor — same lib as PHP 8.4 DOM


### [> Next](uri-bef-aft.md)

### [> Back](index.md)

### [> Home](../README.md)