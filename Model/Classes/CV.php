<?php

require_once('Compte.php'); 
require_once('Formation.php'); 
require_once('Experience.php');
require_once('Competence.php'); 

public class CV{
	// attributs de la classe 
	private $_id_local_cv; 
	private $_nom; 
	private $_prenom;  
	private $_date_de_naissance; 
	private $_telephone;  
	private $_organisme;  
	private $_photo; 
	private $_public;  




	//constructeur
	/** 
*Ceci est le constructeur de la classe CV  
*@author Noura ELMOUSSA  
*@param $id_local_cv désigne l'identifiant local du cv 
*@param $nom désigne le nom du propriètaire  du cv  
*@param $prenom désigne le prenom du propriètaire du cv  
*@param $date_de_naissance désigne la date de naissance du proprietaire  du cv  
*@param $telephone  désigne le telephone du proprietaire du cv 
*@param $organisme désigne l'organisme d'attache du propriètaire du cv  
*@param $photo désigne la photo du proprietaire  du cv  
*@param $public désigne la portée du cv 
*/ 

	public function __construct($id_local_cv,$nom,$prenom,$date_de_naissance,$telephone,$organisme,$photo,$public){
		$this->_id_local_cv=$id_local_cv; 
		$this->_nom=$nom; 
		$this->_prenom=$prenom; 
		$this->_date_de_naissance=$date_de_naissance; 
		$this->_telephone=$telephone; 
		$this->_organisme=$organisme;
		$this->_photo=$photo; 
		$this->_public=$public; 

	}




	//methodes de la classe 





	/** ASSOCIATIONS *********************************************************************/
	/**
*Il existe une relation 1..1 entre CV  et compte:: un Cv concerne un et un seul cv 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }

	/**
*Il existe une relation 0..* entre CV  et competence: un Cv concerner par 0 ou plusieurs competences 
*@author Noura ELMOUSSA 
*@return id_local_competence
 */
	public function  get_competence(){retrun($id_local_competence); }

/**
*Il existe une relation 0..* entre CV  et experience: un Cv concerner par 0 ou plusieurs experience
*@author Noura ELMOUSSA 
*@return id_local_experience 
 */
	public function  get_experience(){retrun($id_local_experience); }*

	/**
*Il existe une relation 0..* entre CV  et formation: un Cv concerner par 0 ou plusieurs formation
*@author Noura ELMOUSSA 
*@return id_local_formation 
 */
	public function  get_formation(){retrun($id_local_formation); }







/** 
*Les getters  
*@author Noura ELMOUSSA  
*@return $_id_local_cv désigne l'identifiant local du cv 
*/ 
	public function get_id_local_cv(){ return($this->_id_local_cv); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_nom désigne le nom du propriètaire  du cv  
	*/
	public function get_nom(){ return($this->_nom); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_prenom désigne le prenom du propriètaire du cv  
	*/
	public function get_prenom(){ return($this->_prenom); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_date_de_naissance désigne la date de naissance du proprietaire  du cv  
	*/
	public function get_date_de_naissance(){ return($this->_date_de_naissance); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_telephone  désigne le telephone du proprietaire du cv 
	*/
	public function get_telephone(){ return($this->_telephone); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_organisme désigne l'organisme d'attache du propriètaire du cv  
	*/
	public function get_organisme(){ return($this->_organisme); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_photo désigne la photo du proprietaire  du cv  
	*/
	public function get_photo(){ return($this->_photo); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_public désigne la portée du cv 
	*/
	public function get_public(){ return($this->_public); }
	

/** 
*Les setters  
*@author Noura ELMOUSSA  
*@param $id_local_cv désigne l'identifiant local du cv 
*/ 

	public function set_id_local_cv($id_local_cv){ $this->_id_local_cv=$id_local_cv; }
	/**
	*@author Noura ELMOUSSA  
	*@param $nom désigne le nom du propriètaire  du cv  
	*/
	public function set_etablissement($nom){ $this->_nom=$nom; }
	/**
	*@author Noura ELMOUSSA  
	*@param $prenom désigne le prenom du propriètaire du cv  
	*/
	public function set_prenom($prenom){ $this->_prenom=$prenom; }
	/**
	*@author Noura ELMOUSSA  
	*@param $date_de_naissance désigne la date de naissance du proprietaire  du cv  
	*/
	public function set_date_de_naissance($date_de_naissance){ $this->_date_de_naissance=$date_de_naissance; }
	/**
	*@author Noura ELMOUSSA  
	*@param $telephone  désigne le telephone du proprietaire du cv 
	*/
	public function set_telephone($telephone){ $this->_telephone=$telephone; }
	/**
	*@author Noura ELMOUSSA  
	*@param $organisme désigne l'organisme d'attache du propriètaire du cv  
	*/

	public function set_organisme($organisme){ $this->_organisme=$organisme; }
	/**
	*@author Noura ELMOUSSA  
	*@param $photo désigne la photo du proprietaire  du cv  
	*/

	public function set_photo($photo){ $this->_photo=$photo; }
	/**
	*@author Noura ELMOUSSA  
	*@param $public désigne la portée du cv  
	*/
	public function set_public($public){ $this->_public=$public; }


}
?>

