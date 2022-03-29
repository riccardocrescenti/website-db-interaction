<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">  
    <link rel="stylesheet" href="css/loginstyle.css">  
    <script src="js\controls.js"></script>
  </head>
  <body>
      <?php 
      session_start(); 
      include("passwords.php"); 
      if (isset($_POST["ac"]) && $_POST["ac"]=="log") { 
        if (isset($USERS[$_POST["username"]]) && $USERS[$_POST["username"]]==$_POST["password"]) { 
          $_SESSION["logged"]=$_POST["username"]; 
        } else { 
          $message = "Wrong username or password";
          echo "<script type='text/javascript'>alert('$message');</script>";
          //echo '<p>Wrong username or password!</p>';
        }; 
      }; 
      if (isset($_SESSION["logged"]) && array_key_exists($_SESSION["logged"],$USERS)) { // the user is logged
        header("Location: home.php");
      } else {
        echo '<form id ="formlogin" name="formlogin" action="login.php" method="post">';
        echo ' <h1>Login</h1>';
        echo '  <input type="hidden" name="ac" id="ac" value="log">'; 
        echo '  Username: <input type="text" name="username" id="username" placeholder="Username"><br>'; 
        echo '  Password: <input type="password" name="password" id="password" placeholder="Password"><br><br>'; 
        echo '  <input type="submit" value="Login" onclick="checkFormL()">';  
        echo '<p>Non sei ancora registrato? <a href="registration.html">Iscriviti ora!</a></p>';
        echo '</form>'; 
      }; 
    ?>
  </body>
</html>