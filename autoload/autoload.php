<?php
// 익명함수, 콜백함수
spl_autoload_register(function ($path)
{
    $path = str_replace('\\', '/', $path);
    $path = $path.'.php';
    print("path : {$path}");
    require_once $path;
});
