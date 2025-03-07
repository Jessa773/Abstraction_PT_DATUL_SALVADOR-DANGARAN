<?php

$employees = [
    new FullTimeEmployee("Jessa Dy", 101, "Manager", 10000),
   

];

foreach ($employees as $employee) {
    echo "Name: " . $employee->name . " ID: " . $employee->id . " Position: " . $employee->department;
    echo "<br>";
    echo " Salary: PHP " . $employee->calculateSalary();
    echo "<br>";
    echo " Health Insurance: " . $employee->getHealthInsurance();
    echo "<br>";
    echo " Leave Credits: " . $employee->getLeaveCredits() . "\n";
    echo "<br>";
    echo "<br>";
}

?>
