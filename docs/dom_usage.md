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
