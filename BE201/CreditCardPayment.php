<?php
/**
 * Created by JetBrains PhpStorm.
 * User: freesky
 * Date: 17.07.2012
 * Time: 13:21
 * To change this template use File | Settings | File Templates.
 */
class CreditCardPayment implements PaymentInterface
{
    public function CreditCardPayment(){


    }

    public function Payment(object $b){
        print "Kredi Kartı Ödeme Geldi";
    }
}
