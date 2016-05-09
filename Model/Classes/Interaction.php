<?php

require_once('Compte.php'); 
require_once('Actualite.php'); 
public class Interaction{
	// attributs de la classe 
	private $_motif; 
	private $_jaime; 
	private $_texte_com;  




	//constructeur

	/** 
*Ceci est le constructeur de la classe Interaction
*@author Noura ELMOUSSA  
*@param $motif designe le motif de la signalisation
*@param $jaime designe la mention attribuée
*@param $texte_com désigne le texte du commentaire  
*/ 

	public function __construct($motif,$jaime,$texte_com){
		$this->$_motif=$motif; 
		$this->$_jaime=$jaime;
		$this->$_texte_com=$texte_com;  

	}




	//methodes de la classe 

	/** ASSOCIATIONS *********************************************************************/
	/**
*classe association entre compte et actualite 
*@author Noura ELMOUSSA 
*@return id_local_compte
 */
	public function  get_compte(){retrun($id_local_compte); }

	/**
*
*@author Noura ELMOUSSA 
*@return id_local_actualite
 */
	public function  get_actualite(){retrun($id_local_actualite); }
	


		/** 
*Les getters 
*@author Noura ELMOUSSA  
*@return $_motif designe le motif de la signalisation
*/ 

	public function get_motif(){ return($this->_motif); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_jaime designe la mention attribuée
	*/
	public function get_jaime(){ return($this->_jaime); }
	/**
	*@author Noura ELMOUSSA  
	*@return $_texte_com désigne le texte du commentaire  
	*/
	public function get_texte_com(){ return($this->_texte_com); }
/** 
*Les setters 
*@author Noura ELMOUSSA  
*@param $motif designe le motif de la signalisation  
*/ 


	public function set_motif($motif){ $this->_motif=$motif; }
	/**
	*@author Noura ELMOUSSA 
	*@param $jaime designe la mention attribuée
	*/
	public function set_jaime($jaime){ $this->_jaime=$jaime; }
	/**
	*@author Noura ELMOUSSA 
	*@param $texte_com désigne le texte du commentaire 
	*/
	public function set_texte_com($texte_com){ $this->_texte_com=$texte_com; }

}
?>

