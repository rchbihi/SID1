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
   *  fonction possede_consult_all
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table POSSEDE(ID_LOCAL_COMPTE,
   *    ID_DOCUMENT)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   *
   * @return object
   */
 function possede_consult_all(){
 	 return DB::GetInstance()->Get("SELECT * FROM possede");
 }
  /**
   *  fonction possede_consult_id_local_compte
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table POSSEDE(ID_LOCAL_COMPTE)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_DOCUMENT
   * @return object
   */
 function possede_consult_id_local_compte($var){
   return DB::GetInstance()->Get("SELECT ID_LOCAL_COMPTE FROM possede WHERE ID_DOCUMENT=$var");
 }
  /**
   *  fonction possede_consult_id_document
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table POSSEDE(
   *    ID_DOCUMENT)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_LOCAL_COMPTE
   * @return object
   */
 function possede_consult_id_document($var){
   return DB::GetInstance()->Get("SELECT ID_DOCUMENT FROM possede WHERE ID_LOCAL_COMPTE=$var");
 }
 /**
  * Fait l'insertion des param dans la table POSSEDE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  int $var2
  *    ID_DOCUMENT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function possede_insert_all($var1,$var2){
 	 return DB::GetInstance()->Set("INSERT  INTO possede VALUES ($var1,$var2)");
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_LOCAL_COMPTE
  *    egal a $var1 et ID_TRAVAUX egal a $var0
  *    car les 2 compose la clé primaire
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_LOCAL_COMPTE
  * @param  int $var1
  *    ID_DOCUMENT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function possede_remove_all($var1,$var0){
 	 return DB::GetInstance()->Set("DELETE FROM possede WHERE ID_LOCAL_COMPTE=$var0 and ID_DOCUMENT=$var1");
 }