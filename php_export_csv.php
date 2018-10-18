<?php

// Set the column headers
$strCsv = "Name, Phone, Email, Country";

// Now add the actual values under each column
$strCsv .= "Adeel,123455667,adeel@yahoo.com, Pakistan" . PHP_EOL;
$strCsv .= "Adam,1455454367,adam@hotmail.com, Singapore" . PHP_EOL;
$strCsv .= "Alex,15434556457,alex@yahoo.com, Australia" . PHP_EOL;

//Finally comes the code which will force the browser to download this string of data as a CSV file
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"customer-data.csv\"");
echo $strCsv;
?>