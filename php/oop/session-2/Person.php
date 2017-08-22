<?php

/**
 * Think of Person as a "Parent" class.
 * Which contains the main properties and methods for our app.
 */
abstract class Person {
	/**
	 * The person name.
	 * @var String
	 */
	protected $name;

	/**
	 * The person age.
	 * @var Integer
	 */
	protected $age;

	/**
	 * A Getter method that return person name
	 * The benefit of Getter method that you can do any operations
	 * Before return the person name property.
	 * 
	 * Also it's a secure way to get name property data without direct access
	 * Specialy if we set it to protected or private we can't access name
	 * property direct when we instantiate the class.
	 * 
	 * @return String Get person name.
	 */
	public function getName(){
		// Would you like to do any thing here before return?
		return $this->name;
	}

	/**
	 * A Setter method that set person name
	 * The benefit of Setter method that you can do any operations
	 * Before set the person name property.
	 * 
	 * Also it's a secure way to set name property data without direct access
	 * Specialy if we set it to protected or private we can't access name
	 * property direct when we instantiate the class.
	 * 
	 * @param String name The person name.
	 */
	public function setName($name){
		// Would you like to do any thing here before set name property?
		$this->name = $name;
	}

	/**
	 * A Getter method same like getName() method.
	 * @return Integer The person age.
	 */
	public function getAge(){
		// Would you like to do any thing here before return?
		return $this->age;
	}

	/**
	 * A Setter method same like setName() method.
	 * @param Integer age The person age.
	 */
	public function setAge($age){
		// Would you like to do any thing here before set age property?
		// Yes I'd like to make sure that all persons above 21 years old.
		if($age < 21){
			throw new Exception("Sorry allowed pesons must be older than or equal to 21 years old");
		}
		$this->age = $age;
	}

}
