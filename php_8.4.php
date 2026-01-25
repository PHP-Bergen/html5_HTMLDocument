<?php

/**
 * PHP 8.4 and later. https://www.php.net/releases/8.4/en.php.
 *
 * Lexbor, written in C. https://lexbor.com/
 * HTML5 support, CSS selectors, and modern DOM features to PHP.
 *
 * https://wiki.php.net/rfc/domdocument_html5_parser
 * https://wiki.php.net/rfc/dom_additions_84
 * https://blog.keyvan.net/p/parsing-html-with-php-84
 * https://blog.keyvan.net/p/interview-with-niels-dossche
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
