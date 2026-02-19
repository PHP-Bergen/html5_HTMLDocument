# Summary 

1. Swap the class:  `new DOMDocument()` > `Dom\HTMLDocument::createFromString()`
2. Remove libxml hacks: `libxml_use_internal_errors(true) / libxml_clear_errors()` > `$dom->errors array`
3. Drop encoding shims: `mb_convert_encoding(..., 'HTML-ENTITIES', 'UTF-8')` > Pass 'UTF-8' as third argument
4. Replace XPath selectors: `$xpath->query("//a[@class='nav']")` > $dom->querySelectorAll('a.nav')
5. Handle exceptions: `Check return value === false` > Wrap in try/catch Dom\Exception

### [> Next](uri-parsing.md)

### [> Back](index.md)

### [> Home](../README.md)