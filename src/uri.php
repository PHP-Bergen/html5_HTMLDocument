<?php

use Uri\Rfc3986\Uri;

$uri = Uri::parse('https://phpbergen.no/example');
echo $uri->getPath() . PHP_EOL;
echo $uri->getHost() . PHP_EOL;
echo $uri->getScheme() . PHP_EOL;
echo $uri->toString() . PHP_EOL;

//$uri = new Uri('https://phpbergen.no');
//echo $uri->getPath() . PHP_EOL;
//echo $uri->getHost() . PHP_EOL;
//echo $uri->getScheme() . PHP_EOL;
//echo $uri->toString() . PHP_EOL;

$url = new Uri('HTTPS://thephp.foundation:443/sp%6Fnsor/');
$defaultPortForScheme = match ($url->getScheme()) {
    'http' => 80,
    'https' => 443,
    'ssh' => 22,
    default => null,
};

echo 'port match: ' . $defaultPortForScheme . PHP_EOL;

if ($url->getPort() === $defaultPortForScheme) {
    $url = $url->withPort(null);
}
echo 'port: ' . $url->getPort();
