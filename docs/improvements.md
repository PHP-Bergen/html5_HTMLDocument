# Key improvements

## HTML5 Spec-Compliant Parsing

Powered by the Lexbor library — the same engine used by major browsers. Handles \<template>, \<svg>, \<math>, void elements, and all quirky-mode edge cases correctly.

## querySelector / querySelectorAll

CSS selector support is now native. No more XPath strings or loading Symfony DomCrawler just to find elements by class or attribute.

## Structured Error Reporting

Errors collected in an array, not silently swallowed. Use createFromString() and inspect $errors to get a list of Dom\ParseError objects.

## Robust Encoding Handling

Explicit $encoding parameter on all load methods. BOM auto-detection, charset meta-tag inference, and proper UTF-8 round-tripping.


### [> Next](api-changes.md)

### [> Back](index.md)

### [> Home](../README.md)