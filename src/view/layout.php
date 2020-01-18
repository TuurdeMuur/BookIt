<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo $css;?>
    <style>
      #anim{max-width: 1000px;margin: 0 auto}
    </style>
    <link rel="stylesheet" href="https://use.typekit.net/cfm1xzq.css">
  </head>
  <?php $currentpage = $_SERVER['REQUEST_URI'] ?>
  <?php $badpage = "/index.php?page=long" ?>
  <?php if ($currentpage != $badpage): ?>
  <header class="header">
  <div class="header__above">
  <ul class="header__above--section items">
  <li class="item">video</li>
  <li class="item">tv-gids</li>
  <li class="item">zoekertjes</li>
  <li class="item">abonnement nemen</li>
  </ul>
  <ul class="header__above--section items">
  <li class="item item__bold"><a class="item__bold--link" href="index.php?page=shop">shop</a></li>
  <li class="item item__bold">nu in humo</li>
  <li class="item item__bold">login</li>
  <li class="item item__bold">registreer</li>
  </ul>
  </div>
  <ul class="header__under">
  <div class="container">
  <li class="header__under--item search"><a href="index.php"><img src="./assets/SVG/glas.svg" width="15" alt="zoeken"></a></li>
  <li class="header__under--item">home</li>
  <li class="header__under--item">actua</li>
  <li class="header__under--item">humor</li>
  <li class="header__under--item"><a href="index.php"><h1><span class="hidden">humo</span></h1></a></li>
  <li class="header__under--item">tv/film</li>
  <li class="header__under--item">muziek</li>
  <li class="header__under--item">boeken</li>
  <li class="header__under--item mandje"><a href="index.php?page=mandje"><img src="./assets/SVG/mandje.svg" width="25" alt="mandje"><span class="cart-items"><?php echo $numItems;?></span></div></a></li>
  </ul>
  <?php endif; ?>
  <body>

    <main>
      <?php if ($currentpage != $badpage):?>
    <div class="call-wrapper">
      <div class="call">
        <a class="call__link" href="index.php?page=abonnement"> <img src="./assets/pijltje.svg" alt="pijltje" width="20"> ABONNEER JE OP HUMO</a>
        <p class="call__text">Humo eert het science-fiction en zet tien weken lang de beste boeken van het genre in de kijker.
        Deze week staat het boek Ready Player One in de kijker.
        Ben je in de markt om 1 van de boeken of zelf de hele reeks te kopen aarzel dan niet en bestel ze in onze webshop. <br> <a class="span" href="index.php?page=long">Klik hier</a> om meer te weten te komen over het boek.</p>
      </div></div>
      <?php else: ?>
        <div class="terug">
    <a class="terug__link" href="index.php">Terug naar humo site</a>
    </div>
    </header>
      <?php endif;?>
      <?php echo $content;?>
    </main>
    <?php if ($currentpage != $badpage): ?>
    <footer class="footer">
    <p class="footer__text">Om meer te weten te komen over het boek die deze week zijn de kijker staat</p>
    <a class="footer__link" href="">Klik hier</a>
  </footer>
  <?php endif; ?>
    <?php echo $js; ?>
    <script src="lottie.js"></script>
  </body>
</html>
