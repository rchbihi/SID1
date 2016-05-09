<?php

require_once('Document.php'); 
public class Mot_cle{
	// attributs de la classe 
	private $_mot_cle; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Mot_cle
*@author Noura ELMOUSSA  
*@param $mot_cle désigne un mot clé attribué à un document
*/ 

	public function __construct($mot_cle){
		$this->$_mot_cle=$mot_cle; 
		

	}




	//methodes de la classe 


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre document et mot_cle::un mot cle concerne un et un seul document 
*@author Noura ELMOUSSA 
*@return id_local_mot_cle
 */
	public function  get_mot(){retrun($id_local_mot); }

	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_mot_cle désigne un mot clé attribué à un document
*/ 

	public function get_mot_cle(){ return($this->_mot_cle); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA   
*@param $mot_cle désigne un mot clé attribué à un document
*/ 
	public function set_mot_cle($mot_cle){ $this->_mot_cle=$mot_cle; }

}
?>

