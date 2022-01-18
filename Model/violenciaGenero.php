<?php

class violenciaGeneros
{
 //Atributo para conexión a SGBD
 private $oci;

 public function __CONSTRUCT ()
 {
     try {
         $this->oci = Database::Conectar ();
     } catch ( Exception $e ) {
         die( $e->getMessage () );
     }
 }

}