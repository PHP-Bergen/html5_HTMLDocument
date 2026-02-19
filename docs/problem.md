# The problem with DOMDocument

## HTML5 ingorance

Based on libxml2 — designed for XML, not HTML5. Modern constructs like '\<template>', '\<svg>', and '\<canvas>' parsed incorrectly.

## Silent errors

Parsing errors silently suppressed (or dumped to stderr). No clean way to inspect what went wrong.

## Encoding Cahos

UTF-8 handling fragile. Byte-order marks and multi-byte characters caused subtle data corruption.

## No CSS selectors

No querySelector() / querySelectorAll() support. Developers reach for XPath or third-party libs.

## Nullable Minefield

Many methods return null on failure with no clear contract — causes TypeErrors in strict code.


### [> Next](new-classes.md)

### [> Back](index.md)

### [> Home](../README.md)