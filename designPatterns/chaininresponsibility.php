<?php 

abstract class HomeChecker{

    protected $check;

    public function setSuccessor(HomeChecker $check)
    {
       $this->check=$check;
    }
    public function next(HomeStatus $home)
    {
        $this->check->check($home);
    }
}
class Alarm extends HomeChecker{
    public function check( HomeStatus $home)
    {
        
        if(!$home->alarm){

            var_dump('Alarm is not on');
        }

        $this->next($home);
    }
}

//! similar to decarator pattern
//! but fixed with what comes after next like a chain

class Lock extends HomeChecker{
    public function check(HomeStatus $home)
    {
        if(!$home->lock){
        
            var_dump('Lock is not on');
        }
        $this->next($home);

    }
}

class Light extends HomeChecker{
    public function check(HomeStatus $home)
    {
        
         if(!$home->lights){
        
        var_dump('Lights is not on');
        }
    }
}

class HomeStatus{
    public $alarm=true;
    public $lock=false;
    public $lights=true;
}

$alarm= new Alarm();
$lock=new Lock();
$light=new Light();

$alarm->setSuccessor($lock);
$lock->setSuccessor($light);



$alarm->check(new HomeStatus);