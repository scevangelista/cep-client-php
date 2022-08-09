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

   //Retorna o estado 53
   print_r($cep->getState(53));

   //Retorna todas as cidades
   print_r($cep->getAllCities());

   //Retorna todas as cidades de um estado
   print_r($cep->getCitiesOfState(53));

   //Retorna a cidade 5221858
   print_r($cep->getCity(5221858));