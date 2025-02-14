<?php
require_once (APPPATH  . 'Controllers' . DIRECTORY_SEPARATOR . 'GetController.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= site_url() . "css/footer.css"?>>
    <title>Hot genre</title>
</head>

<body>
  <footer>
    <div class="footer">
      <div class="cgu">
        <ul>
          <li>
            <a href="<?= url_to(getRoute("cgu")) ?>">Conditions générales d'utilisation</a>
          </li>

          <li>
            <a href="<?= url_to(getRoute("quiSommesNous")) ?>">Qui sommes-nous ?</a>
          </li>

          <li>
            <a href="<?= url_to(getRoute("contact")) ?>">Contact</a>
          </li>

          <!-- <li>
            <a href="">Conditions générales d'utilisation</a>
          </li> -->
        </ul>
      </div>

      <div class="contact">
        <h3>DONNEZ-NOUS VOTRE AVIS</h3>

        <div class="contact_container">

          <form action=<?= url_to(getRoute("avis")) ?> method="post">
            <input class="contact_field" type="text" name="avis">
            <button class="contact_button">ENVOYER</button>
          </form>
        </div>
      </div>
      
      <div class="reseaux">
        <ul>
          <li>
            <div class="reseau_container">
              <a href="https://www.instagram.com/hot_genre">
                <h4 class="underline_animation">@hot_genre</h4>
              </a>

              <a href="instagram.com">
                <img src="<?= site_url() . "images/reseaux/instagram.png"?>" alt="Instagram">
              </a>
            </div>
          </li>

          <li>
            <div class="reseau_container">
              <a href="https://www.instagram.com/raven.morty">
                <h4 class="underline_animation">@raven.morty</h4>
              </a>

              <a href="instagram.com">
                <img src="<?= site_url() . "images/reseaux/instagram.png"?>" alt="Instagram">
              </a>
            </div>
          </li>

          <li>
            <div class="reseau_container">
              <a href="https://www.instagram.com/moi_cest_baba">
                <h4 class="underline_animation">@moi_cest_baba</h4>
              </a>

              <a href="instagram.com">
                <img src="<?= site_url() . "images/reseaux/instagram.png"?>" alt="Instagram">
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </footer>
 </body>
</html>
