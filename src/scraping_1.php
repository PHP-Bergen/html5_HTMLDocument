<?php

$html = file_get_contents('https://www.nrk.no/stor-oslo/ruters-egne-tester-viser_-oslos-elbusser-kan-fjernstyres-1.17629321');
$nrk = @Dom\HTMLDocument::createFromString($html);

$elements = $nrk->querySelectorAll('p, h1, h2, h3');
foreach ($elements as $element) {
    echo $element->textContent . "\n";
}

$elements = $nrk->querySelector('article')->querySelectorAll('h1, h2');
foreach ($elements as $element) {
    echo $element->textContent . "\n";
}
