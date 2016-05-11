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
   *  fonction categorie_consult_all
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table CATEGORIE(ID_CATEGORIE,CAT_ID_CATEGORIE, 
   *    NOM_CATEGORIE)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_CATEGORIE
   *
   * @return object
   */
 function categorie_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM categorie WHERE ID_CATEGORIE=$var");
 }


 /**
  * Fait l'insertion des param  en dessous dans la table CATEGORIE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_CATEGORIE
  * @param  int $var2
  *    CAT_ID_CATEGORIE
  * @param  varchar $var3
  *    NOM_CATEGORIE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function categorie_insert_all($var1,$var2,$var3){
 	 return DB::GetInstance()->Set("INSERT  INTO categorie  VALUES ($var1,$var2,'$var3')");
 }
 /**
  * Fait la mise à jour des param dans la table CATEGORIE
  *
  *    j'ai bien signalé que 2 variables car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_ACTUALITE
  * @param  int $var1
  *    CAT_ACTUALITE
  * @param  varchar $var2
  *    NOM_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function categorie_update_all($var0,$var1,$var2){
 	 return DB::GetInstance()->Set("UPDATE categorie set CAT_ID_ACTUALITE=$var1,NOM_ACTUALITE='$var2' where ID_CATEGORIE=$var0"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_CATEGORIE
  *    egal a $var1 
  *    car les 2 compose la clé primaire
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_CATEGORIE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function categorie_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM categorie WHERE ID_CATEGORIE=$var1 ");
 }