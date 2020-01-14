<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todos - <?php echo $title; ?></title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
  </head>
  <header class="header">
  <div class="header__above">
  <ul class="header__above--section items">
  <li class="item">video</li>
  <li class="item">tv-gids</li>
  <li class="item">zoekertjes</li>
  <li class="item">abonnement nemen</li>
  </ul>
  <ul class="header__above--section items">
  <li class="item"><a href="index.php?page=shop">shop</a></li>
  <li class="item">nu in humo</li>
  <li class="item">login</li>
  <li class="item">registreer</li>
  </ul>
  </div>
  <ul class="header__under">
  <li class="header__under--item search">search</li>
  <li class="header__under--item">home</li>
  <li class="header__under--item">actua</li>
  <li class="header__under--item">humor</li>
  <li class="header__under--item"><h1>humo</h1></li>
  <li class="header__under--item">tv/film</li>
  <li class="header__under--item">muziek</li>
  <li class="header__under--item">boeken</li>
  <li class="header__under--item mandje"><a href="index.php"></a></li>
  </ul>
  </header>
  <body>
    <main>
      <div>
        <a href="index.php?page=abonnement"> <img src="../assets/pijltje.svg" alt="pijltje"> ABONNEER JE OP HUMO</a>
        <p>Humo eert het science-fiction en zet tien weken lang de beste boeken van het genre in de kijker. Deze week staat het boek Ready Player One in de kijker. Ben je in de markt om 1 van de boeken of zelf de hele reeks te kopen aarzel dan niet en bestel ze in onze webshop. </p>
      </div>
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
  <footer>
    <p>Om meer te weten te komen over het boek die deze week zijn de kijker staat</p>
    <a href="">Klik hier</a>
  </footer>
</html>
