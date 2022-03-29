<!DOCTYPE html>
<html>
    <head>
        <title>Ricerca</title>
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
                <h1>Cerca un articolo</h1>
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
            <article>
                <h2>Questa è la pagina di ricerca</h2>
                <p>1 - Ti permette di vedere tutti gli articoli disponibili</p>
                <p>2 - Ti permette cercare gli articoli per titolo</p>
                <p>3 - Ti permette cercare gli articoli per anno</p>
                <p>4 - Ti permette cercare gli articoli per autore</p>
                <br><br>
                <div id="formdb">
                    <form name="f1" action="db.php" method="post">
                    <input type="submit" value="Cerca">
                        <br> 1 - Vedi tutti gli articoli disponibili <br> <br>
                        <input type="hidden" name="action" id="action" value="1">
                    </form> 
                    <form name="f2" action="db.php" method="post">
                        2 - Cerca l'articolo per titolo <br>
                        <input type="hidden" name="action" id="action" value="2">
                        <input type="text" name="t" id="t" placeholder="Titolo" size="10">
                        <input type="submit" value="Cerca">
                    </form> 
                    <form name="f3" action="db.php" method="post">
                        3 - Cerca gli articoli per anno <br>
                        <input type="hidden" name="action" id="action" value="3">
                        <input type="text" name="y" id="y" placeholder="Anno" size="10">
                        <input type="submit" value="Cerca">
                    </form>
                    <form name="f4" action="db.php" method="post">
                        4 - Cerca gli articoli per autore <br>
                        <input type="hidden" name="action" id="action" value="4">
                        <input type="text" name="a" id="a" placeholder="Autore" size="10">
                        <input type="submit" value="Cerca">
                    </form>
                </div>
            </article>                     
            <footer id="footer">
                <p>&copy;All rights reserved - 2022</p>
            </footer> 
    </body> 
</html>