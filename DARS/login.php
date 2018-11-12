<!DOCTYPE html>
<?php
session_start();
require_once 'classes/Membership.php';
$membership = new Membership();

if($_POST && !empty($_POST['username']) && !empty($_POST['pwd']))
{
  $response = $membership-> validate_user($_POST['Username'],$_POST['pwd']);

}

?>
<html>
<head>
  <title>Login to DARS System</title>
  <link rel="stylesheet" type="text/css" href="css/default.css"/>
</head>

<body>
  <div id="Login">
    <form method="post" action="">
      <h2>Digitron <small>ingrese sus datos</small></h2>
      <p>
        <label for="name">Username: </label>
        <input type="text" name="username" />
      </p>
      <p>
        <label  for="pwd">Password: </label>
        <input type="password" name:"pwd">
      </p>
      <p>
        <input type="submit" id=:"submit" value="Login" name="submit" />
      </p>

    </form>
    <<?php
    if(isset($response))echo "<h4 class='alert'>" . $response . "</h4>";
     ?>
  </div>
</body>
</html>
