<?php

use Uri\Rfc3986\Uri;

$uri = Uri::parse('https://phpbergen.no');
echo $uri->getPath() . PHP_EOL;
echo $uri->getHost() . PHP_EOL;
echo $uri->getScheme() . PHP_EOL;
echo $uri->toString() . PHP_EOL;

$uri = new Uri('https://phpbergen.no');
echo $uri->getPath() . PHP_EOL;
echo $uri->getHost() . PHP_EOL;
echo $uri->getScheme() . PHP_EOL;
echo $uri->toString() . PHP_EOL;

