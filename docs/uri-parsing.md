# Parse URL

php4: parse_url() existed since PHP 4 (1997).

Never compliant with any standard

## Why parse_url() Wasn't Enough

* **No standard compliance**: parse_url() docs literally warn: "results may not match common behavior of HTTP clients"
* **Security: parsing confusion** FILTER_VALIDATE_URL may accept a URL that cURL (RFC 3986) rejects — exploitable in redirect & SSRF attacks
* **No immutable manipulation**: Modifying a URL required manual array surgery and string concatenation — fragile and error-prone
* **No validation on write** Nothing stops you building an invalid URL; errors appear silently at request time, not at construction

### [> Next](standards-classes.md)

### [> Back](index.md)

### [> Home](../README.md)