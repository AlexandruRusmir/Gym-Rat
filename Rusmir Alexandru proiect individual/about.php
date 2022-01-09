<?php 
session_start();

if (!isset($_SESSION['username'])) //Nu este conectat niciun utilizator
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Gym Rat</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="style2.css" />
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li><a href="logout.php">DELOGARE</a></li>
                    <li><a href="store.php">MAGAZIN</a></li>
                    <li><a href="about.php">DESPRE</a></li>
                </ul>
            </nav>
            <h1 class="gymrat-name gymrat-name-large">Gym Rat</h1>
        </header>

        <section class="content-section container">
            <h2 class="section-header">DESPRE GYM RAT:</h2>
            <img class="about-gymrat-image" src="Images/Picture2.png">
			<p>Acest magazin are scopul de a oferi oricărui pasionat de sport oportunitatea de a-și cumpăra câteva produse de calitate, care îl vor ajuta în călătoria spre un stil de viață mai sănătos și o condiție fizică mai bună.</p>
			<p>Beneficiile fizice și mentale date de practicarea sportului au fost demonstrate de nenumărate ori, nefiind necesar să mai auzim de ele. Tot de ce avem nevoie este voința de a ne apuca de activitate fizică, iar acest magazin online oferă oportunitatea de a achiziționa niște echipamente care facilitează practicare sportului în aproape orice loc.</p>
			<p>Produsele alimentare oferite de parteneri sunt destinate sportivilor, întrucât oferă o cantitate semnificativă de proteină raportat la gramaj.</p>
        </section>
        
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="gymrat-name">Gym Rat</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Images/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="Images/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>