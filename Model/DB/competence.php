<?php
 /**
  *  db est une class presente des fonctions prinsipales
  *    
  *     set pour la mise a jour des données dans la base de données
  *     get pour  la récupération des données présente dans la base de 
  *     données
  *     getinstance instancie la connection la variable db s'il n'est pas 
  *     déjà instancié
  * @author LAMSSAOUI Siham && TADILI Ali
  * @see db.php
  * @uses prepare()
  * @uses execute()
  */
// require'db.php';
  /**
   *  fonction competence_consult_all
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table COMPETENCE
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_COMPETENCE
   *
   * @return object
   */
 function competence_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM competence WHERE ID_COMPETENCE=$var");
 }
 /**
  * Fait l'insertion des param  en dessous dans la table COMPETENCE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_COMPETENCE
  * @param  int $var2
  *    ID_LOCAL_COMPTE
  * @param  varchar $var3
  *    NOM_COMPETENCE
  * @param  varchar $var4
  *    PUBLIC_COMPETENCE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function competence_insert_all($var1,$var2,$var3,$var4){
 	 return DB::GetInstance()->Set("INSERT  INTO competence  VALUES ($var1,$var2,'$var3','$var4')");
 }
 /**
  * Fait la mise à jour des param dans la table COMPETENCE
  *
  *    j'ai bien signalé que 2 variables car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_COMPETENCE
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  varchar $var2
  *    NOM_COMPETENCE
  * @param  varchar $var3
  *    PUBLIC_COMPETENCE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function competence_update_all($var0,$var1,$var2,$var3){
 	 return DB::GetInstance()->Set("UPDATE competence set NOM_COMPETENCE='$var2',PUBLIC_COMPETENCE='$var3',ID_LOCAL_COMPTE=$var1 where ID_COMPETENCE=$var0"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_COMPETENCE
  *    egal a $var1 
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_COMPETENCE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function competence_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM competence WHERE ID_COMPETENCE=$var1 ");
 }