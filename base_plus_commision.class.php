<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: base_plus_commision.class.php
 * Description: File Defining the BasePlusCommissionClass.
 */

class BasePlusCommission extends CommissionEmployee {
    private $base_salary;

    //constructor.
    public function __construct(Person $person, $ssn, $commission_rate, $sales, $base_salary) {
        parent::__construct($person, $ssn, $commission_rate, $sales);
        $this->base_salary = $base_salary;
    }
    //getters and setters for base_salary.
    public function getBaseSalary() {
        return $this->base_salary;
    }
    public function setBaseSalary($base_salary) {
        $this->base_salary = $base_salary;
    }
    //get Payment Amount function.
    public function getPaymentAmount() {
        return parent::getPaymentAmount() + $this->getBaseSalary();
    }
    public function toString() {
        $baseCommissionDetails = "*****************************************************<br><b>Base Plus Commisssion Employee:</b><br>";
        $baseCommissionDetails .= parent::toString();
        $baseCommissionDetails .= "Base Salary: \$" . $this->getBaseSalary() . "<br>";

        return $baseCommissionDetails;
    }
}