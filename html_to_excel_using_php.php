<?php
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: filename="name_records.xls"');

$crlf = PHP_EOL;
$data = "<table border='1' cellspacing='0' cellpadding='0'>";
$data .= "<tr><td>Id</td><td>Name</td><td>City</td><td>Phone</td><td>Email</td></tr>";
$data .= "<tr><td>1</td><td>Adeel</td><td>Karachi</td><td>123 456 7890</td><td>adeel@chill.com</td></tr>";
$data .= "<tr><td>2</td><td>Sarfraz</td><td>Lahore</td><td>234 433 2211</td><td>raheel@chill.com</td></tr>";
$data .= "</table>";
echo $data;