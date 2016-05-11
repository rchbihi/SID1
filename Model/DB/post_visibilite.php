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
   *  fonction post_visibilite_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table POST_VISIBLITE(ID_TYPE, 
   *    ID_POST_FIL_ACTUALITE)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   *
   * @return object
   */
 function post_visibilite_consult_all(){
 	 return DB::GetInstance()->Get("SELECT * FROM post_visibilite");
 }
  /**
   *  fonction post_visibilite_consult_id_type
   *
   *    cette fonction return tous les ID_TYPE
   *    présenter dans la table POST_VISIBLITE
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_POST_FIL_ACTUALITE
   * @return object
   */
 function post_visibilite_consult_id_type($var){
 	 return DB::GetInstance()->Get("SELECT ID_TYPE FROM post_visibilite WHERE ID_POST_FIL_ACTUALITE=$var");
 }
  /**
   *  fonction post_visibilite_consult_id_post_fil_actulite
   *
   *    cette fonction return tous les ID_POST_FIL_ACTUALITE
   *    présenter dans la table POST_VISIBLITE
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_TYPE
   * @return object
   */
 function post_visibilite_consult_id_post_fil_actulite($var){
 	 return DB::GetInstance()->Get("SELECT ID_POST_FIL_ACTUALITE FROM post_visibilite WHERE ID_TYPE=$var");
 }
 /**
  * Fait l'insertion des param dans la table POST_VISIBLITE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TYPE
  * @param  int $ID_POST_FIL_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
 
function post_visibilite_insert_all($var1,$var2){
 	 return DB::GetInstance()->Set("INSERT  INTO post_visibilite  VALUES ($var1,$var2)");
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_TYPE
  *    egal a $var1 et ID_POST_FIL_ACTUALITE egal a $var2
  *    car les 2 compose la clé primaire
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TYPE
  * @param  int $var2
  *    ID_POST_FIL_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function post_visibilite_remove_all($var1,$var2){
 	 return DB::GetInstance()->Set("DELETE FROM post_visibilite WHERE ID_TYPE=$var1 and ID_POST_FIL_ACTUALITE=$var2");
 }