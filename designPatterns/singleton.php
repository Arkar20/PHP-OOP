//* let the instanciation of the class only once in entire app 
//! in this example, the application would wants the dark mode in every where of the app and does not want to reset the value on instantiaion

<?php
class Setting{
    static $obj;
    public $dark;
    protected function __construct()
    {
    
    }
    public static function create()
    {
        if(!static::$obj)
            static::$obj=new static;

        return static::$obj;
    }
}

$setting=Setting::create();
$setting->dark=10;

$setting2=Setting::create();
var_dump($setting2->dark);



?>