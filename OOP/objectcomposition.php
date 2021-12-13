//*  one class pointing out another class method or behavior


<?php 

class Subscription{

    protected $stripe; //! a ponter to another class

    public function __construct(Stripe $strip) //injection to contructor
    {
        $this->stripe=$strip;
    }

    public function store() 
    {
        $this->stripe->getApi();
        echo "Proceed the payment";
        
    }
}
interface PaymentGateway {
    public function findCustomer();
    public function deleteCustomer();


}

class Stripe implements PaymentGateway{

    public function getApi()
    {
        echo "Stripte gonna get api";
    }
    public function findCustomer()
    {
        echo "Stripte gonna get api";
    }
    public function deleteCustomer()
    {
        echo "Stripte gonna delete customer payment";
    }
  
}
$subscription = new Subscription(new Stripe());
$subscription->store();

?>
