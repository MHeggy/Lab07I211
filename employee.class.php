<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: employee.class.php
 * Description: Abstract employee class definition.
 */

require_once 'payable.class.php';
require_once 'person.class.php';

abstract class Employee implements Payable {//start of class.

    //private variables.
    private $person;
    private $ssn;
    private static $employee_count;

    //constructor
    public function __construct(Person $person, $ssn) {
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count++;
    }//end of constructor.

    //getters
    public function getPerson() {
        return $this->person;
    }//end of getPerson().

    public function getSSN() {
        return $this->ssn;
    }

    public static function getEmployeeCount() {
        return self::$employee_count;
    }

    //setters.
    public function setPerson($person) {
        $this->person = $person;
    }

    public function setSSN($ssn) {
        $this->ssn = $ssn;
    }

    abstract public function toString();
}