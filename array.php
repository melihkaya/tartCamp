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

