<?php

use Uri\WhatWg\Url;

$url = Url::parse('www.phpbergen.no');
var_dump($url);

$url = new Url('https://phpbergen.no');
var_dump($url);
