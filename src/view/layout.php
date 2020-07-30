<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $css;?>
    <link rel="stylesheet" href="https://use.typekit.net/cfm1xzq.css">
  </head>
  <?php $currentpage = $_SERVER['REQUEST_URI'] ?>
  <?php $badpage = "/index.php?page=long" ?>
  <?php if ($currentpage != $badpage): ?>
  <header class="header">
  <div class="header__above">
  <ul class="header__above--section items">
  <li class="item none">video</li>
  <li class="ite none">tv-gids</li>
  <li class="item none">zoekertjes</li>
  <li class="item none">abonnement nemen</li>
  </ul>
  <ul class="header__above--section items">
  <li class="item item__bold"><a class="item__bold--link" href="index.php?page=shop">shop</a></li>
  <li class="item item__bold none">nu in humo</li>
  <li class="item item__bold none">login</li>
  <li class="item item__bold none">registreer</li>
  </ul>
  </div>
  <ul class="header__under">
  <div class="container">
  <li class="header__under--item search"><a href="index.php"><img class="zoeker" src="./assets/SVG/glas.svg" width="15" alt="zoeken"></a></li>
  <li class="header__under--item none">home</li>
  <li class="header__under--item none" >actua</li>
  <li class="header__under--item none">humor</li>
  <li class="header__under--item"><a class="humo-logo" href="index.php"><h1><span class="hidden">humo</span></h1></a></li>
  <li class="header__under--item none">tv/film</li>
  <li class="header__under--item none">muziek</li>
  <li class="header__under--item none">boeken</li>
  <li class="header__under--item mandje"><a href="index.php?page=mandje"><img class="mandje__img" src="./assets/SVG/mandje.svg" width="25" alt="mandje"><span class="cart-items"><?php echo $numItems;?></span></div></a></li>
  </ul>
  <?php endif; ?>
  </header>
  <body class="body">
    <main>
      <?php if ($currentpage != $badpage):?>
    <div class="call-wrapper">
      <div class="call">
        <a class="call__link" href="index.php?page=abonnement"> <img src="./assets/pijltje.svg" alt="pijltje" class="abo" width="20">ABONNEER<span class="abo">JE OP HUMO</span> </a>
      </div></div>
      <?php else: ?>
        <div class="terug">
    <a class="terug__link" href="index.php">Terug naar humo site</a>
    </div>
      <?php endif;?>
      <?php echo $content;?>
    </main>
    <?php if ($currentpage != $badpage): ?>
    <footer class="footer">
    <p class="footer__text">Om meer te weten te komen over het boek die deze week zijn de kijker staat</p>
    <a class="footer__link" href="index.php?page=long">Klik hier</a>
  </footer>
  <?php endif; ?>
    <?php echo $js; ?>
  </body>
</html>
