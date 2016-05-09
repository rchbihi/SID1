<?php
require_once('Administrateur.php'); 

public class Actualite{
	// attributs de la classe 
	private $_titre_actualite; 
	private $_description_actualite; 
	private $_texte_actualite;  
	private $_image_actualite;  




	//constructeur

/** 
*Ceci est le constructeur de la classe Actualité
*@author Noura ELMOUSSA  
*@param $titre_actualite désigne le titre de l'événement  de l'objet courant 
*@param $description_actualite désigne la description liée à l'actualité  de l'objet courant 
*@param $texte_actualite désigne le texte liée à l'actualité  de l'objet courant  de l'objet courant  
*@param $image_actualite désigne l'image liée à l'actualité  de l'objet courant 
*@return 
*/ 


	public function __construct($titre_actualite,$description_actualite,$texte_actualite,$image_actualite){
		$this->_titre_actualite=$titre_actualite; 
		$this->_description_actualite=$description_actualite; 
		$this->_texte_actualite=$texte_actualite; 
		$this->_image_actualite=$image_actualite; 
	}



	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Actualite et administrateur :: une actualite concerne 
*un et un seul administrateur 
*@author Noura ELMOUSSA 
*@return id_administrateur 
 */
	public function  get_administrateur(){retrun($id_local_administrateur); }


	//methodes de la classe 

	/** 
*les getters*************************************************************************** 
*@author Noura ELMOUSSA  
*@return $_titre_actualite désigne le titre de l'événement  de l'objet courant 
*/ 

	public function get_titre_actualite(){ return($this->_titre_actualite); }
/**
*@author Noura ELMOUSSA  
*@return $_description_actualite désigne la description liée à l'actualité  de l'objet courant 
*/
	public function get_description_actualite(){ return($this->_description_actualite); }
/**
*@author Noura ELMOUSSA  
*@return $_texte_actualite désigne le texte liée à l'actualité  de l'objet courant  de l'objet courant  
*/
	public function get_texte_actualite(){ return($this->_texte_actualite); }
/**
*@author Noura ELMOUSSA  
*@return $_image_actualite désigne l'image liée à l'actualité  de l'objet courant 
*/
	public function get_image_actualite(){ return($this->_image_actualite); }


	


/** 
*Les setters***************************************************************************  
*@author Noura ELMOUSSA  
*@param $titre_actualite désigne le titre de l'événement 
*/ 


	public function set_titre_actualite($titre_actualite){ $this->_titre_actualite=$titre_actualite; }

/**
*@author Noura ELMOUSSA  
*@param $description_actualite désigne la description liée à l'actualité 
*/
	public function set_description_actualite($description_actualite){ $this->_description_actualite=$description_actualite; }

/**
*@author Noura ELMOUSSA  
*@param $texte_actualite désigne le texte liée à l'actualité  
*/	
	public function set_texte_actualite($texte_actualite){ $this->_texte_actualite=$texte_actualite; }
/**
*@author Noura ELMOUSSA  
*@param $image_actualite désigne l'image liée à l'actualité  
*/
	public function set_image_actualite($image_actualite){ $this->_image_actualite=$image_actualite; }

}
?>

