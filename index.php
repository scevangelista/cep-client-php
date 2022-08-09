<?php
   require_once 'CEP.php';
   $cep = new CEP();
   
   print_r($cep->getAllCountries());

   print_r($cep->getCountry(1058));