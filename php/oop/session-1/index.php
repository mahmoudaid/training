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

/**
 * Example #1
 * 
 * 1- Instantiate Person class.
 * 2- Set it's properties.
 */
/* Start uncomment me */

// $person = new Person;
// $person->setName('Mustafa');
// $person->setAge(28);
// // Let's see Person object.
// var_dump($person);

/* End uncomment me*/

/**
 * Example #2
 * 
 * 1- Instantiate Person class.
 * 2- Set it's properties.
 * 3- Try to access name or age properties "direct" not form getter methods.
 */
/* Start uncomment me */

// $person = new Person;
// $person->setName('Mustafa');
// $person->setAge(28);
// // It will return "PHP Fatal error: Cannot access protected property Person::$name"
// var_dump($person->name);

/* End uncomment me*/


/**
 * Example #3
 * 
 * 1- Instantiate Person class.
 * 2- Set it's properties.
 * 3- Try to access name or age from getter methods.
 */
/* Start uncomment me */

// $person = new Person;
// $person->setName('Mustafa');
// $person->setAge(28);
// // It will return "PHP Fatal error: Cannot access protected property Person::$name"
// var_dump($person->getName());

/* End uncomment me*/


/**
 * Example #4
 *
 * Inheritance
 * 1- Instantiate Employee class.
 * 2- Set it's properties and it's parent properties
 *    that came from Parent class "Person" so we will use setter methods
 *    Form the paranet such as setName() and setAge().
 */
// Start uncomment me.
// $employee = new Employee;
// $employee->setName('Mustafa');
// $employee->setAge(28);
// $employee->setSalary(5000);
// $employee->setRole('PHP developer');
// // Let's see Employee object.
// var_dump($employee);
// End uncomment me.

/**
 * Example #5
 *
 * Inheritance
 * 1- Instantiate Employee class.
 * 2- Set it's properties and it's parent properties
 *    that came from Parent class "Person" so we will use setter methods
 *    Form the paranet such as setName() and setAge().
 * 3- Try to get employee name by getName() method which we "Override" at
 * 	  the child class "Employee".
 */
// Start uncomment me.
// $employee = new Employee;
// $employee->setName('Mustafa');
// $employee->setAge(28);
// $employee->setSalary(5000);
// $employee->setRole('PHP developer');
// // Let's see Employee object.
// var_dump($employee->getName());
// End uncomment me.