# Error handling

* **Typed errors:** Dom\ParseError with line, column, message and level properties
* **Exception-first:** Fatal issues throw Dom\Exception — no more silent failures
* **Non-fatal list:** $dom->errors array — inspect at your leisure after parsing
* **Clean state:** No global libxml error state to manage with libxml_clear_errors()
  

```php
$html = '<html><p>Unclosed <b>tag<div>soup</html>';

try {
    $dom = Dom\HTMLDocument::createFromString(
        $html,
        LIBXML_NOERROR
    );
} catch (Dom\Exception $e) {
    echo "Fatal: " . $e->getMessage();
}

// Inspect non-fatal parse errors
foreach ($dom->errors as $error) {
    // $error is a Dom\ParseError instance
    echo sprintf(
        "[%s] Line %d, Col %d: %s\n",
        $error->level->name,   // WARNING | ERROR | FATAL
        $error->line,
        $error->column,
        $error->message
    );
}
```

### [> Next](migration.md)

### [> Back](index.md)

### [> Home](../README.md)