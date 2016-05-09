<?php

require_once('CV.php'); 
public class Experience{
	// attributs de la classe 
	private $_date_debut; 
	private $_date_fin; 
	private $_organisme;  
	private $_fonction; 
	private $_public;  




	//constructeur




/** 
*Ceci est le constructeur de la classe Experience 
*@author Noura ELMOUSSA  
*@param $date_debut désigne la date de début de l'experience
*@param $date_fin désigne la date de fin de l'experience  
*@param $organime désigne l'organisme d'attache 
*@param $fonction désigne la fonction assignée à l'experience 
*@param $public désigne la portée de l'experience 
*@return 
*/ 

	public function __construct($date_debut,$date_fin,$organisme,$fonction,$public){
		$this->_date_debut=$date_debut; 
		$this->_date_fin=$date_fin; 
		$this->_organisme=$organisme; 
		$this->_fonction=$fonction; 
		$this->_public=$public; 
	}




	//methodes de la classe 

/**
** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 0..* entre cv  et experience:: un cv est concerne par 0 ou plusieur experience 
*@author Noura ELMOUSSA 
*@return id_local_cv
 */
	public function  get_cv(){retrun($id_local_cv); }


	/** 
*Les getters de la classe experience  
*@author Noura ELMOUSSA  
*@return $_date_debut désigne la date de début de l'experience de l'objet courant 
*
*/ 


	public function get_date_debut(){ return($this->_date_debut); }
/**
*@author Noura ELMOUSSA  
*@return $_date_fin désigne la date de fin de l'experience de l'objet courant  
*/
	public function get_date_fin(){ return($this->_date_fin); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_organime désigne l'organisme d'attache de l'objet courant 
	*/
	public function get_organisme(){ return($this->_organisme); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_fonction désigne la fonction assignée à l'experience de l'objet courant 
	*/
	public function get_fonction(){ return($this->_fonction); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_public désigne la portée de l'experience de l'objet courant 
	*/
	public function get_public(){ return($this->_public); }
	



/** 
*Les setters de la classe experience  
*@author Noura ELMOUSSA 
*@param $date_debut désigne la date de début de l'experience
*/ 




	public function set_date_debut($date_debut){ $this->_date_debut=$date_debut; }
	/**
	*@author Noura ELMOUSSA 
	*@param $date_fin désigne la date de fin de l'experience  
	*/
	public function set_date_fin($date_fin){ $this->_date_fin=$date_fin; }
	/**
	*@author Noura ELMOUSSA 
	*@param $organime désigne l'organisme d'attache 
	*/	
	public function set_organisme($organisme){ $this->_organisme=$organisme; }
	/**
	*@author Noura ELMOUSSA 
	*@param $fonction désigne la fonction assignée à l'experience 
	*/
	public function set_mention($fonction){ $this->_fonction=$fonction; }
	/**
	*@author Noura ELMOUSSA 
	*@param $public désigne la portée de l'experience 
	*/
	public function set_public($public){ $this->_public=$public; }

}
?>

