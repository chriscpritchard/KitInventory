<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-03-20
 * Time: 13:07
 */
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
require_once "config\settings.php";

$isDevMode = true;

try {
    $entityManager = EntityManager::create($settings['database']['connection'], $settings['database']['config']);
} catch (\Doctrine\ORM\ORMException $exception){
    echo "NOOOOO";
}