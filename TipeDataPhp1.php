<?php
   //php 7.3.0
   echo "_____Object_____";
   echo "<br>";
   class Hello{
     
     var $str;
   }
   
   $message = new Hello();
   $message ->str="Hello World!";
   echo $mesaage ->str;
   echo "<br><br>";
 ?>