<?php
// view/galerie.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet" />
    <title><?= $_GET['p'] ?></title>
</head>
<body>
    <header>
        <?php
                include ROOT_PATH. "/view/inc/entete.php"
        ?>
       
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
                        <a href="img/1280px_equestrian-statue-of-marcus-aurelius.jpg" data-lightbox="image-1" data-title="Légende Image 1" data-alt="Description">
                            <img src="img/480px_equestrian-statue-of-marcus-aurelius.jpg" alt="">
                        </a>
                        <div class="cap">
                            <caption>Equestrian statue of marcus aurelius</caption>
                        </div>
                        
                    </div>

                    <div class="img-box">
                        <a href="img/1280px_Fontana_de_Trevi.jpg" data-lightbox="image-1" data-title="Légende Image 1" data-alt="Description">
                            <img src="img/480px_Fontana_de_Trevi.jpg" alt="">
                        </a>
                        <div class="cap">
                            <caption>Fontana de Trevi</caption>  
                        </div>
                        
                    </div> 
                    
                    <div class="img-box">
                        <a href="img/1280px_Panthéon,_Rome.jpg" data-lightbox="image-1" data-title="Légende Image 1" data-alt="Description">
                            <img src="img/480px_Panthéon,_Rome.jpg" alt="">
                        </a>
                        <div class="cap">
                            <caption>Panthéon</caption>
                        </div>
                         
                    </div>
                </article>

                <article class="right">
                    <div class="img-box">
                        <a href="img/1280px_Piazza_Navona.jpg" data-lightbox="image-1" data-title="Légende Image 1" data-alt="Description">
                            <img src="img/480px_Piazza_Navona.jpg" alt="">
                        </a>
                        <div class="cap">
                            <caption>Piazza Navona</caption>
                        </div>
                        
                    </div>  
                    
                    <div class="img-box">
                        <a href="img/1280px_Pont_Saint-Ange_et_le_Vatican.jpg" data-lightbox="image-1" data-title="Légende Image 1" data-alt="Description">
                            <img src="img/480px_Pont_Saint-Ange_et_le_Vatican.jpg" alt="">
                        </a>
                        <div class="cap">
                            <caption>Pont Saint-Ange et le Vatican</caption>
                        </div>
                        
                    </div>

                    <div class="img-box">
                        <a href="img/1280px_Quirinale_palazzo_e_obelisco.jpg" data-lightbox="image-1" data-title="Légende Image 1" data-alt="Description">
                            <img src="img/480px_Quirinale_palazzo_e_obelisco.jpg" alt="">
                        </a>
                        <div class="cap">
                            <caption>Quirinale palazzo e obelisco</caption>
                        </div>
                        
                    </div>
                </article>
            </div>

        </section>
    </main>
    <script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>