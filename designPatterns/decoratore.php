<?php
interface Service {

    public function cost();
}
class OverAllCheck implements Service{
    
    public function cost()
    {
        return 40;
    }
}
class CarRepair implements Service {

    protected $check;

    public function __construct(Service $check)
    {
        $this->check=$check;
    }
     public function cost()
    {
        return $this->check->cost()+40;
    }
}


echo (new CarRepair(new OverAllCheck()))->cost();



?>