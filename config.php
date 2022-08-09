<?php 
Class Config
{
   private $host;
   private $port;
   private $version;

   /** 
    * Configure conforme seu servidor que roda a aplicação CEP
   */
   public function Config() : void
   {
      $this->host = "localhost";
      $this->port = "3500";
      $this->version = "v1";
   }
}