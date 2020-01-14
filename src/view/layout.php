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
  <li class="item">shop</li>
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
  <li class="header__under--item mandje"><a href="index.php"></a> winkelmandje</li>
  </ul>
  </header>
  <body>
    <main>
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
