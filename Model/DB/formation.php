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
   *  fonction formation_consult_all
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table FORMATION(ID_FORMATION,ID_LOCAL_COMPTE, 
   *    DIPLOME,ETABLISSEMENT,ANNEE_OBTENTION,MENTION_FORMATION,PUBLIC_)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_FORMATION
   *
   * @return object
   */
 function formation_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM formation WHERE ID_FORMATION=$var");
 }


 /**
  * Fait l'insertion des param  en dessous dans la table FORMATION
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_FORMATION
  * @param  int $var2
  *    ID_LOCAL_COMPTE
  * @param  varchar $var3
  *    DIPLOME
  * @param  varchar $var4
  *    ETABLISSEMENT
  * @param  date $var5
  *    ANNEE_OBTENTION
  * @param  varchar $var6
  *    MENTION_FORMATION
  * @param  varchar $var7
  *    PUBLIC_
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function experience_insert_all($var1,$var2,$var3,$var4,$var5,$var6,$var7){
 	 return DB::GetInstance()->Set("INSERT  INTO formation  VALUES ($var1,$var2,'$var3','$var4','$var5','$var6','$var7')");
 }
 /**
  * Fait la mise à jour des param dans la table FORMATION
  *
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_FORMATION
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  date $var2
  *    DIPLOME
  * @param  date $var3
  *    ETABLISSEMENT
  * @param  varchar $var4
  *    ANNEE_OBTENTION
  * @param  varchar $var5
  *    MENTION_FORMATION
  * @param  varchar $var6
  *    PUBLIC_
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function formation_update_all($var0,$var1,$var2,$var3,$var4,$var5,$var6){
 	 return DB::GetInstance()->Set("UPDATE formation set ID_LOCAL_COMPTE=$var1,DIPLOME='$var2',ETABLISSEMENT='$var3',ANNEE_OBTENTION='$var4',MENTION_FORMATION='$var5',PUBLIC_='$var6' where ID_FORMATION=$var0 "));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_FORMATION
  *    egal a $var1 
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_FORMATION
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function formation_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM formation WHERE ID_FORMATION=$var1 ");
 }