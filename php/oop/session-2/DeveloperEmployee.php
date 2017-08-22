<?php

/**
 * Think of DeveloperEmployee as a "Child" class from Employee abstract class.
 */
class DeveloperEmployee extends Employee {
	/**
	 * This method implement abstract method in Employee "parent" class.
	 * @return String The employee salary currency
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * This method implement abstract method in Employee "parent" class.
	 * A Setter method that set Developer employee salary currency.
	 */
	public function setCurrency()
	{
		$this->currency = 'USD';
	}
}
