<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Vue/Vue.php';

class Routeur
{
	private $ctrlAccueil;
	private $ctrlBillet;

	public function __construct()
	{
		$this->ctrlAccueil = new ControleurAccueil();
		$this->ctrlBillet = new ControleurBillet();
	}

	//traite une requête entrante
	public function routerRequete()
	{
		try {
	      if (isset($_GET['action'])) {
	        if ($_GET['action'] == 'billet') {
	          if (isset($_GET['idBillet'])) {
	            $idBillet = intval($_GET['idBillet']);
	            if ($idBillet != 0) {
	              $this->ctrlBillet->billet($idBillet);
	            }
	            else
	              throw new Exception("Identifiant de billet non valide");
	          }
	          else
	            throw new Exception("Identifiant de billet non défini");
	        }
	        else
	          throw new Exception("Action non valide");
	      }
	      else {  // aucune action définie : affichage de l'accueil
	        $this->ctrlAccueil->accueil();
	      }
	    }
	    catch (Exception $e) {
	      $this->erreur($e->getMessage());
	    }
	}

	private function erreur($msgErreur)
	{
		require 'Controleur/Routeur.php';
		$vue = new Vue("Erreur");
		$vue->generer(array('msgErreur' => $msgErreur));
	}
}