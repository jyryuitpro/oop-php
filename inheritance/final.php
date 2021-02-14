<?php

//final class ParentClass
class ParentClass
{
    function a()
    {
        echo 'Parent';
    }

    public function b()
    {
        echo 'Parent B';
    }
}

class ChildClass extends ParentClass
{
    function a()
    {
        echo 'Child';
    }

//    function b()
//    {
//        echo 'Child B';
//    }
}

$obj = new ChildClass();
$obj->a();