<?php

require_once('Post.php'); 
require_once('Compte.php'); 
public class Mention{
	// attributs de la classe 
	private $_jaime; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Mention
*@author Noura ELMOUSSA  
*@param $jaime désigne la mention attribuée 
*/ 

	public function __construct($jaime){
		$this->$_jaime=$jaime; 
		

	}




	//methodes de la classe 

/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Post  et Mention:: une mention concerne un et un seul post
*@return id_local_post
 */
	public function  get_post(){retrun($id_local_post); }


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre CV  et compte:: un Cv concerne un et un seul cv 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_jaime désigne la mention attribuée 
*/ 

	public function get_jaime(){ return($this->_jaime); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA     
*@return $jaime désigne la mention attribuée 
*/ 
	public function set_jaime($jaime){ $this->_jaime=$jaime; }

}
?>

