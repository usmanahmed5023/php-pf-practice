<?php
//Access Modifiers
class Usman{
    public $name = "Usman \n";
    protected $age = 25;
    private $email = "usman@example.com \n";

    public function getEmail() {
        return $this->email;
    }
    protected function getAge() {
        return $this->age;
    }
}
    class Ali extends Usman {

        public function displayInfo() {
            echo "Name: " . $this->name . "<br>";
            echo "Age: " . $this->getAge() . "<br>";
            echo "Email: " . $this->getEmail() . "<br>";
        }
    }


$name = new Usman();
echo $name->name="Usman"; // Accessible
echo $name->getEmail(); // Accessible
$age = new Ali();
$age->displayInfo(); // Accessible through inherited method

?>