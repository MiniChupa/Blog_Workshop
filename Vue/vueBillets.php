 <?php $this->titre = 'Mon Blog'; ?>

<?php foreach ($billetId as $billet): 
	var_dump($billet);
?>
  <article>
    <header>
      <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
      <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>
