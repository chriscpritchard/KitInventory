<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-03-22
 * Time: 02:40
 */

require_once "bootstrap.php";

$newBagName= $argv[1];
settype($newBagName, "string");

$bag = new Bag($newBagName);

$entityManager->persist($bag);
$entityManager->flush();

echo "created product with ID: ".$bag->getID()."\n";