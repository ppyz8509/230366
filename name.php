<?php

class student {

    public $Name;
    public $id;
    public $dete;
    private $birthYear;

    public function indroduce() {
        echo "I'm $this->Name $this->id\n";
        echo "I live in $this->homeTown\n";
    }

    public function setBirthYear($birthYear) {
        $this->birthYear = $birthYear;
    }

    public function getAge() {
        $currentYear = 2017;
        $age = $currentYear - $this->birthYear; 
        return $age;
    }

}

?>