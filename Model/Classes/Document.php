<?php

require_once('Categorie.php'); 
require_once('Mot_cle.php'); 
require_once('Post.php');
require_once('Compte.php'); 
require_once('Type_compte.php'); 


public class Document{
	// attributs de la classe 
	private $_id_local_doc; 
	private $_nom_doc; 
	private $_description_doc;  
	private $_type_doc;  




	//constructeur

/** 
*Ceci est le constructeur de la classe Document
*@author Noura ELMOUSSA  
*@param $id_local_doc désigne l'identifiant du document 
*@param $nom_doc_actualite désigne le nom du document 
*@param $description_doc désigne la description du document  
*@param $type_doc désigne le type de document
*/ 


	public function __construct($id_local_doc,$nom_doc,$description_doc,$type_doc){
		$this->_id_local_doc=$id_local_doc; 
		$this->_nom_doc=$nom_doc; 
		$this->_description_doc=$description_doc; 
		$this->_type_doc=$type_doc; 
	}




	//methodes de la classe 



	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre categorie  et document:: un document appartient a une et une seule categorie
*@author Noura ELMOUSSA 
*@return id_local_categorie
 */
	public function  get_categorie(){retrun($id_local_categorie); }


	/**
*Il existe une relation 0..* entre mot_cle et document:: un docuemtn peut etre concerne par à ou plusieurs mot_cle
*@author Noura ELMOUSSA 
*@return id_local_mot_cle
 */
	public function  get_mot(){retrun($id_local_mot_cle); }

/**
*Il existe une relation 1..1 entre post et document:: un docuemtn peut etre concerne par un et un seul post
*@author Noura ELMOUSSA 
*@return id_local_post
 */
	public function  get_post(){retrun($id_local_post); }

/**
*Il existe une relation 1..1 entre compte et document:: un docuemtn peut etre concerne par un et un seul compte
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }

/**
*Il existe une relation 0..1 entre compte et document:: un docuemtn peut etre concerne par 0 ou 1 type de  compte
*@author Noura ELMOUSSA 
*@return id_local_type_compte
 */
	public function  get_type_compte(){retrun($id_local_type_compte); }
	





	/** 
*les getters 
*@author Noura ELMOUSSA  
*@return $_id_local_doc désigne l'identifiant du document 
*/ 

	public function get_id_local_doc(){ return($this->_id_local_doc); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_nom_doc_actualite désigne le nom du document 
	*/
	public function get_nom_doc(){ return($this->_nom_doc); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_description_doc désigne la description du document  
	*/
	public function get_description_doc(){ return($this->_description_doc); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_type_doc désigne le type de document
	*/
	public function get_type_doc(){ return($this->_type_doc); }
	


/** 
*Les setters 
*@author Noura ELMOUSSA  
*@param $id_local_doc désigne l'identifiant du document 
*/ 


	public function set_id_local_doc($id_local_doc){ $this->_id_local_doc=$id_local_doc; }
	/**
	*@author Noura ELMOUSSA  
	*@param $nom_doc_actualite désigne le nom du document 
	*/
	public function set_nom_doc($nom_doc){ $this->_nom_doc=$nom_doc; }
	/**
	*@author Noura ELMOUSSA  
	*@param $description_doc désigne la description du document  
	*/
	public function set_description_doc($description_doc){ $this->_description_doc=$description_doc; }
	/**
	*@author Noura ELMOUSSA  
	*@param $type_doc désigne le type de document
	*/
	public function set_type_doc($type_doc){ $this->_type_doc=$type_doc; }

}
?>

