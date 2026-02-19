# API Changes

| Method / Property        | Alternative / Behavior        | Notes                                      |
|--------------------------|-------------------------------|--------------------------------------------|
| createFromString()       | loadHTML() / loadXML()        | New static factory – returns typed object  |
| createFromFile()         | load()                        | New static factory with encoding param     |
| querySelector()          | X Not available               | CSS selector, returns Element\|null        |
| querySelectorAll()       | X Not available               | Returns Dom\NodeList                       |
| $document->errors        | libxml_get_errors()           | Array of Dom\ParseError objects            |
| $el->className           | getAttribute('class')         | Direct property access                     |
| $el->id                  | getAttribute('id')            | Direct property access                     |
| Exception on error       | Returns false silently        | Throws Dom\Exception                       |


### [> Next](parser-code.md)

### [> Back](index.md)

### [> Home](../README.md)