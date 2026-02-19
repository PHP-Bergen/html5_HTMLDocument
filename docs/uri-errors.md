#  WHATWG Soft & Hard Errors

* **Two error modes:** Hard errors throw InvalidUrlException. Soft errors are collected in $errors — URL still parses.
* **Auto-normalization:** WHATWG always normalizes on parse: lowercases host, removes leading/trailing spaces, etc.
* **Unicode host support:** getUnicodeHost() for human-readable IDN domains, getAsciiHost() for wire format.
* **parse() factory:** Static Url::parse() returns null on hard failure instead of throwing — useful in validation paths.

### [> Next](standards-classes.md)

### [> Back](index.md)

### [> Home](../README.md)