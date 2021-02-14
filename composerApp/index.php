<?php
//require_once __DIR__.'/vendor/monolog/monolog/source/Monolog/Logger.php';
//require_once __DIR__.'/vendor/monolog/monolog/source/Monolog/Handler/StreamHandler.php';
require_once __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

// create a log channel
$log = new Logger('name');
//$log->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::WARNING));
//$log->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::ERROR));
$log->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::ERROR));
$log->pushHandler(new NativeMailerHandler(
    'jy.ryu.itpro@gmail.com',
    'Emergency!!!',
    'out@system.com',
    Logger::EMERGENCY));

// add records to the log
$log->warning('EGO');
$log->error('ING');
$log->emergency('Emergency');