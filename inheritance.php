<?php
class Employee {
    public $name;
    public $position;

    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }

    public function displayInfo() {
        echo "Employee Name: " . $this->name . "<br>";
        echo "Position: " . $this->position . "<br>";
    }
}
class Manager extends Employee {
    public $department;

    public function __construct($name, $position, $department) {
        parent::__construct($name, $position);
        $this->department = $department;
    }   

    public function displayInfo() {
        parent::displayInfo();
        echo "Department: " . $this->department . "<br>";
    }
}
$employee = new Employee("Usman Ahmed", "Software Engineer");
$employee->displayInfo();
$manager = new Manager("Ahmed Ali", "Project Manager", "Development");
$manager->displayInfo();
?>