<?php

class People{
    public function __construct()
    {
        echo "父类的构造方法
        ";
        $this->say();
    }

    public function say(){
        echo "父类saying~~~
        ";
    }
}


class p1 extends People {

    public function __construct()
    {
        parent::__construct();
        echo "子类的构造方法
        ";
        $this->say();
    }
}

$a = new p1();

echo date('Y-m-d',time());