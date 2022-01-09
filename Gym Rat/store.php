<?php 
session_start();

if (!isset($_SESSION['username'])) //Nu este conectat niciun utilizator
    header("Location: index.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gym Rat</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="style2.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="logout.php">DELOGARE</a></li>
                    <li><a href="store.php">MAGAZIN</a></li>
                    <li><a href="about.php">DESPRE</a></li>
                </ul>
            </nav>
            <h1 class="gymrat-name gymrat-name-large">Gym Rat</h1>
        </header>
        <section class="container content-section">
			<?php echo "<h2>Bun venit, " . $_SESSION['username'] . "!</h2>"; ?>
            <h2 class="section-header">PRODUSE</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Wrist Wraps</span>
                    <img class="shop-item-image" src="Images/wrist_wraps.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADĂUGAȚI ÎN COȘ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Vestă cu greutăți</span>
                    <img class="shop-item-image" src="Images/weighted_vest.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$109.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADĂUGAȚI ÎN COȘ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Inele cu funii din cânepă</span>
                    <img class="shop-item-image" src="Images/rings.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADĂUGAȚI ÎN COȘ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Greutăți pentru gleznă</span>
                    <img class="shop-item-image" src="Images/ankle_weights.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$54.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADĂUGAȚI ÎN COȘ</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">GUSTĂRI OFERITE DE PARTENERI</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Iaurt 160g</span>
                    <img class="shop-item-image" src="Images/yogurt.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$0.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADĂUGAȚI ÎN COȘ</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Beef Jerky 81g</span>
                    <img class="shop-item-image" src="Images/beef_jerky.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$5.69</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADĂUGAȚI ÎN COȘ</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">COȘ</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">PRODUS</span>
                <span class="cart-price cart-header cart-column">PREȚ</span>
                <span class="cart-quantity cart-header cart-column">CANTITATE</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">CUMPĂRĂ!</button>
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