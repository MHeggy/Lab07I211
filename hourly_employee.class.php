<?php
/**
 * Author: Christian Forbes
 * Date: 10/10/2023
 * File Name: hourly_employee.class.php
 * Description: defines HourlyWorker class.
 */

class HourlyEmployee extends Employee {
    //class private attributes
    private $wage, $hours;

    public function __construct($name, $title, $years, $salary, $wage, $hours)
    {
        parent::__construct($name, $title, $years, $salary);
        $this->wage=$wage;
        $this->hours=$hours;
    }

    //getter for wage
    public function getWage() {
        return $this->wage;
    }

    //getter for hours
    public function getHours() {
        return $this->hours;
    }

    //implement abstract methods from Employee
    public function getPaymentAmount()
    {
        // TODO: Implement getPaymentAmount() method.
    }

    public function toString()
    {
        // TODO: Implement toString() method.
    }
}