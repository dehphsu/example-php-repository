<?php
/**
 * A simple file used for testing purposes
 *
 * @author dmakin@fairpoint.co.uk
 */

require_once(__DIR__.'/../classes/__autoloader__.php');

$intCount = 10;

echo "<h1>Example page</h1><br />";

for ($i=0; $i<$intCount; $i++)
{
    echo "$i<br>";
}

$objExample = new examplePhpRepository\Example();
$objExample ->setIntNumberOne(200);
$objExample ->setIntNumberOne(200);
echo "-";
var_dump($objExample);
echo "-";

$objExample2 = new examplePhpRepository\Example2();
$objExample2 ->setIntNumberOne(200);
$objExample2 ->setIntNumberOne(200);
echo "-";
var_dump($objExample2);
echo "-";