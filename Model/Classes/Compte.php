<?php
require_once('CV.php'); 
require_once('Mention.php'); 
require_once('Signalisation.php');
require_once('Type_compte.php'); 
require_once('Post.php');
require_once('Travaux.php'); 
require_once('Document.php');
require_once('Commentaire.php'); 
require_once('Interaction.php'); 
public class Compte{
	// attributs de la classe 
	private $_id_local_compte; 
	private $_email_compte; 
	private $_mot_de_passe_compte;  




	//constructeur

	/** 
*Ceci est le constructeur de la classe compte
*@author Noura ELMOUSSA  
*@param $id_local_compte designe l'identifiant du compte courant 
*@param $email_compte designe l'email du compte courant 
*@param $mot_de_passe désigne le mot de passe du compte courant 
*@return 
*/ 

	public function __construct($id_local_compte,$email_compte,$mot_de_passe_compte){
		$this->$_id_local_compte=$id_local_compte; 
		$this->$_email_compte=$email_compte;
		$this->$_mot_de_passe_compte=$mot_de_passe_compte;  

	}


/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre type_compte  et compte:: un compte est concerné par un seul type de compte
*@author Noura ELMOUSSA 
*@return id_local_type_compte
 */
	public function  get_type_compte(){retrun($id_local_type_compte); }

/**
*Il existe une relation 0..* entre mention  et compte:: un compte est concerné par 0 oou plusieurs mentions 
*@author Noura ELMOUSSA 
*@return id_local_mention
 */
	public function  get_mention(){retrun($id_local_mention); }
	/**
*Il existe une relation 0..* entre signalisation  et compte:: un compte est concerné par 0 oou plusieurs signalisation
*@author Noura ELMOUSSA 
*@return id_local_signalisation
 */
	public function  get_signalisation(){retrun($id_local_signalisation); }

	/**
*Il existe une relation 0..* entre post et compte:: un compte est concerné par 0 oou plusieurs post 
*@author Noura ELMOUSSA 
*@return id_local_post
 */
	public function  get_post(){retrun($id_local_post); }

/**
*Il existe une relation 0..* entre travaux  et compte:: un compte est concerné par 0 oou plusieurs travaux 
*@author Noura ELMOUSSA 
*@return id_local_travail
 */
	public function  get_travail(){retrun($id_local_travail); }

	/**
*Il existe une relation 0..* entre document  et compte:: un compte est concerné par 0 oou plusieurs document 
*@author Noura ELMOUSSA 
*@return id_local_document 
 */
	public function  get_document(){retrun($id_local_document); }

	/**
*Il existe une relation 1..1 entre cv  et compte:: un compte est concerné par un et un seul cv 
*@author Noura ELMOUSSA 
*@return id_local_cv
 */
	public function  get_cv(){retrun($id_local_cv); }

/**
*Il existe une relation 0..* entre mention  et compte:: un compte est concerné par 0 oou plusieurs mentions 
*@author Noura ELMOUSSA 
*@return id_local_mention
 */
	public function  get_mention(){retrun($id_local_mention); }
	/**
* classe associative 
*@author Noura ELMOUSSA 
*@return id_local_interaction
 */
	public function  get_interaction(){retrun($id_local_interaction); }




	//methodes de la classe 

		/** 
*Les getters 
*@author Noura ELMOUSSA  
*@return $_id_local_compte designe l'identifiant du compte courant 
*/ 

	public function get_id_local_compte(){ return($this->_id_local_compte); }

/**
*@author Noura ELMOUSSA  
*@return $_email_compte designe l'email du compte courant 
*/
	public function get_email_compte(){ return($this->_email_compte); }

/**
*@author Noura ELMOUSSA  
*@return $_mot_de_passe désigne le mot de passe du compte courant  
*/
	public function get_mot_de_passe_compte(){ return($this->_mot_de_passe_compte); }
/** 
*Les setters 
*@author Noura ELMOUSSA  
*@param $id_local_compte designe l'identifiant 
*/ 


	public function set_id_local_compte($id_local_compte){ $this->_id_local_compte=$id_local_compte; }
	/**
	*@author Noura ELMOUSSA  
	*@param $email_compte designe l'email 
	*/
	public function set_email_compte($email_compte){ $this->_email_compte=$email_compte; }
	/**
	*@author Noura ELMOUSSA  
	*@param $mot_de_passe désigne le mot de passe  
	*/
	public function set_mot_de_passe_compte($mot_de_passe_compte){ $this->_mot_de_passe_compte=$mot_de_passe_compte; }

}
?>

