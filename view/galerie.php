<?php
// view/galerie.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Galerie</title>
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
                    <h2>Galerie</h2>
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

            <div class="gal">

                <article class="left">

                    <div class="img-box">
                        <img src="../img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="">
                        <div class="cap">
                            <caption>Equestrian statue of marcus aurelius</caption>
                        </div>
                        
                    </div>

                    <div class="img-box"> 
                        <img src="../img/480px_Fontana_de_Trevi" alt="">
                        <div class="cap">
                            <caption>Fontana de Trevi</caption>  
                        </div>
                        
                    </div> 
                    
                    <div class="img-box">
                        <img src="../img/480px_Panthéon,_Rome.jpg" alt="">
                        <div class="cap">
                            <caption>Panthéon</caption>
                        </div>
                         
                    </div>
                </article>

                <article class="right">
                    <div class="img-box">
                        <img src="../img/480px_Piazza_Navona.jpg" alt="">
                        <div class="cap">
                            <caption>Piazza Navona</caption>
                        </div>
                        
                    </div>  
                    
                    <div class="img-box">
                        <img src="../img/480px_Pont_Saint-Ange_et_le_Vatican.jpg" alt="">
                        <div class="cap">
                            <caption>Pont Saint-Ange et le Vatican</caption>
                        </div>
                        
                    </div>

                    <div class="img-box">
                        <img src="../img/480px_Quirinale_palazzo_e_obelisco.jpg" alt="">
                        <div class="cap">
                            <caption>Quirinale palazzo e obelisco</caption>
                        </div>
                        
                    </div>
                </article>
            </div>

        </section>
    </main>
    <script src="../js/script.js"></script>
</body>
</html>