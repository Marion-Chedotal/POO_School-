<?php

namespace SchoolProject;

abstract class Person 
{
    protected $surname;
    protected $name;
    protected $address;

    protected function __construct($sur, $nam, $add)
    {
        $this->surname = $sur;
        $this->name = $nam;
        $this->address = $add;
    }

    public function getPersonalData()
    {
        return $personalData= [
            'Nom'=> $this->surname,
            'Prénom' => $this->name,
            'Adresse' => $this->address];
    }
}