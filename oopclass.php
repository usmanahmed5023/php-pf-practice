<?php
class Oopclass{
    public $name,$RegNo,$gender;
     public function __construct($gender) {
        $this->gender = $gender;
        echo "Student Gender: $this->gender <br>";
    }
    public function StudentInfo($name, $RegNo) {
        $this->name = $name;
        $this->RegNo = $RegNo;
        echo "Student Name: $this->name <br>";
        echo "Student RegNo: $this->RegNo <br>";
    } 
   
  }
   $OC=new Oopclass("Male");
   $OC -> name = "Usman Ahmed";
   $OC -> RegNo = "043";
    $OC->StudentInfo($OC->name, $OC->RegNo);

?>