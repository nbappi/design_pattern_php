<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});

$user = new User;
$msg = $user->getMessage();

switch($msg){
   case "SMS" :
      $object = new SendSms();
   break;
   case "Email" :
      $object = new SendEmail();
   break;
}

echo $object->notification();