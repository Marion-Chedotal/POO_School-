<?php

namespace SchoolProject;

class Student extends Person 
{
    private static $size = 0;
    protected $level;

    public function __construct($sur, $nam, $add, $lev)
    {
        parent::__construct($sur, $nam, $add);
        $this->level = $lev; 
        self::$size += 1;       
    }

    public function getPersonalData() 
    {
        return parent::getPersonalData(); 
    }

    public function getLevel()
    {
        return "Niveau: " . $this->level;
    }

    public static function getSize()
    {
        echo "Nombre actuel d'élève: ". self::$size; 
    }
}
