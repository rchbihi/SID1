<?php

require_once('Travaux.php'); 
public class Journal extends Travaux{
	// attributs de la classe 
	private $_nom_journal; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Journal
*@author Noura ELMOUSSA  
*@param $nom_journal est le nom attribué au journal 
*/ 

	public function __construct($nom_journal,$auteur,$titre,$date_publication,$lien,$document){
		parent:: __construct($auteur,$titre,$date_publication,$lien,$document)
		$this->$_nom_journal=$nom_journal; 
		

	}




	//methodes de la classe 


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_nom_journal est le nom attribué au journal 
*/ 

	public function get_nom_journal(){ return($this->_nom_journal); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA     
*@param $nom_journal est le nom attribué au journal 
*/ 
	public function set_nom_journal($nom_journal){ $this->_nom_journal=$nom_journal; }

}
?>

