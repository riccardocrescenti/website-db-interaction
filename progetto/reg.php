<!DOCTYPE html>
<html>
  <head>
    <title>Registration result</title>
    <meta charset="utf-8">    
  </head>
  <body>
    <?php 
      $con = mysqli_connect("localhost", "root", ""); 
      if (!$con) {
        die("Connection error: " . mysqli_error($con));
      }

      $exists = false; 
      mysqli_select_db($con, "mydb");

      $result = mysqli_query($con, "SELECT username FROM usrpwd");
      while($row = mysqli_fetch_assoc($result)){
        if ( $row['username'] == $_POST["usrn"]) {
          echo '<h1>Username already exists; <br> <a href="registration.html">back 
                to registration page</a></h1>';
          $exists = true;
          break;
        }
      }
      $password= $_POST['pass'];
      $usern= $_POST['usrn'];
      $passwordlength= strlen($password);
      $usernlength= strlen($usern);
      if (($passwordlength < 8) or ($usernlength < 4)){
        header('Location: registration.html');
      }
      elseif (! $exists ) {
        $sql = "INSERT INTO usrpwd (username, password) VALUES ('" . 
               $_POST["usrn"] . "', '" . $_POST["pass"] . "')";
        $result = mysqli_query($con, $sql);
        if ($result)
        echo '<h1>Registration successful!</h1>';
        echo '<h1><a href="dbinteraction.php">Login to enter the website</a></h1>';
      }
    ?>
  </body>
</html>
