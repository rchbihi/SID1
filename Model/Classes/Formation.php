<?php
require_once('CV.php'); 
public class Formation{
	// attributs de la classe 
	private $_diplome; 
	private $_etablissement; 
	private $_annee_obtention;  
	private $_mention; 
	private $_public;  




	//constructeur


	/** 
*Ceci est le constructeur de la classe Formation 
*@author Noura ELMOUSSA  
*@param $diplome désigne le diplome de la personne 
*@param $etablissement  désigne l'etablissement d'où le diplome a été livrer
*@param $annee_obtention désigne l'annee dans laquelle le diplome a été obtenu
*@param $mention désigne la mention avec laquelle le diplome a été livrer
*@param $public désigne la portée de la Formation 
*/ 

	public function __construct($diplome,$etablissement,$annee_obtention,$mention,$public){
		$this->_diplome=$diplome; 
		$this->_etablissement=$etablissement; 
		$this->_annee_obtention=$annee_obtention; 
		$this->_mention=$mention; 
		$this->_public=$public; 
	}




	//methodes de la classe 
	/**
** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre cv  et formation:: un cv est concerne par 0 ou plusieur formation 
*@author Noura ELMOUSSA 
*@return id_local_cv
 */
	public function  get_cv(){retrun($id_local_cv); }

/** 
*Getters de la classe Formation 
*@author Noura ELMOUSSA  
*@return $_diplome désigne le diplome de la personne de l'objet courant 
*/ 


	public function get_diplome(){ return($this->_diplome); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_etablissement  désigne l'etablissement d'où le diplome a été livrer de l'objet courant
	*/
	public function get_etablissement(){ return($this->_etablissement); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_annee_obtention désigne l'annee dans laquelle le diplome a été obtenu de l'objet courant
	*/
	public function get_annee_obtention(){ return($this->_annee_obtention); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_mention désigne la mention avec laquelle le diplome a été livrer de l'objet courant
	*/
	public function get_mention(){ return($this->_mention); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_public désigne la portée de la Formation de l'objet courant 
	*/
	public function get_public(){ return($this->_public); }
	

/** 
*Setters de la classe Formation 
*@author Noura ELMOUSSA 
*@param $diplome désigne le diplome de la personne 
*/ 



	public function set_diplome($diplome){ $this->_diplome=$diplome; }
	/**
	*@author Noura ELMOUSSA 
	*@param  $etablissement  désigne l'etablissement d'où le diplome a été livrer 
	*/
	public function set_etablissement($etablissement){ $this->_etablissement=$etablissement; }
	/**
	*@author Noura ELMOUSSA 
	*@param  $annee_obtention désigne l'annee dans laquelle le diplome a été obtenu 
	*/
	public function set_annee_obtention($annee_obtention){ $this->_annee_obtention=$annee_obtention; }
	/**
	*@author Noura ELMOUSSA 
	*@param  $mention désigne la mention avec laquelle le diplome a été livrer  
	*/
	public function set_mention($mention){ $this->_mention=$mention; }
	/**
	*@author Noura ELMOUSSA 
	*@param  $public désigne la portée de la Formation 
	*/
	public function set_public($public){ $this->_public=$public; }

}
?>

