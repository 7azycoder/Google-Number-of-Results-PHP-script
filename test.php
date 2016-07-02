<?php
$term = $_POST['term'];
$linktopage = "http://www.google.co.in/search?q=$term";
//$sourcecode = file_get_contents( $linktopage );
//file_put_contents("googleresult.txt",$sourcecode);
//rename ("googleresult.txt", "googleresult.php");
// create new DOMDocument
$document = new \DOMDocument('1.0', 'UTF-8');
// set error level
$internalErrors = libxml_use_internal_errors(true);
// load HTML
$document->loadHtml(file_get_contents($linktopage));
// Restore error level
libxml_use_internal_errors($internalErrors);
$id = $document->getElementById('resultStats');
$nodeValue =  $id->nodeValue;
//echo $nodeValue;
$valuesArray = explode(" ",$nodeValue);
$numbersArray = explode(",",$valuesArray[1]);
//print_r($numbers);
$stringOfNumbers =  join("",$numbersArray);
$number = doubleval($stringOfNumbers);

echo $number;


?>
