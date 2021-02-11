<?php

class Animal
{
    function run()
    {
        print("running...<br>");
    }

    function breathe()
    {
        print("breathing...<br>");
    }
}

class Human extends Animal
{
//    function run()
//    {
//        print("running...<br>");
//    }

//    function breathe()
//    {
//        print("breathing...<br>");
//    }

    function think()
    {
        print("thinking...<br>");
    }

    function talk()
    {
        print("talking...<br>");
    }
}

//$ani = new Animal();
//$ani->run();
//$ani->breathe();

$human = new Human();
$human->run();
$human->think();
