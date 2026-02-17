# DOM

## PHP 8.3 and older

Only supports HTML up to version 4.01 (XHTML). Uses libxml2 HTML parser under the hood to parse these documents into a libxml2 document tree that ext/dom uses.

### Userspace solutions [HTML5-PHP](https://github.com/Masterminds/html5-php)

Masterminds HTML5-PHP is a standards-compliant HTML5 parser and writer written entirely in PHP. It is stable and used in many production websites and has well over five million downloads.

*  Installs: 232 912 616 (packagist.org)

### PHP DOMDocument class

```php
$dom = new \DOMDocument('1.0', 'UTF-8');
```

https://www.php.net/manual/en/class.domdocument.php
https://www.php.net/manual/en/domdocument.construct.php

Deprecated since PHP 8.4.0.

## PHP 8.4 and newer

DOM HTML5 parsing and serialization. The DOM extension in PHP is used to parse, query, and manipulate XML/HTML documents. HTML5 support, CSS selectors, and modern DOM features to PHP.

* PHP uses Lexbor, written in C. https://lexbor.com/
* https://wiki.php.net/rfc/domdocument_html5_parser
* https://wiki.php.net/rfc/dom_additions_84 - CSS selector support. No longer need to use XPath.
* https://wiki.php.net/rfc/opt_in_dom_spec_compliance

```php
createEmpty()
createFromFile()
createFromString()
```

* Lexbor, written in C. https://lexbor.com/
* https://blog.keyvan.net/p/parsing-html-with-php-84
* https://blog.keyvan.net/p/interview-with-niels-dossche
* https://wiki.php.net/rfc/opt_in_dom_spec_compliance
* https://github.com/lexbor/lexbor
