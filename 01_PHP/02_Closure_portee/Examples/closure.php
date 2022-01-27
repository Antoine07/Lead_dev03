<?php

$message = "Hello";

$showMessage = function() use ($message) : void{
   $newMessage = "World";

   (function() use ($newMessage, $message){
       echo $message . $newMessage;
   })();

};

$showMessage();