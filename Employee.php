<?php

abstract class Employee {
    public $name;
    public $id;
    public $department;

    public function __construct($name, $id, $department) {
        $this->name = $name;
        $this->id = $id;
        $this->department = $department;
    }

    abstract public function calculateSalary();
}

interface Benefits {
    public function getHealthInsurance();
    public function getLeaveCredits();
}

?>
