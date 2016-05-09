<?php

require_once('Post.php');
require_once('Compte.php');
public class Commentaire{
	// attributs de la classe 
	private $_texte_commentaire;
	




		//constructeur

	/** 
*Ceci est le constructeur de la classe Commentaire
*@author Noura ELMOUSSA  
*@param $texte_commentaire désigne le texte du commentaire attribué à un post
*/ 

	public function __construct($texte_commentaire){
		$this->$_texte_commentaire=$texte_commentaire; 
		

	}


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre Commentaire  et POst:: un commentaire concerne un seul post  
*@author Noura ELMOUSSA 
*@return id_local_post 
 */
	public function  get_post(){retrun($id_local_post); }
	/**
*Il existe une relation 1..1 entre Commentaire  et compte:: un commentaire concerne un seul compte  
*@author Noura ELMOUSSA 
*@return id_local_compte 
 */
	public function  get_compte(){retrun($id_local_compte); }




//methodes de la classe 


	/** 
* les Getters
*@author Noura ELMOUSSA  
*@return $_texte_commentaire désigne le texte du commentaire attribué à un post
*/ 

	public function get_texte_commentaire(){ return($this->_texte_commentaire); }
	


	/** 
*les Setters
*@author Noura ELMOUSSA     
*@param $texte_commentaire désigne le texte du commentaire attribué à un post
*/ 
	public function set_texte_commenataire($texte_commentaire){ $this->_texte_commentaire=$texte_commentaire; }

}
?>



