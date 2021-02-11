<?php

class Person
{
    // 클래스 변수
//    private $count = 0;
    private static $count = 0;

    // 인스턴스 변수
    private $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
//        $this->count++;
//        $this->count = $this->count + 1;
        self::$count = self::$count + 1;
    }

    public function enter()
    {
        echo "<h1>Enter ".$this->name." ".self::$count."</h1>";
    }

    public static function getCount()
    {
        return self::$count;
    }
}

$p1 = new Person("egoing");
$p1->enter();
$p2 = new Person("leezche");
$p2->enter();
$p3 = new Person("duru");
$p3->enter();
$p4 = new Person("taiho");
$p4->enter();
echo Person::getCount();
