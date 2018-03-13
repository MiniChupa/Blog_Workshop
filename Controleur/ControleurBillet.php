<?php

require_once 'Modele/modele.php';
require_once 'Vue/Vue.php';

class ControleurBillet
{
	private $billet;

	public function __construct()
	{
		$this->billet = new modele();
	}

	//affiche les détails d'un billet
	public function billet($idBillet)
	{
		$billet = $this->billet->getBillet($idBillet);
		$vue = new Vue("Billets");
		$vue->generer(array('billet' => $billet));
	}
}

?>