<?php

class Vue
{
	private $fichier; //nom du fichier
	private $titre; //titre de l'article

	public function __construct($action)
	{
		$this->fichier = "Vue/Vue".$action.".php";
	}

	public function generer($donnees)
	{//choix de la vue
		$contenu = $this->genererFichier($this->fichier, $donnees);
		//utilisation du gabarit
		$vue = $this->genererFichier('Vue/gabarit.php', array('titre' => $this->titre, 'contenu' => $contenu));
		//renvoie de la vue au navigateur

		return $vue;
	}

	//Génère un fichier vue et renvoie le résultat obtenu
	private function genererFichier($fichier, $donnees)
	{
		if(file_exists($fichier))
		{
			extract($donnees);
			ob_start();
			require $fichier;
			return ob_get_clean();
		} else {
			throw new Exception("Fichier '$fichier' introuvable");
			
		}
	}
}