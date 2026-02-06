<?php

/**
 * Userspace https://github.com/Masterminds/html5-php.
 *
 * HTML5 is a standards-compliant HTML5 parser and writer written
 * entirely in PHP. It is stable and used in many production websites and has
 * well over five million downloads.
 */

use Masterminds\HTML5;

require_once __DIR__ . '/../vendor/autoload.php';

$html = <<< 'HTML'
    <!DOCTYPE html>
    <title>Valid HTML5 Document</title>
    <p>Paragraph 1</p>
    <script>console.log("</html>Console log text");</script>
    <p>Paragraph 2</p>
HTML;

$html5 = new HTML5();
$dom = $html5->loadHTML($html);

$paragraphs = $dom->getElementsByTagName('p');
foreach ($paragraphs as $p) {
    echo " * " . trim($p->textContent) . "\n";
}

echo $html5->saveHTML($dom);
