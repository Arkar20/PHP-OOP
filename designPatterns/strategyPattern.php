//! indentify the family of algorithms (same method or behavior name in different classes)

//! make it interchangeable (make a contract or interface )

//! then inject the interface instead of hard coding the class directly in our application


//! this will make interchageable on the run time 

<?php

interface Logger {
    public function log($data);
  
}
class LogIntoFile implements Logger{

    public function log($data)
    {
       var_dump($data."logged with file");
    }

}
class LogIntoDb  implements Logger{
    public function log($data)
    {
       var_dump($data."logged with db");
        
    }
}

class LogIntoWebService  implements Logger{
public function log($data)
    {
       var_dump($data."logged with web service");
        
    }
}

class App {
    public function printLog($data,Logger $logger)
    {
        $logger->log($data);
    }
}

$app=(new App())->printLog('Somehing to log',new LogIntoDb);


?>