<?php

namespace SchoolProject;

class Teacher extends Person 
{
    private static $size = 0;   
    protected $subject;

    public function __construct($sur, $nam, $add, $sub)
    {
        parent::__construct($sur, $nam, $add);
        $this->subject = $sub;  
        self::$size +=1;       
    }

    public function getPersonalData() 
    {
        return parent::getPersonalData(); 
    }

    public function getSubject()
    {
        return "Matière: " . $this->subject;
    }

    public static function getSize()
    {
        echo "Nombre actuel d'enseignant: ". self::$size; 
    }
}