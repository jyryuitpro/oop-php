<?php

class MyFileObject
{
    private $filename;
//    public $filename;

    function __construct($filename)
    {
        $this->filename = $filename;
        if (!file_exists($this->filename)) {
            die('There is no file '.$this->filename);
        }
    }

    function isFile()
    {
        return is_file($this->filename);
    }
}

$file = new MyFileObject('data.txt');
//$file = new MyFileObject();
//$file->filename = 'data.txt';
//$file->filename = 'asdf.txt';
var_dump($file->isFile());
//var_dump($file->filename);

/**
 * MyFileObject : Class
 * $file, $file2 : Instance
 * isFile : method(function), behavior
 * $this->filename :
 *  Instance variable, Instance field, Instance property
 *  status
 */
