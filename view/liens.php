<?php
// view/contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Liens</title>
</head>
<body>
    <header>
        <div class="title">
            <h1>ROME</h1>
        </div>
       
    </header>
    
    <main>
        <section class="menu">
            <?php
                include ROOT_PATH. "/view/inc/menu.php"
            ?>
        </section>
        <section class="container">
            <div class="container-title">
                <div class="title-box">
                    <h2>Liens</h2>
                </div>
                
            </div>

            <div class="brg-menu">
                <h5>MENU</h5>
                <div class="brg-btn" id="btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="brg-menu-nav" class="brg-menu-nav">
                <nav id="nav-menu">
                    <a href="./" >Accueil</a>
                    <a href="./?p=geographie">Géographie</a>
                    <a href="./?p=histoire">Histoire</a>
                    <a href="./?p=culture">Culture</a>
                    <a href="./?p=galerie">Galerie</a>
                    <a href="./?p=contact">Contact</a>
                    <a href="./?p=liens">Liens</a>
                </nav>
            </div>
            
            <div class="img-somm">
                <img class="main-img" src="../img/liens.jpg" alt="">
            </div>
            
            

            <div class="sommaire">
                <p><strong>D'autres capitales se sont associèes à notre site.</strong></p>
                <p>Dans ce site vous trouverez differente information concernant : </p>
            </div>

            <div class="links">
                <div class="a">
                    <a href="">Berlin</a>
                    <a href="">Vienne</a>
                    <a href="">Paris</a>
                    <a href="">Madrid</a>
                    <a href="">Rome</a>
                    <a href="">Londres</a>
                </div>

                <div class="b">
                    <a href="">Lisbone</a>
                    <a href="">Pargue</a>
                    <a href="">Amsterdam</a>
                    <a href="">Copenhague</a>
                    <a href="">Dublin</a>
                    <a href="">Athènes</a>
                </div>

                <div class="c">
                    <a href="">Sofia</a>
                    <a href="">Varsovie</a>
                    <a href="">Helsinki</a>
                    <a href="">Stockholm</a>
                    <a href="">Oslo</a>
                    <a href="">Budapest</a>
                </div>

            </div>
            

        </section>
    </main>
    <script src="../js/script.js"></script>
</body>
</html>