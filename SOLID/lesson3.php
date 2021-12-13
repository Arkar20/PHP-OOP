//*liskov subsition
//* derived classes must be subsitable for base or parent classes 

//! in simple words the parent class method and derived classes method must have the same return type

<?php

class VideoPlayer{
    public function play()
    {
        
    }
}

class AviPlayer extends VideoPlayer{
    
    public function play()
    {
        
    }
}


//Another Example

interface LessonInterface{

    /**
     * @return array //! only accept the array just type hinting
     * 
     */
    public function getAllLesson();

    
}
class FileLesson implements LessonInterface{
    public function getAllLesson()
    {
        return ['arkar','zuezue'];
    }
}

class DBLesson implements LessonInterface{
    public function getAllLesson()
    {
        return "arkar"; //!breaking the princle not return the same as the parent does
    }
}

//! tips
// checkin type like class means breaking the priniciple



?>