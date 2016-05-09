<?php

require_once('Travaux.php'); 
public class Brevet extends Travaux{
	// attributs de la classe 
	private $_date_depot; 
	 
	





	//constructeur

	/** 
*Ceci est le constructeur de la classe Brevet
*@author Noura ELMOUSSA  
*@param $date_depot désigne la date de depot du travail
*/ 

	public function __construct($date_depot,$auteur,$titre,$date_publication,$lien,$document){
		parent::__construct($auteur,$titre,$date_publication,$lien,$document); 
		$this->$_date_depot=$date_depot; 
		

	}




	
	//methodes de la classe 


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_date_depot désigne la date de depot du travail
*/ 

	public function get_date_depot(){ return($this->_date_depot); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA     
*@param $date_depot désigne la date de depot du travail
*/ 
	public function set_date_depot($date_depot){ $this->_date_depot=$date_depot; }

}
?>