<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: hourly_employee.class.php
 * Description: File defining the HourlyEmployee class.
 */

class HourlyEmployee extends Employee {
    private $wage;
    private $hours;

    //constructor.
    public function __construct(Person $person, $ssn, $wage, $hours) {
        parent::__construct($person, $ssn);
        $this->hours = $hours;
        $this->wage = $wage;
    }//end constructor.

    //getters and setters.
    public function getHours() {
        return $this->hours;
    }
    public function setHours($hours) {
        $this->hours = $hours;
    }
    public function getWage() {
        return $this->wage;
    }
    public function setWage($wage) {
        $this->wage = $wage;
    }
    public function getPaymentAmount()
    {
       return $this->getHours() * $this->getWage();
    }
    //toString method.
    public function toString() {
        $hourlyDetails = "*****************************************************<br><b>Hourly Employee</b><br>";
        $hourlyDetails .= "Name: " . $this->getPerson()->getFirstName() . ' ' . $this->getPerson()->getLastName() . "<br>";
        $hourlyDetails .= "SSN: " . $this->getSSN() . "<br>";
        $hourlyDetails .= "Wage: \$" . $this->getWage() . "<br>";
        $hourlyDetails .= "Hours: " . $this->getHours() . "<br>";
        $hourlyDetails .= "Payment Amount: \$" . $this->getPaymentAmount() . "<br>";

        return $hourlyDetails;
    }
}