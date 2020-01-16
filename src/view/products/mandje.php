<section>
<div class="title__wrapper">
  <h2 class="section__title" >Winkelmandje</h2>
  </div>
<?php if (!empty($_SESSION['cart'])){ ?>
  <form action="index.php?page=mandje" method="POST" id="cartform" class="form">
                <?php
                    $total = 0;
                     foreach($_SESSION['cart'] as $item) {
                     $itemTotal = $item['product']['price'] * $item['quantity'];
                    $total += $itemTotal;
                     ?>
                     <input type="hidden" name="quantity" value="<?php echo $item['quantity'];?>">
                     <input type="hidden" name="price" value=" €<?php echo money_format("%i", $itemTotal);?>">
                     <input type="hidden" name="product" value="<?php echo $item['product']['name'];?>">
                <article class="cart__product">
                    <h3 class="cart__product--title"><?php echo $item['product']['name'];?></h3>
                    <button type="submit" class="cart__product--remove" name="remove" value="<?php echo $item['product']['id'];?>">x</button>
                    <div class="cart__product--specifics">
                        <p class="cart__product--specific cart-prijs"  ><span class="item_price"><?php echo money_format("%i", $item['product']['price']);?> EUR</span></p>
                        <input type="text" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="cart__product--specific hoeveelheid">
                        <p class="cart__product--specific cart-prijs cart-prijs__totaal"><?php echo money_format("%i", $itemTotal);?> EUR</p>
                     </div>
                </article>
                <?php  }  ?>
                    <div class="cart__totaal">
                    <p class="cart__totaal--totaal"><?php echo money_format("%i", $total);?> EUR</p>
                    <button type="submit" id="update-cart" class="cart__totaal--update" name="action" value="update">update winkelwagentje</button>
                    </form>
                    <?php }else{ ?>
                      <p>er zit voorlopig niks in je mandje</p>
                      <?php };?>
  <a  class="mandje-terug" href="index.php?page=shop"> <img src="../assets/pijltje.svg" alt="pijltje" width="20"> Terug naar shop</a>
</section>
