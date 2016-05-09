<?php

require_once('CV.php');

public class Competence{
	// attributs de la classe 
	private $_nom_competence; 
	private $_public; 




	//constructeur

	/** 
*Ceci est le constructeur de la classe comptence
*@author Noura ELMOUSSA  
*@param $nom_competence designe le nom de la competence  
*@param $public designe la portée de la competence  
*/ 

	public function __construct($nom_competence,$public){
		$this->$_nom_competence=$nom_competence; 
		$this->$_public=$public; 

	}


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre Competence  et CV:: une competence peut concerner plusierus CV 
*@author Noura ELMOUSSA 
*@return id_local_cv 
 */
	public function  get_cv(){retrun($id_local_cv); }


	//methodes de la classe 

		/** 
*Les getters 
*@author Noura ELMOUSSA  
*@return $_nom_competence designe le nom de la competence  
*/ 

	public function get_nom_competence(){ return($this->_nom_competence; }

/**
*@author Noura ELMOUSSA  
*@return $_public designe la portée de la competence  
*/
	public function get_public(){ return($this->_public); }



/** 
*Les setters 
*@author Noura ELMOUSSA  
*@param $nom_competence designe le nom de la competence  
*/ 


	public function set_nom_competence($nom_competence){ $this->_nom_competence=$nom_competence; }

/**
*@author Noura ELMOUSSA  
*@param $public designe la portée de la competence  
*/
	public function set_public($public){ $this->_public=$public; }

}
?>

