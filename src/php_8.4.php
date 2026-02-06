<?php

/**
 * DOM HTML5 parsing. PHP 8.4 and newer.
 */

use DOM\HTMLDocument;

$html = <<< 'HTML'
    <!DOCTYPE html>
    <title>Valid HTML5 Document</title>
    <p>Paragraph 1</p>
    <script>console.log("</html>Console log text");</script>
    <p>Paragraph 2</p>
HTML;

$dom = HTMLDocument::createFromString($html);
$paragraphs = $dom->getElementsByTagName('p');

foreach ($paragraphs as $p) {
    echo " * " . trim($p->textContent) . "\n";
}

echo $dom->saveHtml() . PHP_EOL;
