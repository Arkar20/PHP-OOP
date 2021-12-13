//* interface segregation priniciple
//! a client should not be force to implement a interface that it doen't use 


<?php

interface ManageWork {
    public function iscommanded();
   
}
interface Sleepable{
    public function rest();

}
interface Workable{
    public function work();
}

class HumanWorker implements Workable,Sleepable,ManageWork {
    public function work()
    {
        echo "Worker must certain stuffs";
    }
    public function rest()
    {
        echo "Worker can rest";
    }
    public function iscommanded()
    {
      $this->work();
      $this->rest();
    }
}

class Robot implements Workable,ManageWork{
      public function work()
    {
        echo "Robot must certain stuffs";
    }
    // public function rest() /! breaking the principle forcing to implement the rest method
    // {
    //     return null;;
    // }
    public function iscommanded()
    {
      $this->work();
    }
}

    class Leader {
        public function manage(ManageWork $manager)
        {
         $manager->iscommanded();
        }
    }

    $Leader=new Leader();
    $Leader->manage(new HumanWorker());
?>