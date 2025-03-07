<?php

$employees = [
    new FullTimeEmployee("Jessa Dy", 101, "Manager", 30000),
    new PartTimeEmployee("Jane Board", 102, "Assistant", 400, 80),
    new FullTimeEmployee("Luisy Salve", 103, "Secretary", 40000),
    new PartTimeEmployee("Jom Ngars", 104, "Designer", 400, 60),
    new FullTimeEmployee("Charles Braid", 105, "Finance", 60000),
    
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
