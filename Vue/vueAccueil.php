 <?php $this->titre = 'Mon Blog'; ?>

<?php foreach ($billets as $billet): ?>
  <article>
    <header>

     <a href="<?= "index.php?action=billet&idBillet=" . $billet['id'] ?>">
        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
     </a>

      <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
      <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
  </article>
  <hr />
<?php endforeach; ?>