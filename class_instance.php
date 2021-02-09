<?php

class MyFileObject
{
    function __construct($filename)
    {
        $this->filename = $filename;
    }

    function isFile()
    {
        return is_file($this->filename);
    }
}

$file = new MyFileObject('data.txt');
//$file->filename = 'data.txt';
var_dump($file->isFile());
var_dump($file->filename);

/**
 * MyFileObject : Class
 * $file, $file2 : Instance
 * isFile : method(function), behavior
 * $this->filename :
 *  Instance variable, Instance field, Instance property
 *  status
 */
