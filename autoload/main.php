<?php
//require_once 'Hi.php';
function autoloader($path)
{
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once $path;
}
spl_autoload_register('autoloader');
new Hi();
new Bye();
