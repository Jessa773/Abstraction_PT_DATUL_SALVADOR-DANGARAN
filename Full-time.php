<?php

class FullTimeEmployee extends Employee implements Benefits {
    public $monthlySalary;

    public function __construct($name, $id, $department, $monthlySalary) {
        parent::__construct($name, $id, $department);
        $this->monthlySalary = $monthlySalary;
    }

    public function calculateSalary() {
        return $this->monthlySalary;
    }

    public function getHealthInsurance() {
        return "Full coverage health insurance.";
    }

    public function getLeaveCredits() {
        return "15 paid leave credits per year.";
    }
}

?>
