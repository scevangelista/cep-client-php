<?php 
Class CEP
{
   private $host;
   private $port;
   private $version;

   /** 
    * Configure conforme seu servidor que roda a aplicação CEP
   */
   public function __construct()
   {
      $this->host = "localhost";
      $this->port = "3500";
      $this->version = "v1";
   }


   /**
    * Gera a URL base da aplicação
    */
   private function getBaseURL() : String
   {
      return "http://".$this->host.":".$this->port."/api/".$this->version;
   }


   /**
    * Retorna todos os países cadastrados
    */
   public function getAllCountries() : Array
   {
      $countries = Array();

      $retCom = $this->comunicate($this->getBaseURL()."/countries");
      foreach ($retCom as $countryRet) {
         $nCountry['code'] = $countryRet->code;
         $nCountry['name'] = $countryRet->name;
         $nCountry['initials'] = $countryRet->initials;

         $countries[] = $nCountry;
      }

      return $countries;
   }


   /**
    * Retorna dados de um país pelo código
    */
   public function getCountry(int $code) : Array
   {
      $country = Array();

      $retCom = $this->comunicate($this->getBaseURL()."/countries/".$code);
      foreach ($retCom as $countryRet) {
         $country['code'] = $countryRet->code;
         $country['name'] = $countryRet->name;
         $country['initials'] = $countryRet->initials;
      }

      return $country;
   }


   /**
    * Comunica com o serviço CEP
    */
   private function comunicate(String $url) : mixed
   {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $serverResponse = curl_exec($ch);
      if(!curl_errno($ch)){
         curl_close($ch);
         return json_decode($serverResponse);
      }
      else{
         $ret->error = true;
         return $ret;
      }
   }
}