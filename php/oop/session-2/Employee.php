<?php

/**
 * Any employee is a person in real live!
 * 
 * Think of Employee as a "Child" class.
 * 
 * And we need all Person class properties and methods.
 * So we "extends" Person class.
 *
 * We set Employee as abstract class
 */
abstract class Employee extends Person {
	/**
	 * The employee salary.
	 * @var Integer
	 */
	protected $salary;

	/**
	 * The employee role.
	 * @var String
	 */
	protected $role;

	/**
	 * The employee salary currency.
	 * @var String
	 */
	protected $currency;

	/**
	 * A Getter method that return employee salary
	 * The benefit of Getter method that you can do any operations
	 * Before return the employee salary property.
	 * 
	 * Also it's a secure way to get salary property data without direct access
	 * Specialy if we set it to protected or private we can't access salary
	 * property direct when we instantiate the class.
	 * 
	 * @return Integer Get employee salary.
	 */
	public function getSalary(){
		// Would you like to do any thing here before return?
		return $this->salary;
	}

	/**
	 * A Setter method that set employee salary
	 * The benefit of Setter method that you can do any operations
	 * Before set the employee salary property.
	 * 
	 * Also it's a secure way to set salary property data without direct access
	 * Specialy if we set it to protected or private we can't access salary
	 * property direct when we instantiate the class.
	 *
	 * @param Integer employee salary.
	 */
	public function setSalary($salary){
		// Would you like to do any thing here before set salary property?
		$this->salary = $salary;
	}

	/**
	 * A Getter method same like getSalary() method.
	 * @return String Get employee role.
	 */
	public function getRole(){
		// Would you like to do any thing here before return?
		return $this->role;
	}

	/**
	 * A Setter method same like setSalary() method.
	 * @param String employee role.
	 */
	public function setRole($role){
		// Would you like to do any thing here before set role property?
		$this->role = $role;
	}

	/**
	 * A Getter method same like getSalary() and getRole() methods.
	 * But where is "name" property in Employee class?
	 * Oh yes you are right it's one of "Inheritance" benefits,
	 * "name" property available at "Parent class(Person)" and we "Override"
	 * getName() method which is available also at our parent class "Person"
	 * You can see it at "Person.php"
	 * 
	 * 
	 * @return String Get employee name with his title "Mr".
	 */
	public function getName(){
		// Would you like to do any thing here before return?
		// I added "Mr" to name.
		return "Mr. ".$this->name;
	}

	/**
	 * Abstract method.
	 */
	abstract public function getCurrency();

	/**
	 * Abstract method.
	 */
	abstract public function setCurrency();
}
