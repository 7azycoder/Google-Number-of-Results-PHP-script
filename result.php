<?php

// create new DOMDocument
$document = new \DOMDocument('1.0', 'UTF-8');

// set error level
$internalErrors = libxml_use_internal_errors(true);

// load HTML
$document->loadHtml(file_get_contents('googleresult.php'));

// Restore error level
libxml_use_internal_errors($internalErrors);

$id = $document->getElementById('resultStats');
echo $id->nodeValue;

?>
