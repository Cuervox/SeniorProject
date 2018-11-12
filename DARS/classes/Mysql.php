<<?php
require_once 'includes/constants.php';
class Mysql
{
  private $conn;
  function __contruct()
  {
    $this->conn = new mysqli(DB_SERVER, DB_USER,DB_PASSWORD,DB_NAME) or
    die('Hubo un problema conectandose a la base de datos');
  }
  function verify_UserName_and_Pass($un, $pwd)
  {
    $query = "SELECT *
              FROM user
              WHERE name = ? AND password = ?
              LIMIT 1";
  if($stmt = $this->conn->prepare($query))
    {
      $stmt->bind_param('ss', $un, $pwd);
      $stmt->execte();

      if($stmt->fetch())
        {
        $stmt->close();
        return true;
        }
      }
  }
}
 ?>
