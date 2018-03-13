<?php

require_once 'Modele/modele.php';
require_once 'Vue/Vue.php';

class ControleurAccueil
{
	private $billet;

	public function __construct()
	{
		$this->billet = new modele();
	}

	//affiche la liste de tous les billets du blog
	public function accueil()
	{
		$billets = $this->billet->getBillets();
		$vue = new Vue("Accueil");
		$vue->generer(array('billets' => $billets));
	}
}

?>