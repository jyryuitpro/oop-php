<?php

class Person
{
    private $name;

    function sayHi()
    {
        print("Hi, I'm {$this->name}.");
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  mixed  $name
     */
    public function setName($name): void
    {
        $this->ifEmptyDie($name);
        $this->name = $name;
    }

    // 메소드 추출 기법
    private function ifEmptyDie($name)
    {
        if (empty($name)) {
            die("I need name");
        }
    }
}

$egoing = new Person();
//$egoing->name = 'egoing';
//$egoing->setName('');
$egoing->setName('egoing');
$egoing->sayHi();
//print($egoing->name);
//$egoing->ifEmptyDie('asdf');
print($egoing->getName());
