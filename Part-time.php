<?php

class PartTimeEmployee extends Employee implements Benefits {
    public $hourlyRate;
    public $hoursWorked;

    public function __construct($name, $id, $department, $hourlyRate, $hoursWorked) {
        parent::__construct($name, $id, $department);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }

    public function getHealthInsurance() {
        return "No health insurance benefits.";
    }

    public function getLeaveCredits() {
        return "5 unpaid leave credits per year.";
    }
}

?>
