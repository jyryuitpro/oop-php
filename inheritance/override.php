<?php

class ParentClass
{
    function callMethod($param)
    {
        echo "<h1>Parent {$param}</h1>";
    }
}

class ChildClass extends ParentClass
{
    function callMethod($param)
    {
        parent::callMethod($param);
        echo "<h1>Child {$param}</h1>";
    }
}

$obj = new ChildClass();
$obj->callMethod('method');

