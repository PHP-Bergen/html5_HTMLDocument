<?php

/**
 * PHP 8.4 and later.
 *
 * Dom\HTMLDocument create HTML document.
 */

$dom = Dom\HTMLDocument::createFromString('<!DOCTYPE html><p>My document</p>');
echo $dom->saveHtml($dom->body) . PHP_EOL;
$dom->title = 'New Title';
echo $dom->saveHtml($dom->head) . PHP_EOL;
echo $dom->saveHtml($dom) . PHP_EOL;
$dom->saveHtmlFile(__DIR__ . '/../html/example.html');

$dom = Dom\HTMLDocument::createFromString('<!DOCTYPE html><body><h1>Test</h1></body>');
echo $dom->body->innerHTML;
$dom->body->innerHTML = '<p>Something new</p>';
echo $dom->saveHtml();
$dom->saveHtmlFile(__DIR__ . '/../html/example1.html');
