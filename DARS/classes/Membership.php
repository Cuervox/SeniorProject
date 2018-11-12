<<?php

require 'Mysql.php';

class Membership {

  function validate_user($un, $pwd)
  {
      $mysql = New Mysql();
      //$ensure_credentials = $mysql->verify_UserName_and_Pass($un,md5($pwd));
      $ensure_credentials = $mysql->verify_UserName_and_Pass($un,$pwd);
      if($ensure_credentials)
      {
        $_SESSION['status'] = 'authorized';
        header("location: index.php");
      }
      else return  "Por favor ingrese un usuario y clave correcta";
  }

}?>
