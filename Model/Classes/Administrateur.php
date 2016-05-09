<?php

require_once('Compte.php'); 
public class Administrateur extends Compte{
	// attributs de la classe 
	private $_id_local_administrateur; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Administrateur
*@author Noura ELMOUSSA  
*@param $id_local_administrateur désigne l'identifiant de l'administrateur 
*@return 
*/ 

	public function __construct($id_local_administrateur,$id_local_compte,$email_compte,$mot_de_passe_compte)){
		parent::__construct($option=null,$id_local_compte,$email_compte,$mot_de_passe_compte); 
		$this->$_id_local_administrateur=$id_local_administrateur; 
		

	}




	//methodes de la classe 


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_id_local_administrateur désigne  l'identifiant de l'administrateur
*/ 

	public function get_id_local_administrateur(){ return($this->_id_local_administrateur); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA  
*@param $id_local_administrateur désigne  l'identifiant de l'administrateur  
*/ 
	public function set_id_local_administrateur($id_local_administrateur){ $this->_id_local_administrateur=$id_local_administrateur; }

}
?>

