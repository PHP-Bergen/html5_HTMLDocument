# Code: Before & After

## OLD: PHP 8.3 — DOMDocument

```php
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML(
  mb_convert_encoding(
    $html, 'HTML-ENTITIES', 'UTF-8'
  )
);
libxml_clear_errors();

$xpath = new DOMXPath($dom);
$links = $xpath->query(
  "//a[@class='nav-link']"
);
foreach ($links as $link) {
  echo $link->getAttribute('href');
}
```

## NEW: PHP 8.4 — Dom\HTMLDocument

```php
$dom = Dom\HTMLDocument::createFromString(
  $html,
  LIBXML_NOERROR,
  'UTF-8'
);

// Native CSS selectors — no XPath!
$links = $dom->querySelectorAll(
  'a.nav-link'
);

foreach ($links as $link) {
  echo $link->getAttribute('href');
}

```

### [> Next](error-handling.md)

### [> Back](index.md)

### [> Home](../README.md)