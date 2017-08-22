<?php

/**
 * This file is the entry point of our App.
 * The place that we will instantiate class and play around.
 * If you see (Start uncomment me) that's mean you can uncomment:
 * From the line next to it until (End uncomment me).
 * And for sure comment other examples to focus in example result.
 */

include 'Person.php'; // Include "Parent class"
include 'Employee.php'; // Then include "Child class"
include 'DeveloperEmployee.php'; // Then include "Child class" from Employee
include 'AccountantEmployee.php'; // Then include "Child class" from Employee

/**
 * Example #1
 * 
 * 1- Instantiate Person class.
 * 2- Set it's properties.
 */
/* Start uncomment me */

$person = new Person;
$person->setName('Mustafa');
$person->setAge(28);
// It will return "PHP Fatal error:  Cannot instantiate abstract class Person"
var_dump($person);

/* End uncomment me*/

/**
 * Example #2
 * 
 * 1- Instantiate Person class.
 * 2- Set it's properties.
 */
/* Start uncomment me */

// $employee = new Employee;
// $employee->setName('Mustafa');
// $employee->setAge(28);
// // It will return "PHP Fatal error:  Cannot instantiate abstract class Employee"
// var_dump($employee);

/* End uncomment me*/

/**
 * Example #2
 * 
 * 1- Instantiate DeveloperEmployee class.
 * 2- Set it's properties.
 */
/* Start uncomment me */

// $developerEmployee = new DeveloperEmployee;
// $developerEmployee->setName('Mustafa');
// $developerEmployee->setAge(28);
// $developerEmployee->setCurrency();
// // It will return DeveloperEmployee object
// var_dump($developerEmployee);

/* End uncomment me*/

/**
 * Example #3
 * 
 * 1- Instantiate AccountantEmployee class.
 * 2- Set it's properties.
 */
/* Start uncomment me */

// $accountantEmployee = new AccountantEmployee;
// $accountantEmployee->setName('Ahmed');
// $accountantEmployee->setAge(29);
// $accountantEmployee->setCurrency();
// // It will return AccountantEmployee object
// var_dump($accountantEmployee);

/* End uncomment me*/