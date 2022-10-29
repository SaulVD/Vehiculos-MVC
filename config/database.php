<?php
     class Conectar {
         public static function conexion(){
             //$conexion = new mysqli("localhost","root","","bdbackend");
             $conexion = mysqli_connect("localhost","root","","bdbackend");
             return $conexion;
             
         }
     }
?>
