<!DOCTYPE html>
<html>
    <head>
        <title>Database</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/pagestyle.css">
    </head>
    <?php
            session_start();
            include("passwords.php");
            check_logged();
    ?>
    <body>
            <header id="header">
                <h1>DB Content</h1>
            </header>
            <nav>
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="dbinteraction.php">Cerca un articolo</a>
                    </li>
                    <li>
                        <a href="contatti.php">Contatti</a>
                    </li>
                    <li id="logbut">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
            <article id="dbcont">
            <?php
                $con = mysqli_connect("localhost", "root", ""); 
                if (!$con) {
                  die("Connection error: " . mysqli_error($con));
                }
                mysqli_select_db($con,"mydb") or die(mysqli_error());

                echo "<h2>Database interaction result</h2>";
                if ($_POST["action"] == 1) {
                    echo "<table><tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Anno</th><th>Link</th></tr>";
                  // Displays all records
                  $result = mysqli_query($con,"SELECT * FROM users"); 
                  while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["titolo"]."</td><td> 
                    ".$row["autore"]."</td><td>".$row["anno"]."</td><td><a href='".$row['nomeFile']."' download='".$row['nomeFile']."'>".$row['titolo']."</a></td></tr>";
                    }
                    echo "</table>";
                } elseif ($_POST["action"] == 2) { 
                  // Displays the record corresponding to a specific title
                  echo "<table><tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Anno</th><th>Link</th></tr>";
                  $result = mysqli_query($con,"SELECT * FROM users WHERE titolo = " . "'" . $_POST['t'] . "'");
                  while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["titolo"]."</td><td> 
                    ".$row["autore"]."</td><td>".$row["anno"]."</td><td><a href='".$row['nomeFile']."' download='".$row['nomeFile']."'>".$row['titolo']."</a></td></tr>";
                    }
                    echo "</table>";
                } elseif ($_POST["action"] == 3) { 
                  // Displays the record corresponding to a specific year
                  echo "<table><tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Anno</th><th>Link</th></tr>";
                  $result = mysqli_query($con,"SELECT * FROM users WHERE anno = " . 
                                        "'" . $_POST['y'] . "'");
                  while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["titolo"]."</td><td> 
                    ".$row["autore"]."</td><td>".$row["anno"]."</td><td><a href='".$row['nomeFile']."' download='".$row['nomeFile']."'>".$row['titolo']."</a></td></tr>";
                    }
                    echo "</table>";
                }
                elseif ($_POST["action"] == 4) { 
                    // Displays the record corresponding to a specific author                    
                    $result = mysqli_query($con,"SELECT * FROM users WHERE autore = " . 
                                          "'" . $_POST['a'] . "'");
                    echo "<table><tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Anno</th><th>Link</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr><td>".$row["id"]."</td><td>".$row["titolo"]."</td><td> 
                      ".$row["autore"]."</td><td>".$row["anno"]."</td><td><a href='".$row['nomeFile']."' download='".$row['nomeFile']."'>".$row['titolo']."</a></td></tr>";
                      }
                      echo "</table>";
                }
              ?>
              <br><a href="dbinteraction.php">Torna alla ricerca</a>

            </article>
            <footer id="footer">
                <p>
                    &copy;All rights reserved - 2022
                </p>
            </footer>
    </body>
</html>