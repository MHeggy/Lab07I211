<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: commission_employee.class.php
 * Description: Class defining the employee.
 */

require_once 'employee.class.php';
class CommissionEmployee extends Employee {//start of class.
    private $sales;
    private $commission_rate;

    //constructor.
    public function __construct(Person $person, $ssn, $commission_rate, $sales) {
        parent::__construct($person, $ssn);
        $this->commission_rate = $commission_rate;
        $this->sales = $sales;
    }//end constructor.

    //getters and setters.
    public function getCommissionRate() {
        return $this->commission_rate;
    }
    public function setCommissionRate($commission_rate) {
        $this->commission_rate = $commission_rate;
    }
    public function getSales() {
        return $this->sales;
    }
    public function setSales($sales) {
        $this->sales = $sales;
    }
    public function getPaymentAmount()
    {
        return $this->getSales() * $this->getCommissionRate();
    }
    //toString method.
    public function toString() {
        $employeeDetails = '';
        if (get_called_class() === 'CommissionEmployee') {
            $employeeDetails = "<b>Commission Employee:</b><br>";
        }
        $employeeDetails .= "Name: " . $this->getPerson()->getFirstName() . ' ' . $this->getPerson()->getLastName() . "<br>";
        $employeeDetails .= "SSN: " . $this->getSSN() . "<br>";
        $employeeDetails .= "Commission Rate: \$" . $this->getCommissionRate() . "<br>";
        $employeeDetails .= "Sales: " . $this->getSales() . "<br>";
        $employeeDetails .= "Payment Amount: \$" . $this->getPaymentAmount() . "<br>";

        return $employeeDetails;
    }//end of toString() method.
}//end of class.

