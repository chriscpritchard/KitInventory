<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-03-22
 * Time: 01:50
 */
use Doctrine\ORM\Tools\Setup;

$settings = array(
    'database' => array(
        'connection' => array(
            'driver' => 'pdo_sqlite',
            'path' =>dirname( __DIR__).'/db.sqlite'
        ),
        'isDevMode' => true,
        'config' => Setup::createAnnotationMetadataConfiguration(array(dirname(__DIR__) . "/src"),true, null, null, false)
    )
);