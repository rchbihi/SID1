<?php

require_once('Compte.php'); 

public class Travaux{
	// attributs de la classe 
	private $_auteur; 
	private $_titre; 
	private $_date_publication;  
	private $_lien; 
	private $_document;  




	//constructeur


	/** 
*Ceci est le constructeur de la classe Travaux  
*@author Noura ELMOUSSA  
*@param $auteur désigne l'auteur du travail
*@param $titre désigne le titre du travail 
*@param $date_publication désigne la date de publication du travail
*@param $lien désigne le lien lié au travail
*@param $document désigne le document lié au travail
*/ 

	public function __construct($auteur,$titre,$date_publication,$lien,$document){
		$this->_auteur=$auteur; 
		$this->_titre=$titre; 
		$this->_date_publication=$date_publication; 
		$this->_lien=$lien; 
		$this->_document=$document; 
	}




	//methodes de la classe 


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre Travail  et Compte:: un travail peut concerner un ou plusieurs compte 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }

/** 
*Getters 
*@author Noura ELMOUSSA  
*@return $_auteur désigne l'auteur du travail
*/ 


	public function get_auteur(){ return($this->_auteur); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_titre désigne le titre du travail 
	*/
	public function get_titre(){ return($this->_titre); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_date_publication désigne la date de publication du travail
	*/
	public function get_date_publication(){ return($this->_date_publication); }
	/**
	*@author Noura ELMOUSSA  
	*@return  $_lien désigne le lien lié au travail
	*/
	public function get_lien(){ return($this->_lien); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_document désigne le document lié au travail 
	*/
	public function get_document(){ return($this->_document); }
	

/** 
*Setters  
*@author Noura ELMOUSSA 
*@param $auteur désigne l'auteur du travail
*/ 



	public function set_auteur($auteur){ $this->_auteur=$auteur; }
	/**
	*@author Noura ELMOUSSA 
	*@param $titre désigne le titre du travail 
	*/
	public function set_titre($titre){ $this->_titre=$titre; }
	/**
	*@author Noura ELMOUSSA 
	*@param $date_publication désigne la date de publication du travail
	*/
	public function set_date_publication($date_publication){ $this->_date_publication=$date_publication; }
	/**
	*@author Noura ELMOUSSA 
	*@param $lien désigne le lien lié au travail
	*/
	public function set_lien($lien){ $this->_lien=$lien; }
	/**
	*@author Noura ELMOUSSA 
	*@param $document désigne le document lié au travail
	*/
	public function set_document($document){ $this->_document=$document; }

}
?>

