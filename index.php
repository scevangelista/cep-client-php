<?php
   require_once 'CEP.php';
   $cep = new CEP();
   
   //Retorna todos os países
   print_r($cep->getAllCountries());

   //Retorna o país 1058
   print_r($cep->getCountry(1058));

   //Retorna todos os estados
   print_r($cep->getAllStates());

   //Retorna todos os estados do país 1058
   print_r($cep->getStatesOfCountry(1058));