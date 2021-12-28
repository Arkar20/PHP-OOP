//!builder pattern separated the build logic from the actual class


// eg. Building the user credential in the background
// building the user becomes incremetal and separate


<?php
class UserBuilder{

    // public $name;
    private $name;

    public function build()
    {
        return new User($this);
    }

    //!setting and getting  for polymorphism

    public function setName($name)
    {
        $this->name=$name;

        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
     
   
}

class User {

     protected $name;

     public function __construct(UserBuilder $builder)
     {
        //  $this->name=$builder->name;
         $this->name=$builder->getName();

         var_dump($this);
     }

     public static function builder()
     {
         return new UserBuilder();
     }
}

$user=User::builder();
// $user->name="arkar";
// $user->build();
$user->setName('akrar');
$user->build();

?>