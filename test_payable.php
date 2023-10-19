<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/18/2023
 * File Name: test_payable.php
 * Description: Interface to test all classes.
 */

require_once 'person.class.php';
require_once 'employee.class.php';
require_once 'payable.class.php';
require_once 'hourly_employee.class.php';
require_once 'salaried_employee.class.php';
require_once 'commission_employee.class.php';
require_once 'base_plus_commision.class.php';
require_once 'invoice.class.php';

//invoice.
$i1 = new Invoice(12, "Red Barstool", 3, 45);

//invoice 2.
$i2 = new Invoice(19, "phone", 1, 600);

//starting with the Hourly Employee class.
$h1 = new HourlyEmployee(new Person("John", "Doe"), "111-11-1111", 20, 15);

//salaried employee.
$s1 = new SalariedEmployee(new Person("Sally", "Jane"), "111-11-1111", 1400);

//commission instance employee.
$c1 = new CommissionEmployee(new Person("Janey", "Janice"), "111-11-1111", 40, 12);

//BasePlusCommission instance.
$b1 = new BasePlusCommission(new Person("Jonathan", "Hanks"), "111-11-1111", 12, 14, 25);

//putting all employees and invoices in an array.
$employees = array($h1, $s1, $c1, $b1);
$invoices = array($i1, $i2);

//displaying all invoices using foreach loop.
foreach ($invoices as $invoice) {
    echo "*****************************************************<br>";
    echo $invoice->toString();
}

//displaying all employees using a foreach loop.
foreach ($employees as $employee) {
    echo "*****************************************************<br>";
    echo $employee->toString();
}

//Displaying the total invoice and employee counts.
echo "*****************************************************<br>Employee Count: " . Employee::getEmployeeCount() . "<br>";
echo "Invoice Count: " . Invoice::getInvoiceCount();


