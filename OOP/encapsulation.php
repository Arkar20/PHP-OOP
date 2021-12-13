//* restricting the objects internal
//* signaling the outside what we want to share with the class
<?php

 class Person {
     public function name()
     {
         echo "My name is something";
     }
     private function thingsDoAtNight()
     {
         echo "Dark things";
     }
  
 }

// $method= new \ReflectionMethod(Person::class,'thingsDoAtNight');
// $method->setAccessible(true);

// $person= new Person();
// $method->invoke($person);


?>