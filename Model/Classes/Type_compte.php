<?php


require_once('Compte.php');
require_once('Document.php');
require_once('Post.php');
public class Type_compte{
	// attributs de la classe 
	private $_type_compte; 
	




	//constructeur

	/** 
*Ceci est le constructeur de la classe Type_compte 
*@author Noura ELMOUSSA  
*@param $type_compte désigne le type du compte : professeur, industriel, étudiant chercheur 
*/ 

	public function __construct($type_compte){
		$this->$_type_compte=$type_compte; 
		

	}




	//methodes de la classe 

	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre Type_compte  et Compte:: un type_compte peut concerner 0 ou plusieurs compte 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }

	/**
*Il existe une relation 0..* entre Type_compte  et Document:: un type_compte peut concerner 0 ou plusieurs document
*@author Noura ELMOUSSA 
*@return id_local_document 
 */
	public function  get_document(){retrun($id_local_document); }


	/**
*Il existe une relation 0..* entre Type_compte  et post:: un type_compte peut concerner 0 ou plusieurs post
*@author Noura ELMOUSSA 
*@return id_local_post 
 */
	public function  get_post (){retrun($id_local_post ); }




/** 
*Les getters
*@author Noura ELMOUSSA  
*@return $_type_compte désigne le type du compte : professeur, industriel, étudiant chercheur 
*/ 

	public function get_type_compte(){ return($this->_type_compte); }

/** 
*Les setters
*@author Noura ELMOUSSA  
*@param $type_compte désigne le type du compte : professeur, industriel, étudiant chercheur 
*/ 
	
	public function set_type_compte($type_compte){ $this->_type_compte=$type_compte; }

}
?>

