<?php

namespace SchoolProject;

class Student extends Person 
{

    private static $size = 0;

    public function __construct($sur, $nam, $add, $lev)
    {
        $this->surname = $sur;
        $this->name = $nam;
        $this->address = $add;
        $this->level = $lev; 
        self::$size += 1;       
    }

    public function getPersonalData() 
    {
        return
            $this->surname . "</br>"
            .$this->name ."</br>"
            .$this->address ."</br>"
            .$this->level;
    }

    public static function getSize()
    {
        echo "Nombre actuel d'élève: ". self::$size; 
    }
}
