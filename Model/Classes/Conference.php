<?php

require_once('Travaux.php'); 
public class Conference extends Travaux{
	// attributs de la classe 
	private $_nom_conference; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Conference
*@author Noura ELMOUSSA  
*@param $nom_conference désigne le nom de la conférence  
*/ 

	public function __construct($nom_conference,$auteur,$titre,$date_publication,$lien,$document){
		parent::__construct($option=null,$auteur,$titre,$date_publication,$lien,$document); 
		$this->$_nom_conference=$nom_conference; 
		

	}




	//methodes de la classe 


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_nom_conference désigne le nom de la conférence  
*/ 

	public function get_nom_conference(){ return($this->_nom_conference); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA     
*@param $nom_conference désigne le nom de la conférence  
*/ 
	public function set_nom_conference($nom_conference){ $this->_nom_conference=$nom_conference; }

}
?>

