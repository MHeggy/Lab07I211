<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: payable.class.php
 * Description:
 */

interface Payable {
    public function getPaymentAmount();

    public function toString();
}