<?php

require_once('Compte.php');
require_once('Document.php'); 
require_once('Signalisation.php'); 
require_once('Mention.php'); 
require_once('Commentaire.php'); 
public class Post{
	// attributs de la classe 
	private $_text; 
	private $_image; 
	private $_lien;  




	//constructeur

	/** 
*Ceci est le constructeur de la classe Post
*@author Noura ELMOUSSA  
*@param $text désigne le texte lié au post
*@param $image désigne l'image liée au post 
*@param $lien désigne le lien lié au post
*/ 

	public function __construct($text,$image,$lien){
		$this->$_text=$text; 
		$this->$_image=$image;
		$this->$_lien=$lien;  

	}




	//methodes de la classe 


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Compte  et Post:: un post concerne un et un seul compte 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Document   et Post:: un post concerne un et un seul doc    
*@author Noura ELMOUSSA 
*@return id_local_document 
 */
	public function  get_document(){retrun($id_local_document); }

/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre signalisation  et Post :: un post peut etre concerne par 0 ou plusierus signalisation 
*@author Noura ELMOUSSA 
*@return id_local_signalisation 
 */
	public function  get_signalisation(){retrun($id_local_signalisation); }

	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre commentaire  et Post :: un post peut etre concerne par 0 ou plusierus commentaire 
*@author Noura ELMOUSSA 
*@return id_local_commentaire 
 */
	public function  get_commentaire(){retrun($id_local_commentaire); }

	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre mention  et Post :: un post peut etre concerne par 0 ou plusierus mention 
*@author Noura ELMOUSSA 
*@return id_local_mention 
 */
	public function  get_mention(){retrun($id_local_mention); }




		/** 
*Les getters 
*@author Noura ELMOUSSA  
*@return $_text désigne le texte lié au post
*/ 

	public function get_text(){ return($this->_text); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_image désigne l'image liée au post 
	*/
	public function get_image(){ return($this->_image); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_lien désigne le lien lié au post 
	*/
	public function get_lien(){ return($this->_lein); }
/** 
*Les setters 
*@author Noura ELMOUSSA  
*@param $_text désigne le texte lié au post
*/ 


	public function set_text($text){ $this->_text=$text; }
	/**
	*@author Noura ELMOUSSA  
	*@param $_image désigne l'image liée au post 
	*/
	public function set_image($image){ $this->_image=$image; }
	/**
	*@author Noura ELMOUSSA  
	*@param $_lien désigne le lien lié au post 
	*/
	public function set_lien($lien){ $this->_lien=$lien; }

}
?>

