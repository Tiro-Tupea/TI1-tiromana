<?php
// view/contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Contact</title>
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
                <h2>Contact</h2>
            </div>
            
            <div class="forms">
                <img src="../img/contacts.jpg" alt="">

                <p><b>Pour nous laissez un commentaire ou obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous : </b></p>

                <form action="GET">
                    <div class="form-box">
                        <label for="lname" id="lname">NOM : </label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    
                    <div class="form-box">
                        <label for="fname" id="fname">PRENOM : </label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    
                    <div class="form-box">
                        <label for="city" id="city">VILLE : </label>
                        <input type="text" name="city" id="city">
                    </div>    
                    
                    <div class="form-box">
                        <label for="mail" id="mail">E-MAIL : </label>
                        <input type="email" name="email" id="email">
                    </div>
                    
                    <div class="form-box comment">
                        <label for="comm" id="comm">COMMENTAIRE : </label>
                        <textarea name="comm" id="comm"></textarea>
                    </div>
                    
                    <button type="submit">Envoyer votre message</button>

                
                </form>
            </div>

        </section>
    </main>
</body>
</html>