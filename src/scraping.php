<?php

$html = file_get_contents('https://www.nrk.no/stor-oslo/ruters-egne-tester-viser_-oslos-elbusser-kan-fjernstyres-1.17629321');
$nrk = @Dom\HTMLDocument::createFromString($html);
$elements = $nrk->querySelectorAll(
    'a[href ^= "http" i]:not([href *= "nrk.no" i])'
);

foreach ($elements as $element) {
    echo $element->textContent . " ";
    echo $element->getAttribute('href') . "\n";
}
