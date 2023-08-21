<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use WHMCS\ClientArea;
use WHMCS\Database\Capsule;

require_once 'init.php';

$ca = new ClientArea();

$ca->setPageTitle('Caloti Marketplace');
$ca->addToBreadCrumb('index.php', Lang::trans('globalsystemname'));
$ca->addToBreadCrumb('marketplace.php', 'Marketplace');
$ca->initPage();

$ca->setTemplate('marketplace');
$ca->output();
