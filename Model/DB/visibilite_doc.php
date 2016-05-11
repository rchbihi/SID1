<?php
 /**
  *  db est une class presente des fonctions prinsipales
  *    
  *     set pour la mise a jour des données dans la base de données
  *     get pour  la récupération des données présente dans la base de 
  *     données
  *     getinstance instancie la connection la variable db s'il n'est pas déjà
  *     instancié
  * @author LAMSSAOUI Siham && TADILI Ali 
  * @see db.php
  * @uses prepare()
  * @uses execute()
  */
// require'db.php';
  /**
   *  fonction visibilite_doc_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table VISIBLITE_DOC(ID_TYPE, 
   *    ID_DOCUMENT)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   *
   * @return object
   */
 function visibilite_doc_consult_all(){
 	 return DB::GetInstance()->Get("SELECT * FROM visibilite_doc");
 }
  /**
   *  fonction visibilite_doc_consult_id_type
   *
   *    cette fonction return tous les ID_TYPE
   *    présenter dans la table VISIBLITE_DOC
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *   ID_DOCUMENT
   * @return object
   */
 function visibilite_doc_consult_id_type($var){
 	 return DB::GetInstance()->Get("SELECT ID_TYPE FROM visibilite_doc WHERE ID_DOCUMENT=$var");
 }
  /**
   *  fonction visibilite_doc_consult_id_document
   *
   *    cette fonction return tous les ID_DOCUMENT
   *    présenter dans la table VISIBLITE_DOC
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_TYPE
   * @return object
   */
 function visibilite_doc_consult_id_document($var){
 	 return DB::GetInstance()->Get("SELECT ID_DOCUMENT FROM visibilite_doc WHERE ID_TYPE=$var");
 }
 /**
  * Fait l'insertion des param dans la table VISIBLITE_DOC
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TYPE
  * @param  varchar $var2
  *    ID_DOCUMENT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
 
function visibilite_doc_insert_all($var1,$var2){
 	 return DB::GetInstance()->Set("INSERT  INTO VISIBLITE_DOC  VALUES ($var1,$var2)");
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_TYPE
  *    egal a $var1 et ID_DOCUMENT egal a $var2
  *    car les 2 constitue la cle primaire
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TYPE
  * @param  int $var2
  *    ID_DOCUMENT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function visibilite_doc_remove_all($var1,$var2){
 	 return DB::GetInstance()->Set("DELETE FROM VISIBLITE_DOC WHERE ID_TYPE=$var1 and ID_DOCUMENT=$var2 ");
 }