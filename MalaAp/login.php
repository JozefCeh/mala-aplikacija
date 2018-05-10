<?php

   function logToFile($filename, $msg) 
   {  

   $fd = fopen($filename, "a");

   $str = "[" . date("Y.m.d h:i", time()) . "] " . $msg;    

   fwrite($fd, $str . "\n"); 
 
   fclose($fd); 
   }
 ?>