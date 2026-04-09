<?php
// view/contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Geographie</title>
</head>
<body>
    <header>
        <div class="title">
            <div class="title-box">
                    <h2>ROME</h2>
                </div>
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
                <h2>Geographie</h2>
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

            <img class="main-img" src="img/geographie.png" alt="GEO">

            <p>Au centre de la péninsule italienne, Rome sépare l'Italie du Nord de l'Italie du Sud. En effet, la capitale est située à 187 km au nord-ouest de Naples, à 234 km au sud-sud-est de Florence, à 372 km à l'ouest-nord-ouest de Bari, à 424 km au nord de Palerme et à 479 km au sud-est de Milan. La ville est située dans la région du Latium, à la confluence de l'Aniene et du Tibre. Le centre-ville est situé à environ 25 kilomètres de la côte de la mer Tyrrhénienne, mais l'agglomération romaine s'étend jusqu'à celle-ci par le biais du Municipio X formant l'actuel quartier d'Ostie, appelée aussi Lido di Roma (Lido signifie « littoral » en Italien). La ville est la plus étendue d'Italie, et l'une des plus vastes d'Europe, avec 1 285 km2 (soit douze fois la superficie de Paris intra muros). La petite surface du centre-ville, qui ne représente que 5 % de la commune, donne une impression erronée de sa superficie réelle.</p>

            <p>L'altitude varie, d'un niveau proche de l'altitude 0 sur les bords du Tibre, en passant par 13 m au-dessus du niveau de la mer (sur la Piazza del Popolo, point le plus bas hors des berges) à 140 m (à Monte Mario). Le territoire de la ville présente des paysages naturels variés : des reliefs, avec des monts et des collines (y compris les Sept Collines historiques), des plaines, des zones de campagne (Agro Romano, avec des champs cultivés, des prés, des fermes, des allées de pins parasols), des « marranes » (fossés ou tranchées avec de petits ruisseaux), le fleuve Tibre et ses affluents, dont la rivière Aniene, une île fluviale (île Tibérine), et des zones côtières avec des forêts de pins, des dunes et des plages de sable (Capocotta), sur la côte de la mer Tyrrhénienne longeant le Lido di Ostia.</p>

            <p>Le centre historique de Rome est dominé par les sept collines : Aventin, Cælius, Capitole, Esquilin, Palatin, Quirinal et Viminal, se situant toutes sur la rive gauche du Tibre qui traverse la ville en direction du Sud et au milieu duquel se trouve l'île Tibérine. Le centre-ville comprend également les collines du Janicule, du Pincio et du Vatican, ainsi que le relief artificiel de Monte Testaccio.</p>

            <p>Le centre historique est l'une des cités antiques les plus grandes du monde, il est divisé en 22 Rioni et comprend environ 300 hôtels, plus de 2 000 palais, 300 églises, 200 fontaines monumentales, plusieurs sites archéologiques, huit parcs, les principaux monuments de la ville, les institutions gouvernementales et des milliers de magasins, bureaux, bars et restaurants.
            Le reste de la ville est divisé en quartiers urbains qui contiennent la majorité des immeubles modernes.</p>

            <p>Rome bénéficie d'un climat méditerranéen caractéristique des côtes méditerranéennes de l'Italie. Les hivers sont doux, et les coups de froid en provenance des Apennins sont infréquents. La neige est très rare. Les étés sont chauds et secs, mais influencés par la proximité de la mer. Un record absolu de chaleur a été mesuré le 3 juillet 1905 atteignant 44,6 °C au centre de Rome. Les précipitations atteignent leur maximum lors des pluies orageuses d'automne. La plus haute température à Rome fut de 44,6 °C le 4 août 1981 et la plus basse fut de −9,4 °C le 11 janvier 1985 à Ciampino. La commune est si vaste et son relief si varié qu'il peut y avoir des variations climatiques importantes, par exemple entre les quartiers nord et ceux du sud, ou entre le centre-ville et le littoral.</p>

        </section>
    </main>
    <script src="js/script.js"></script>
</body>
</html>