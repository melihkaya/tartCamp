<?php
/**
 * Created by JetBrains PhpStorm.
 * User: freesky
 * Date: 17.07.2012
 * Time: 13:24
 * To change this template use File | Settings | File Templates.
 */
class DebitPayment extends MakePayment implements PaymentInterface
{
    public function DebitPayment(){


    }
    public function payment(object $b){

        print("Debit Ödeme Geldi");
    }
}
