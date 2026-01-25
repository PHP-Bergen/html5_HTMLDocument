<?php

/**
 * PHP 8.4 and later. https://www.php.net/releases/8.4/en.php.
 */

//$dom = Dom\HTMLDocument::createFromString('<!DOCTYPE html><p>My document</p>');
//echo $dom->saveHtml($dom->body);
//$dom->title = 'New Title';
//echo $dom->saveHtml($dom->head);
//
//$dom = Dom\HTMLDocument::createFromString('<!DOCTYPE html><body><h1>Test</h1></body>');
//echo $dom->body->innerHTML;
//$dom->body->innerHTML = '<p>Something new</p>';
//echo $dom->saveHtml();

$html = file_get_contents('https://www.nrk.no/stor-oslo/ruters-egne-tester-viser_-oslos-elbusser-kan-fjernstyres-1.17629321');
$nrk = @Dom\HTMLDocument::createFromString($html);
//$elements = $nrk->querySelectorAll('p, h1, h2, h3');
//foreach ($elements as $element) {
//    echo $element->textContent . "\n";
//}

//$elements = $nrk->querySelector('article')->querySelectorAll('h1, h2');
//foreach ($elements as $element) {
//    echo $element->textContent . "\n";
//}

$elements = $nrk->querySelectorAll(
  'a[href ^= "http" i]:not([href *= "nrk.no" i])'
);
foreach ($elements as $element) {
    echo $element->textContent . " ";
    echo $element->getAttribute('href') . "\n";
}
