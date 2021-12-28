// a creational pattern more a look like builder
// instead of increating creating the attributes
// pass the whole complete array, build in background and return the result to the concreate class


<?php
    class User{
        protected $name;

        public function __construct($name)
        {
            $this->name=$name;

            var_dump($this);
        }




    }
    class UserFactory{
        protected $name;
        

        public function create(array $data)
        {
            $name=$data['name'];

            new User($name);
            
        }
    }

    $data=['name'=>"arkar"];

    $userfactory=new UserFactory();
    $userfactory->create($data);

?>