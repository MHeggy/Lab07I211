<?php
/**
 * Author: Christian Forbes
 * Date: 10/10/2023
 * File Name: invoice.class.php
 * Description: define Invoice class. This class includes get methods for all private attributes, invoice count, to string.
 */

class Invoice implements Payable {
    //private attributes
    private $part_number, $part_description, $quantity, $price_per_item;

    //static attribute for invoice count
    static private $invoice_count = 0;

    //class constructor using all attributes
    public function __construct($part_number, $part_description, $quantity, $price_per_item, $invoice_count)
    {
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        $this->invoice_count = $invoice_count;
        //increment invoice count each time a new object is made
        self::$invoice_count++;
    }

    //getter for price per item
    public function getPartNumber()
    {
        return $this->part_number;
    }

    //getter for price per item
    public function getPartDescription()
    {
        return $this->part_description;
    }

    //getter for price per item
    public function getQuantity()
    {
        return $this->quantity;
    }

    //getter for price per item
    public function getPricePerItem()
    {
        return $this->price_per_item;
    }

    //get incremented invoice count from self
    public function getInvoiceCount() {
        return self::$invoice_count;
    }

    //implement methods from Payable interface
    public function getPaymentAmount()
    {
        // TODO: Implement getPaymentAmount() method.
    }

    public function toString()
    {
        // TODO: Implement toString() method.
    }

}