<?php

$customers = array(
                    "data" => array(

                        array(
                            "name" => "Tart",
                            "surname" => "New Media"
                          ),

                        array(
                            "name" => "Techinox"
                         ),

                        array(
                            "surname" => "PHP",
                            "age" => 13
                         )
                    )
                  );



$html ="<table border='1'>";

//ilk Arrayden kuratıyoruz.
$customerTable = array_shift($customers);
$customerTableKeys = array();

//içerdeki arrayleri ayıklıyoruz
foreach ($customerTable as $customer){
	$customerTableKeys = array_merge($customerTableKeys, array_keys($customer));
}

//tekrar eden baslıkları ayırıp html tagları araya katılıyor
$customerTableKeys = array_unique($customerTableKeys);
$html .= "<tr><th>".implode("</th><th>",$customerTableKeys)."</th></tr>";

foreach ($customerTable as $customer){

   $html .= " <tr>";

   foreach ($customerTableKeys as $key){

        if (isset($customer[$key])){
//alanlara değerleri giriyoruz
            $html .= "<td>".$customer[$key]."</td>";

        } else {
            $html .= "<td>&nbsp;</td>";
        }
    }

    $html .= "</tr>";
}


$html .= "</table>";
//tüm değerler ekrana yazılıyor
echo $html;
