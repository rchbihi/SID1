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
   *  fonction experience_consult_all
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table EXPERIENCE
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_EXPERIENCE
   *
   * @return object
   */
 function experience_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM experience WHERE ID_EXPERIENCE=$var");
 }
 
 /**
  * Fait l'insertion des param  en dessous dans la table EXPERIENCE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_EXPERIENCE
  * @param  int $var2
  *    ID_LOCAL_COMPTE
  * @param  date $var3
  *    DATE_DEBUT
  * @param  date $var4
  *    DATE_FIN
  * @param  varchar $var5
  *    ORGANISME
  * @param  varchar $var6
  *    FONCTION
  * @param  varchar $var7
  *    PUBLIC_EXPERIENCE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function experience_insert_all($var1,$var2,$var3,$var4,$var5,$var6,$var7){
 	 return DB::GetInstance()->Set("INSERT  INTO experience  VALUES ($var1,$var2,'$var3','$var4','$var5','$var6','$var7')");
 }
 /**
  * Fait la mise à jour des param dans la table EXPERIENCE
  *
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_EXPERIENCE
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  date $var2
  *    DATE_DEBUT
  * @param  date $var3
  *    DATE_FIN
  * @param  varchar $var4
  *    ORGANISME
  * @param  varchar $var5
  *    FONCTION
  * @param  varchar $var6
  *    PUBLIC_EXPERIENCE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function document_update_all($var0,$var1,$var2,$var3,$var4,$var5,$var6){
 	 return DB::GetInstance()->Set("UPDATE experience set ID_LOCAL_COMPTE=$var1,DATE_DEBUT='$var2',DATE_FIN='$var3',ORGANISME='$var4',FONCTION='$var5',PUBLIC_EXPERIENCE='$var6' where ID_EXPERIENCE=$var0"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_EXPERIENCE
  *    egal a $var1 
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_EXPERIENCE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function document_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM experience WHERE ID_EXPERIENCE=$var1 ");
 }