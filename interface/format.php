<?php

interface ContractInterface
{
    public function promiseMethod(array $param): int;
}

interface ContractInterface2
{
    public function promiseMethod2(array $param): int;
}

class ConcreateClass implements ContractInterface, ContractInterface2
{
    public function promiseMethod(array $param): int
    {
//        return 'one';
        return 1;
    }

    public function promiseMethod2(array $param): int
    {
        return 1;
    }
}

$obj = new ConcreateClass();
//$obj->promiseMethod(123123);
$obj->promiseMethod([1, 2]);