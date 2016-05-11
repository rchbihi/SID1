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
   *  fonction type_utilisateu_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table TYPE_UTILISATEUR
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_TYPE   
   *
   * @return object
   */
 function type_utilisateur_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM type_utilisateur WHERE ID_TYPE=$var");
 }
 /**
  * Fait l'insertion des param dans la table TYPE_UTILISATEUR
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TYPE
  * @param  varchar $var2
  *    TYPE_COMPTE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
 
function type_utilisateur_insert_all($var1,$var2){
 	 return DB::GetInstance()->Set("INSERT  INTO type_utilisateur  VALUES ($var1,'$var2')");
 }
 /**
  * Fait la mise à jour des param dans la table TYPE_UTILISATEUR
  *
  *    je modifie que le type du compte
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_TYPE
  * @param  varchar $var1
  *    TYPE_COMPTE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function type_utilisateur_update_type_compte($var0,$var1){
 	 return DB::GetInstance()->Set("UPDATE type_utilisateur set TYPE_COMPTE='$var1' where ID_TYPE=$var0"));
 }

/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_TYPE
  *    egal a $var1
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TYPE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function type_utilisateur_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM type_utilisateur WHERE ID_TYPE=$var1");
 }