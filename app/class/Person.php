<?php

namespace SchoolProject;

abstract class Person 
{
    protected $surname;
    protected $name;
    protected $address;

    public function getPersonalData()
    {
        return
            $this->surname . "</br>"
            .$this->name ."</br>"
            .$this->address;
    }
}