<!DOCTYPE html>
<html>
    <head>
        <title>Contatti</title>
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
                <h1>Contatti</h1>
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
                    <p>
                        Sede: Facoltà di ingegneria, via Ferrata, Pavia (PV)
                    </p>
                    <h2>Puoi contattarci 0382-000000 </h2>
                    <img id="img" src="images/universita.jpg" alt="universita nave, unipv" width="600" height="350">
                    <p>Non esitare a contattarci! <br> 
                            Mail: <a href="mailto:crescenti.riccardo@gmail.com">crescenti.riccardo@gmail.com</a> <br>
                            Telefono: 0382-000000 <br><br>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas consectetur nibh non venenatis. 
                            Vivamus euismod neque tincidunt congue cursus. Nunc et sollicitudin dui, non commodo sapien. 
                            Phasellus congue varius neque ac posuere. Maecenas pretium in augue at porta. 
                            Vivamus congue purus nisl, volutpat egestas nisi suscipit ac. Quisque vitae varius arcu. 
                            Curabitur eu magna ac justo finibus commodo. Quisque quis ipsum consequat, euismod purus ut, dignissim eros. 
                            Donec volutpat in lorem sed pretium. Nullam fermentum mauris sit amet tincidunt aliquet. 
                            Duis porttitor aliquet quam quis maximus. Duis imperdiet magna lorem, vel sodales ex pharetra quis. 
                            Morbi nec ipsum commodo, maximus odio efficitur, suscipit nisl. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                    <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas consectetur nibh non venenatis. 
                            Vivamus euismod neque tincidunt congue cursus. Nunc et sollicitudin dui, non commodo sapien. 
                            Phasellus congue varius neque ac posuere. Maecenas pretium in augue at porta. 
                            Vivamus congue purus nisl, volutpat egestas nisi suscipit ac. Quisque vitae varius arcu. 
                            Curabitur eu magna ac justo finibus commodo. Quisque quis ipsum consequat, euismod purus ut, dignissim eros. 
                            Donec volutpat in lorem sed pretium. Nullam fermentum mauris sit amet tincidunt aliquet. 
                            Duis porttitor aliquet quam quis maximus. Duis imperdiet magna lorem, vel sodales ex pharetra quis. 
                            Morbi nec ipsum commodo, maximus odio efficitur, suscipit nisl. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                    <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas consectetur nibh non venenatis. 
                            Vivamus euismod neque tincidunt congue cursus. Nunc et sollicitudin dui, non commodo sapien. 
                            Phasellus congue varius neque ac posuere. Maecenas pretium in augue at porta. 
                            Vivamus congue purus nisl, volutpat egestas nisi suscipit ac. Quisque vitae varius arcu. 
                            Curabitur eu magna ac justo finibus commodo. Quisque quis ipsum consequat, euismod purus ut, dignissim eros. 
                            Donec volutpat in lorem sed pretium. Nullam fermentum mauris sit amet tincidunt aliquet. 
                            Duis porttitor aliquet quam quis maximus. Duis imperdiet magna lorem, vel sodales ex pharetra quis. 
                            Morbi nec ipsum commodo, maximus odio efficitur, suscipit nisl. 
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
            </article>                
            <footer id="footer">
                <p>
                    &copy;All rights reserved - 2022
                </p>
            </footer> 
    </body> 
</html>