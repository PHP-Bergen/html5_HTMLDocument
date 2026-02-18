## DOM Usage

```php
$dom = HTMLDocument::createFromString(
  <<<HTML
        <main>
            <article>PHP 8.4 - PHP Bergen</article>
            <article class="featured">PHP 8.4 adds new DOM classes that are spec-compliant, keeping the old ones for compatibility.</article>
        </main>
        HTML,
  LIBXML_NOERROR,
);

print_r($dom->saveHtml())
```

```html
<html>
<head></head>
<body>
<main>
    <article>PHP 8.4 - PHP Bergen</article>
    <article class="featured">PHP 8.4 adds new DOM classes that are spec-compliant, keeping the old ones for
        compatibility.
    </article>
</main>
</body>
</html>
```

## www.uib.no

```php
  /**
   * Returns title from DOM metadata.
   *
   * @param \Dom\HTMLDocument $dom
   *   DOM node to be parsed.
   *
   * @return string
   *   Meta title or an empty string if not present.
   */
  private function getTitle(HTMLDocument $dom): string {
    $meta_node = $dom->getElementsByTagName('meta');
    for ($i = 0; $i < $meta_node->length; $i++) {
      $item = $meta_node->item($i);
      // og:title is preferred over title.
      if ($item !== NULL && $item->getAttribute('property') === 'og:title') {
        return $item->getAttribute('content');
      }
    }
    // Fallback to title.
    if ($item = $dom->getElementsByTagName('title')->item(0)) {
      return $item->textContent;
    }
    return '';
  }
```

```php
DOM\Document; 
DOM\XMLDocument;
DOM\HTMLDocument;
```

```php
createEmpty()
createFromFile()
createFromString()
```

### [> Home](../README.md) > [Index](index.md)
