<section class="checkout">
<div class="title__wrapper">
  <h2 class="section__title" >Mijn bestelling</h2>
  </div>
<form action="index.php" method="post" >
<input type="hidden" name="action" value="insertOrder">
<?php foreach($_SESSION['cart'] as $product): ?>
<input type="hidden" name="product" value="<?php echo $product['product']['id'] ?>">
<p class="order__name"></p>
<div class="order__hoeveelheid">
<p class="order__hoeveelheid--hoeveelheid" ><?php echo $product['product']['name'] ?></p>
<input class="order" type="text" name="quantity" value="(<?php echo $product['quantity'] ?>x)">
</div>
<?php endforeach ?>
                <div class="form__name section">
                    <div class="form__name--first wrapper">
                        <label class="form__name--title description " for="voornaam">Voornaam</label>
                        <span class="error"><?php if(!empty($errors['firstname'])){ echo $errors['firstname'];} ?></span>
                        <input class="input__name--field input" type="text" name="firstname" required value="<?php if(!empty($_POST['firstname'])){
                            echo $_POST['firstname'];
                        }?>">
                    </div>
                    <div class="form__name--last  wrapper">
                        <label class="form__name--title description" for="naam">Naam</label>
                        <span class="error"><?php if(!empty($errors['lastname'])){ echo $errors['lastname'];} ?></span>
                        <input type="text" name="lastname" class="input__name--field input" required value="<?php if(!empty($_POST['lastname'])){
                            echo $_POST['lastname'];
                        }?>">
                    </div>
                </div>
                <div class="form__mail section wrapper">
                    <label class=" description" for="mail">E-mail</label>
                    <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></span>
                    <input type="email" name="email" class="form__steet--mail input" required value="<?php if(!empty($_POST['email'])){
                            echo $_POST['email'];
                        }?>">
                </div>
                <p class="intersection">Adres</p>
                <div class="form__gemeente section wrapper">
                    <label class=" description" for="gemeente">Gemeente</label>
                    <span class="error"><?php if(!empty($errors['gemeente'])){ echo $errors['gemeente'];} ?></span>
                    <input type="text" name="gemeente" class="form__steet--mail input" required value="<?php if(!empty($_POST['gemeente'])){
                            echo $_POST['gemeente'];
                        }?>">
                </div>
                <div class="form__gemeente section wrapper">
                    <label class=" description" for="straat"> Straat + nr (+bus)</label>
                    <span class="error"><?php if(!empty($errors['straat'])){ echo $errors['straat'];} ?></span>
                    <input type="text" name="straat" class="form__steet--straat input" required value="<?php if(!empty($_POST['straat'])){
                            echo $_POST['straat'];
                        }?>">
                </div>
                <div class="form__gemeente section wrapper">
                    <label class=" description" for="postcode">Postcode</label>
                    <span class="error"><?php if(!empty($errors['postcode'])){ echo $errors['postcode'];} ?></span>
                    <input type="number" pattern="[0-9]{4}" name="postcode" class="form__steet--postcode input" required value="<?php if(!empty($_POST['postcode'])){
                            echo $_POST['gemeente'];
                        }?>">
                </div>

                <div class="levering">
                <p class="intersection">Leveringsadres (optioneel)</p>
                <div class="wrapper"><label class=" description" for="gemeente(2)">Gemeente</label>
                <input type="text" name="gemeente(2)" class="form__steet--mail input"></div>
                <div class="wrapper"><label class=" description" for="straat(2)">Straat + nr (+bus)</label>
                <input  type="text" name="straat(2)" class="form__steet--straat input"></div>
                <div class="wrapper">
                <label class=" description" for="postcode(2)">Postcode</label>
                <input type="number" pattern="[0-9]{4}" name="postcode(2)" class="form__steet--postcode input"></div>
                </div>

                <div class="form__betaling section">
                    <div class="wrapper">
                        <label class="form__betaling--label description" for="betaling ">Betalingswijze</label>
                        <span class="error"><?php if(!empty($errors['wijze'])){ echo $errors['wijze'];} ?></span>
                        <div class="form__betaling--wrapper">
                            <label for="visa" class="betaling-wrapper">
                                <input class="form__betaling--button input" id="visa" required type="radio"  name="wijze"
                                    value="visa" >
                                <img class="form__betaling--img" src="../assets/visa.svg" alt="visa logo" width="100">
                            </label>
                            <label for="paypal" class="betaling-wrapper">
                                <input class="form__betaling--button input" id="paypal" required type="radio" name="wijze"
                                    value="paypal">
                                <img class="form__betaling--img" src="../assets/paypal.svg" alt="paypal logo" width="100">
                            </label>
                            <label for="mistercash" class="betaling-wrapper">
                                <input class="form__betaling--button input" id="mistercash" required type="radio" name="wijze"
                                    value="mister cash">
                                <img class="form__betaling--img" src="../assets/mistercash.svg" alt="mister cash logo" width="100">
                            </label>
                        </div>
                    </div>

                <input class="form__submit section" type="submit" value="verzend" name="checkout" >
</form>

</section>
