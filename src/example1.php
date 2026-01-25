<?php

/**
 * Older PHP then PHP 8.4.
 */

$html = <<<HTML
    <!DOCTYPE html>
    <title>Valid HTML5 Document</title>
    <p>Paragraph 1</p>
    <script>console.log("</html>Console log text");</script>
    <p>Paragraph 2</p>
HTML;

$dom = new DOMDocument('1.0', 'UTF-8');
libxml_use_internal_errors(true);
$dom->loadHtml($html);
libxml_clear_errors();
$paragraphs = $dom->getElementsByTagName('p');

print_r($paragraphs);

foreach ($paragraphs as $p) {
    echo " * " . trim($p->textContent) . "\n";
}

echo $dom->saveHtml();
