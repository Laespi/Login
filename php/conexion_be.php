<?php
   $conexion = mysqli_connect("localhost","root","","base_be");
   
   if($conexion){
        echo'conectado exitosamente a la base de datos';
   }else{
        echo'no se pudo conectar a la base de datos';
   }
?>
