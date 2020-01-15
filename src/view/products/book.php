<section class="books">
<div class="title__wrapper">
  <h2 class="section__title" >Kies je boek</h2>
  </div>
  <p class="books__explain" >Prijs: € 12,99 zonder code - € 4,99 met code - € 1,99 e-book versie</p>
<div class="book-wrapper">
<?php foreach($books as $book):?>
<article class="books__book">
<img class="books__book--img" src="../assets/boek/<?php echo $book['name'] ?>.png" alt="foto boek" >
<div class="books__book--wrapper">
<p class="books__book--autor book"> <?php echo $book['author'] ?></p>
  <h3 class="books__book--title book"><?php echo $book['name'] ?></h3>
  <p class="books__book--text book"><?php echo $book['description'] ?></p>
  <a class="books__book--order book" href="index.php?page=product&id=<?php echo $book['id'] ?>"><img class="pijltje" src="../assets/pijltje.svg" alt="pijltje" width="20" > Bestel</a>
  </div>
</article>
<?php endforeach;?>
</div>
</section>
