<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-03-22
 * Time: 01:53
 */

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);