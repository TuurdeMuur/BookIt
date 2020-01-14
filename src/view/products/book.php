<section class="books">
<h2 class="books__title">Kies je boek</h2>
<p class="books__info"></p>
<?php foreach($books as $book):?>
<article class="books__book">
<img src="books__book--img" alt="foto boek">
<div class="wrapper">
<p class="books__book--autor"> <?php echo $book['author'] ?></p>
  <h3 class="books__book--title"><?php echo $book['name'] ?></h3>
  <p class="books__book--text"><?php echo $book['description'] ?></p>
  <a class="books__book--order" href=""><img src="" alt="" width="307" height="324"> Bestel</a>
  </div>
</article>
</section>

<?php endforeach;?>
