
<?php if ($product['kind'] == "humo abonnement ") {
  echo "<section class='article'>";
  echo "<h2 class='article__title'> " . $product['name'] ."</h2>";
  echo "<img class='article__img' src='' alt='product foto'>";
  echo "<div class='article__text'>";
  echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
  echo " <p class='article__text--description'>" . $product['description'] . "</p>";
  echo "</div>";
  echo "<form action='index.php?page=product&id=" . $product['id'] . ">' method='post'>
  <input type='radio' id='12'> <label for='12'>periode 12 maand: 15,95 euro/maand</label> <br>
  <input type='radio' id='24'> <label for='24'>periode 24 maanden: 14,36 euro/maand</label> <br>
  <input type='radio' id='36'> <label for='36'>periode 36 maanden: 12,76 euro/maand</label>
  </form>";
  echo "<div class='article__links'>";
  echo "<a class='article__links--link' href='index.php?page=shop'><img src='' alt='pijltje'>Terug naar shop</a>";
  echo "<a class='article__links--link' href='index.php?page=mandje'>In winkelmandje</a>";
  echo "</div>";
  echo "</section>";

  }elseif ($product['name'] == "mini boekenlicht"){
    echo "<section class='article'>";
    echo "<h2 class='article__title'> " . $product['name'] ."</h2>";
    echo "<img class='article__img' src='' alt='product foto'>";
    echo "<div class='article__text'>";
    echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
    echo " <p class='article__text--description'>" . $product['description'] . "</p>";
    echo "</div>";
    echo "<form action='index.php?page=product&id=" . $product['id'] . ">' method='post'>
    <p>kleur</p>
    <input type='radio' id='12'> <label for='12'>rood</label> <br>
    <input type='radio' id='24'> <label for='24'>groen</label> <br>
    <input type='radio' id='36'> <label for='36'>blauw</label>
    </form>";
    echo "<div class='article__links'>";
    echo "<a class='article__links--link' href='index.php?page=shop'><img src='' alt='pijltje'>Terug naar shop</a>";
    echo "<a class='article__links--link' href='index.php?page=mandje'>In winkelmandje</a>";
    echo "</div>";
    echo "</section>";

  }elseif ($product['name'] == "leeslichtje retro "){
    echo "<section class='article'>";
    echo "<h2 class='article__title'> " . $product['name'] ."</h2>";
    echo "<img class='article__img' src='' alt='product foto'>";
    echo "<div class='article__text'>";
    echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
    echo " <p class='article__text--description'>" . $product['description'] . "</p>";
    echo "</div>";
    echo "<form action='index.php?page=product&id=" . $product['id'] . ">' method='post'>
    <p>kleur</p>
    <input type='radio' id='12'> <label for='12'>rood</label> <br>
    <input type='radio' id='24'> <label for='24'>zwart</label> <br>
    <input type='radio' id='36'> <label for='36'>blauw</label> <br>
    <input type='radio' id='48'> <label for='48'>wit</label>
    </form>";
    echo "<div class='article__links'>";
    echo "<a class='article__links--link' href='index.php?page=shop'><img src='' alt='pijltje'>Terug naar shop</a>";
    echo "<a class='article__links--link' href='index.php?page=mandje'>In winkelmandje</a>";
    echo "</div>";
    echo "</section>";

  }else{
  echo "<section class='article'>";
  echo "<h2 class='article__title'> " . $product['name'] ."</h2>";
  echo "<img class='article__img' src='' alt='product foto'>";
  echo "<div class='article__text'>";
  echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
  echo " <p class='article__text--description'>" . $product['description'] . "</p>";
  echo "</div>";
  echo "<p class='article__text--price'>" . $product['price'] . " euro</p>";
  echo "<div class='article__links'>";
  echo "<a class='article__links--link' href='index.php?page=shop'><img src='' alt='pijltje'>Terug naar shop</a>";
  echo "<a class='article__links--link' href='index.php?page=mandje'>In winkelmandje</a>";
  echo "</div>";
  echo "</section>";
  }?>



