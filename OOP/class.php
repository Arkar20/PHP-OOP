<?php

class Animal{
    public $name;

    public function __construct($name)
    {
        $this->name=$name;
    }
    

}

$animal= new Animal('DOg');
echo $animal->name;

?>