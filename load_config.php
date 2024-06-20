<?php
// Load the XML file
$xml = simplexml_load_file('C:/xampp/htdocs/adventureland/config/config.xml');

// Extract values from the XML
$primaryColor = (string)$xml->colors->primaryColor;
$secondaryColor = (string)$xml->colors->secondaryColor;
$accentColor = (string)$xml->colors->accentColor;
$darkAccentColor = (string)$xml->colors->darkAccentColor;
$highlightColor = (string)$xml->colors->highlightColor;

$primaryFont = (string)$xml->fonts->primaryFont;
$fontSize = (string)$xml->fonts->fontSize;
?>
