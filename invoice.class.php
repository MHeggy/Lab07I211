<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: invoice.class.php
 * Description: Description of Invoice class.
 */

//require_once
require_once 'payable.class.php';

class Invoice implements Payable {//start of class.

    //private data variables.
    private $part_number;
    private $part_description;
    private $integer;
    private $price_per_item;
    private static $invoice_count = 0;

    //constructor.
    public function __construct($part_number, $part_description, $integer, $price_per_item) {
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->integer = $integer;
        $this->price_per_item = $price_per_item;
        self::$invoice_count++;
    }//end of construct.

    //getters and setters
    public function getPartNumber()
    {
        return $this->part_number;
    }

    public function setPartNumber($part_number): void
    {
        $this->part_number = $part_number;
    }

    public function getPartDescription()
    {
        return $this->part_description;
    }

    public function setPartDescription($part_description): void
    {
        $this->part_description = $part_description;
    }

    public function getInteger()
    {
        return $this->integer;
    }

    public function setInteger($integer): void
    {
        $this->integer = $integer;
    }
    public function getPricePerItem()
    {
        return $this->price_per_item;
    }

    public static function getInvoiceCount() {
        return self::$invoice_count;
    }

    public function setPricePerItem($price_per_item): void
    {
        $this->price_per_item = $price_per_item;
    }

    public function getPaymentAmount()
    {
        return $this->getInteger() * $this->getPricePerItem();
    }

    //toString method.
    public function toString() {

        $invoiceDetails = "*****************************************************<br><b>Invoice</b><br>";
        $invoiceDetails .= "Part Number: " . $this->getPartNumber() . "<br>";
        $invoiceDetails .= "Part Description: " . $this->getPartDescription() . "<br>";
        $invoiceDetails .= "Quantity : " . $this->getInteger() . "<br>";
        $invoiceDetails .= "Price per Item: \$" . $this->getPricePerItem() . "<br>";
        $invoiceDetails .= "Payment: \$" . $this->getPaymentAmount() . "<br>";

        return $invoiceDetails;
    }
}//end of class.
