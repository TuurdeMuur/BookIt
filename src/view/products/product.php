
<?php if ($product['name'] == "papieren versie") {
  echo "<section class='article'>";
  echo "<div class='title__wrapper'>
  <h2 class='section__title' >" . $product['name'] ."</h2>
  </div>";
  echo "<div class='article__wrapper'>";
  echo "<img class='article__img' src='../assets/" . $product['img'] . ".png' alt='product foto'>";
  echo "<div class='article__text'>";
  echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
  echo " <p class='article__text--description'>" . $product['description'] . "</p>";
  echo "<form action='index.php?page=mandje' method='post'>
  <input type='radio' checked='checked' name='product_id' value='41' id='12'> <label for='12'>periode 12 maand: 15,95 euro/maand</label> <br>
  <input type='radio' name='product_id' value='42' id='24'> <label for='24'>periode 24 maanden: 14,36 euro/maand</label> <br>
  <input type='radio' name='product_id' value='43' id='36'> <label for='36'>periode 36 maanden: 12,76 euro/maand</label>
  <button class='product__wrapper--text-button' type='submit' name='action' value='add'>in winkelwagentje</button>
  </form>";
  echo "</div>";
  echo "</div>";
  echo "<div class='article__links'>";
  echo "<a class='article__links--link' href='index.php?page=shop'><img src='../assets/pijltje.svg' alt='pijltje' width='20'>Terug naar shop</a>";
  echo "</div>";
  echo "</section>";

  }elseif ($product['name'] == "digitale versie") {
    echo "<section class='article'>";
    echo "<div class='title__wrapper'>
  <h2 class='section__title' >" . $product['name'] ."</h2>
  </div>";
    echo "<div class='article__wrapper'>";
    echo "<img class='article__img' src='../assets/" . $product['img'] . ".png' alt='product foto'>";
    echo "<div class='article__text'>";
    echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
    echo " <p class='article__text--description'>" . $product['description'] . "</p>";
    echo "<form action='index.php?page=mandje' method='post'>
    <input type='radio' checked='checked'  name='product_id' value='44' id='12'> <label for='12'>periode 12 maand: 15,95 euro/maand</label> <br>
    <input type='radio' name='product_id' value='45' id='24'> <label for='24'>periode 24 maanden: 14,36 euro/maand</label> <br>
    <input type='radio' name='product_id' value='46' id='36'> <label for='36'>periode 36 maanden: 12,76 euro/maand</label>
    <button class='product__wrapper--text-button' type='submit' name='action' value='add'>in winkelwagentje</button>
    </form>";
    echo "</div>";
    echo "</div>";
    echo "<div class='article__links'>";
    echo "<a class='article__links--link' href='index.php?page=shop'><img src='../assets/pijltje.svg' alt='pijltje' width='20'>Terug naar shop</a>";
    echo "</div>";
    echo "</section>";

  }elseif ($product['name'] == "mini boekenlicht"){
    echo "<section class='article'>";
    echo "<div class='title__wrapper'>
    <h2 class='section__title' >" . $product['name'] ."</h2>
    </div>";
    echo "<div class='article__wrapper'>";
    echo "<img class='article__img' src='../assets/" . $product['img'] . ".png' alt='product foto'>";
    echo "<div class='article__text'>";
    echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
    echo " <p class='article__text--description'>" . $product['description'] . "</p>";
    echo "<form action='index.php?page=mandje' method='post'>
    <input type='radio' checked='checked' name='product_id' value='38' id='12'> <label for='12'>rood</label> <br>
    <input type='radio' name='product_id' value='39' id='24'> <label for='24'>groen</label> <br>
    <input type='radio' name='product_id' value='40' id='36'> <label for='36'>blauw</label>
    <button class='product__wrapper--text-button' type='submit' name='action' value='add'>in winkelwagentje</button>
    </form>";
    echo "</div>";
    echo "</div>";
    echo "<div class='article__links'>";
    echo "<a class='article__links--link' href='index.php?page=shop'><img src='../assets/pijltje.svg' alt='pijltje' width='20'>Terug naar shop</a>";
    echo "</div>";
    echo "</section>";

  }elseif ($product['name'] == "leeslichtje retro "){
    echo "<section class='article'>";
    echo "<div class='title__wrapper'>
    <h2 class='section__title' >" . $product['name'] ."</h2>
    </div>";
    echo "<div class='article__wrapper'>";
    echo "<img class='article__img' src='../assets/" . $product['img'] . ".png'>";
    echo "<div class='article__text'>";
    echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
    echo " <p class='article__text--description'>" . $product['description'] . "</p>";
    echo "<form action='index.php?page=mandje' method='post'>
    <input name='product_id' checked='checked' value='34' type='radio' id='12'> <label for='12'>rood</label> <br>
    <input name='product_id' value='35' type='radio' id='24'> <label for='24'>zwart</label> <br>
    <input name='product_id' value='36' type='radio' id='36'> <label for='36'>blauw</label> <br>
    <input name='product_id' value='37' type='radio' id='48'> <label for='48'>wit</label>
    <button class='product__wrapper--text-button' type='submit' name='action' value='add'>in winkelwagentje</button>
    </form>";
    echo "</div>";
    echo "</div>";
    echo "<div class='article__links'>";
    echo "<a class='article__links--link' href='index.php?page=shop'><img src='../assets/pijltje.svg' alt='pijltje' width='20'>Terug naar shop</a>";
    echo "</div>";
    echo "</section>";

  }elseif ($product['kind'] == "boek"){
    echo "<section class='article'>";
    echo "<div class='title__wrapper'>
    <h2 class='section__title' >" . $product['name'] ."</h2>
    </div>";
    echo "<div class='article__wrapper'>";
    echo "<img class='article__img' src='../assets/boek/" . $product['img'] . ".png' alt='product foto'>";
    echo "<div class='article__text'>";
    echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
    echo " <p class='article__text--description'>" . $product['description'] . "</p>";
    echo "<form action='index.php?page=mandje' method='post'>
    <input name='product_id' checked='checked' type='radio' id='12' value=" . $product['e-id'] . "> <label for='12'>e-reader versie: 1,99 euro</label> <br>
    <input name='product_id' type='radio' id='24' value=" . $product['id'] . "> <label for='24'>hardcase versie: 12,99 euro</label> <br>
    <button class='product__wrapper--text-button' type='submit' name='action' value='add'>in winkelwagentje</button>
    </form>";
    echo "</div>";
    echo "</div>";
    echo "<div class='article__links'>";
    echo "<a class='article__links--link' href='index.php?page=shop'><img src='../assets/pijltje.svg' width='20' alt='pijltje'>Terug naar shop</a>";
    echo "</div>";
    echo "</section>";

  }else{
  echo "<section class='article'>";
  echo "<div class='title__wrapper'>
  <h2 class='section__title' >" . $product['name'] ."</h2>
  </div>";
  echo "<div class='article__wrapper'>";
  echo "<img class='article__img' src='../assets/" . $product['img'] . ".png' alt='product foto'>";
  echo "<div class='article__text'>";
  echo "<p class='article__text--autor'>" . $product['author'] . "</p>";
  echo " <p class='article__text--description'>" . $product['description'] . "</p>";
  echo "<p class='article__text--price'>" . $product['price'] . " euro</p>";
  echo "<div class='article__links'>";
  echo "<a class='article__links--link' href='index.php?page=shop'>";
  echo "<form method='post' action='index.php?page=mandje'>";
  echo "<input type='hidden' name='product_id' value=" . $product['id'] . " />";
  echo "<button class='product__wrapper--text-button' type='submit' name='action' value='add'>in winkelwagentje</button>";
  echo "</form>";
  echo "</div>";
  echo "</div>";
  echo "<div class='article__links'>";
  echo "<a class='article__links--link' href='index.php?page=shop'><img src='../assets/pijltje.svg' width='20' alt='pijltje'>Terug naar shop</a>";
  echo "</div>";
  echo "</section>";
  }?>





