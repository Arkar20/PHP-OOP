//! like a usb abapter cable that we use on daily basis

//! tips:create a class that we are trying to adapt
//! inject the class that we are going to adapt
//! translate the methods
<?php 

interface BookInterface{
    public function open();
    public function skip();

}
interface eReaderInterface{
    public function poweron();
    public function scroll();

}
class EreaderAdapter implements BookInterface{ //* adapter class implementing the interface that the class wants to fit in
    protected $ereader;

    public function __construct(eReaderInterface $ereader)//! interface dependency inverion for more flexible
    {
        $this->ereader=$ereader;
    }
     public function open(){
      return   $this->ereader->poweron();
     }
    public function skip(){
        return $this->ereader->scroll();

    }

}
 class Book implements BookInterface{
    public function open()
    {
       echo 'Open the Book and read';
        
    }
    public function skip()
    {
        echo "Turn to next page";
    }
 }
class Kindle implements eReaderInterface{  //a class that needs to adpapt 
    public function poweron()
    {
        echo "press the power button";
    }
    public function scroll()
    {
        echo "Scroll to next page";
    }
}

 class Reader {
     public function read(BookInterface $book)
     {
         $book->open();
         $book->skip();
         
     }
 }

(new Reader())->read(new EreaderAdapter(new Kindle))  //! acting as a adapter for the kindle to perform its reading operation

?>


//* solid prove in filesystem class in laravel