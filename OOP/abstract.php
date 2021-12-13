//** provide template or base */
//* cannot instantiate a instant class 
//* abstract methods has to be defined in inherited classes 

<?php
 
 abstract class Animal{

    public function name()
    {
        echo ( new ReflectionClass($this))->getShortName()."\n";
        

    }
    public function walk() //! concrete
    {
        echo "The animal works \n";

    }

    abstract public function eat(); //! abstract
 }

 class Dog extends Animal
{
public function eat()
{
    echo "THe dog eats bone \n";
}

 }

$dog=new Dog();
$dog->eat();
$dog->name();
$dog->walk();
?>