<?php

namespace SchoolProject;

class Teacher extends Person 
{
    private static $size=0;   

    public function __construct($sur, $nam, $add, $sub)
    {
        $this->surname = $sur;
        $this->name = $nam;
        $this->address = $add;
        $this->subject = $sub;  
        self::$size +=1;       
    }

    public function getPersonalData() 
    {
        return
            $this->surname . "</br>"
            .$this->name ."</br>"
            .$this->address ."</br>"
            .$this->subject;
    }

    public static function getSize()
    {
        echo "Nombre actuel d'enseignant: ". self::$size; 
    }
}