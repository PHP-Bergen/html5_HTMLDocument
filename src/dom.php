<?php

namespace Phpbergen\Php84;

/**
 * PHP 8.3.
 *
 * Only supports HTML up to version 4.01. Use libxml2 HTML parser under
 * the hood to parse these documents into a libxml2 document tree that
 * ext/dom uses.
 *
 * https://www.php.net/manual/en/domdocument.construct.php
 */
$dom = new \DOMDocument('1.0', 'iso-8859-1');
var_dump($dom->saveXML());

/**
 * PHP 8.4
 *
 * DOM HTML5 parsing and serialization.
 * The DOM extension in PHP is used to parse, query, and manipulate
 * XML/HTML documents.
 *
 *   createEmpty()
 *   createFromFile()
 *   createFromString
 *
 * https://wiki.php.net/rfc/domdocument_html5_parser
 * https://wiki.php.net/rfc/opt_in_dom_spec_compliance
 * https://github.com/lexbor/lexbor
 */
use DOM\HTMLDocument;

$dom = HTMLDocument::createFromString(
  <<<HTML
        <main>
            <article>PHP 8.4 - PHP Bergen</article>
            <article class="featured">PHP 8.4 adds new DOM classes that are spec-compliant, keeping the old ones for compatibility.</article>
        </main>
        HTML,
  LIBXML_NOERROR,
);
var_dump($dom->saveXML());
