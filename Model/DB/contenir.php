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
   *  fonction contenir_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table CONTENIR(ID_TRAVAUX,ID_LOCAL_COMPTE)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_TRAVAUX
   * @param int $var1
   *    ID_LOCAL_COMPTE
   *
   * @return object
   */
 function contenir_consult_all($var,$var1){
 	 return DB::GetInstance()->Get("SELECT * FROM contenir WHERE ID_TRAVAUX=$var and  ID_LOCAL_COMPTE=$var1");
 }
  /**
   *  fonction contenir_consult_id_travaux
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table CONTENIR(ID_LOCAL_COMPTE)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_TRAVAUX
   *
   * @return object
   */
 function contenir_consult_id_travaux($var){
   return DB::GetInstance()->Get("SELECT * FROM contenir WHERE ID_TRAVAUX=$var");
 }
  /**
   *  fonction contenir_consult_id_local_compte
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table CONTENIR(ID_TRAVAUX)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_LOCAL_COMPTE
   *
   * @return object
   */
 function contenir_consult_id_local_compte($var1){
   return DB::GetInstance()->Get("SELECT * FROM contenir WHERE  ID_LOCAL_COMPTE=$var1");
 }

 /**
  * Fait l'insertion des param dans la table CONTENIR
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TRAVAUX
  * @param  int $var2
  *    ID_LOCAL_COMPTE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function contenir_insert_all($var1,$var2){
 	 return DB::GetInstance()->Set("INSERT  INTO contenir VALUES ($var1,$var2)");
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
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  int $var0
  *    ID_TRAVAUX
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function contenir_remove_all($var1,$var0){
 	 return DB::GetInstance()->Set("DELETE FROM contenir WHERE ID_LOCAL_COMPTE=$var1 and ID_TRAVAUX=$var0");
 }