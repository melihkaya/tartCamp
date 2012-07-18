<?php
/**
 * Created by JetBrains PhpStorm.
 * User: freesky
 * Date: 17.07.2012
 * Time: 12:59
 * To change this template use File | Settings | File Templates.
 */



class MakePayment extends AbstractPaymentClass implements PaymentInterface
{
    public $temp;
    public $payable = array();

    public function __construct ($payable){

        $temp = $payable[0];

        switch($temp){
            case $temp == PaymentTypeEnum::CREDITCARD:
                $a = new CreditCardPayment();
              break;
            case $temp == PaymentTypeEnum::PHONEPAY:
                $a = new PhonePayment();
              break;
            case $temp == PaymentTypeEnum::DEPITCARD:
                $a = new DebitPayment();
              break;
            default:
               echo "Bilinmeyen Ödeme Şekli";
        }

        print $this->payment($a);
    }

     public function payment(object $b){

     }
}
