<?php

require_once('Document.php');
require_once('Categorie.php');
public class Categorie{
	// attributs de la classe 
	private $_id_local_cat; 
	private $_nom_cat; 




	//constructeur

	/** 
*Ceci est le constructeur de la classe Categorie
*@author Noura ELMOUSSA  
*@param $id_local_cat designe l'identifiant de la categorie  
*@param $nom_cat désigne le nom de la catégorie  
*/ 

	public function __construct($id_local_cat,$nom_cat){
		$this->$_id_local_cat=$id_local_cat; 
		$this->$_nom_cat=$nom_cat; 

	}




	//methodes de la classe 

			/** ASSOCIATIONS *********************************************************************/
	/**1*/
	/**
*Il existe une relation 0..* entre Categorie et Document :: une categorie peut 
*comporter 0 ou plusieurs documents 
*@author Noura ELMOUSSA 
*@return id_local_document
 */
	public function  get_document(){retrun($id_local_document); }

/**2*/
/**
*Il existe une relation 1..1 entre Categorie et Catgorie :: une categorie fille 
*peut appartenir a une et une seule categorie mere 
*@author Noura ELMOUSSA 
*@return id_local_categorie
 */
	public function  get_document(){retrun($id_local_categorie); }

// la reflexivite est ds les deux sens cmt modeliser l'autre sens ?? 


		/** 
*Les getters 
*@author Noura ELMOUSSA  
*@return $_id_local_cat designe l'identifiant de la categorie  
*
*/ 

	public function get_id_local_cat(){ return($this->_id_local_cat; }
		/**
		*@author Noura ELMOUSSA  
		**@return $_nom_cat désigne le nom de la catégorie  
		*/
	public function get_nom_cat(){ return($this->_nom_cat); }



/** 
*Les setters 
*@author Noura ELMOUSSA  
*@param $id_local_cat designe l'identifiant de la categorie  
*/ 


	public function set_id_local_cat($id_local_cat){ $this->_id_local_cat=$id_local_cat; }

	/**
	*@author Noura ELMOUSSA  
	*@param $nom_cat désigne le nom de la catégorie  
	*/
	public function set_nom_cat($nom_cat){ $this->_nom_cat=$nom_cat; }

}
?>

