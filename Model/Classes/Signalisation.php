<?php

require_once('Post.php'); 
require_once('Compte.php'); 
public class Signalisation{
	// attributs de la classe 
	private $_motif; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Signalisation
*@author Noura ELMOUSSA  
*@param $motif designe le motif de la signalisation
*/ 

	public function __construct($motif){
		$this->$_motif=$motif; 
		

	}




	//methodes de la classe 
	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Compte  et Signalisation:: une signalisation concerne un et un seul compte 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Post  et signalisation :: une signalisation  concerne un et un seul post 
*@author Noura ELMOUSSA 
*@return id_local_post 
 */
	public function  get_post (){retrun($id_local_post ); }


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_motif designe le motif de la signalisation
*/ 

	public function get_motif(){ return($this->_motif); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA     
*@param $motif designe le motif de la signalisation
*/ 
	public function set_motif($motif){ $this->_motif=$motif; }

}
?>

