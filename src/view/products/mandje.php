<section>
<div class="title__wrapper">
  <h2 class="section__title" >Winkelmandje</h2>
  </div>
<?php if (!empty($_SESSION['cart'])){ ?>
  <form action="index.php?page=mandje" method="POST" id="cartform" class="form">
                <?php
                    $total = 0;
                     foreach($_SESSION['cart'] as $item) :
                     $itemTotal = $item['product']['price'] * $item['quantity'];
                    $total += $itemTotal;
                     ?>
                <div class="cart__product">
                    <p class="cart__product--title"><?php echo $item['product']['name'];?></p>
                    <button type="submit" class="cart__product--remove" name="remove" value="<?php echo $item['product']['id'];?>">x</button>
                    <div class="cart__product--specifics">
                      <div class="style-wrapper">
                      <p class="cart__product--specific cart-prijs cart-prijs__1"  ><?php echo $item['product']['price']?></p><p class="eur">EUR</p>
                      </div>
                        <p>x</p><input type="text" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="cart__product--specific hoeveelheid">
                        <p class="cart__product--specific cart-prijs cart-prijs__totaal"><?php echo $itemTotal?> EUR </p>
                     </div>
                </div>
                <?php endforeach;  ?>
                    <div class="cart__totaal">
                    <p class="cart__totaal--totaal">totale prijs: <?php echo  $total?> EUR</p>
                    <button type="submit" id="update-cart" class="cart__totaal--update" name="action" value="update">update winkelwagentje</button>
                    </div>
                    </form>
                    <?php }else{ ?>
                      <p class="note note-mand">Oeps! er zit voorlopig niks in je mandje, haast je naar onze shop en ontdenk onze producten</p>
                      <?php };?>
                      <div class="mandje__links">

  <a  class="mandje-terug" href="index.php?page=shop"> <img src="../assets/pijltje.svg" alt="pijltje" width="20"> Terug naar shop</a>
  <?php if (!empty($_SESSION['cart'])):?>
  <a class="mandje__links--form" href="index.php?page=form">afrekenen</a>
  <?php endif?>
  </div>
</section>
