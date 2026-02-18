<?php

$html = file_get_contents('https://www.nrk.no/stor-oslo/ruters-egne-tester-viser_-oslos-elbusser-kan-fjernstyres-1.17629321');
$content = @Dom\HTMLDocument::createFromString($html);

$elements = $content->querySelectorAll('p, h1, h2, h3');
foreach ($elements as $element) {
    echo $element->textContent . "\n";
}

$elements = $content->querySelector('article')->querySelectorAll('h1, h2');
foreach ($elements as $element) {
    echo $element->textContent . "\n";
}
