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
   *  fonction account_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table COMPTE(ID_LOCAL_COMPTE,ID_TYPE,
   *    EMAIL,MOT_DE_PASSE,BOOL_ADMIN,NOM_CV,PRENOM_CV,
   *    DATE_DE_NAISSANCE,TEL)
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_LOCAL_COMPTE
   *
   * @return object
   */
 function account_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM compte WHERE ID_LOCAL_COMPTE=$var");
 }
 /**
  * Fait l'insertion des param dans la table compte
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  int $var2
  *    ID_TYPE
  * @param  varchar $var3
  *    EMAIL
  * @param  varchar $var4
  *    MOT_DE_PASSE
  * @param  bool $var5
  *    BOOL_ADMIN
  * @param  varchar $var6
  *    NOM_CV
  * @param  varchar $var7
  *    PRENOM_CV
  * @param  date $var8
  *    DATE_DE_NAISSANCE
  * @param  varchar $var9
  *    TEL
  * @param  varchar $var10
  *    _PUBLIC
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function account_insert_all($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9,$var10){
 	 return DB::GetInstance()->Set("INSERT  INTO compte  VALUES ($var1,$var2,'$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10')");
 }
 /**
  * Fait la mise à jour des param dans la table compte
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_LOCAL_COMPTE
  *    avant la mise à jour
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  int $var2
  *    ID_TYPE
  * @param  varchar $var3
  *    EMAIL
  * @param  varchar $var4
  *    MOT_DE_PASSE
  * @param  bool $var5
  *    BOOL_ADMIN
  * @param  date $var8
  *    DATE_DE_NAISSANCE
  * @param  varchar $var6
  *    TEL
  * @param  varchar $var7
  *    _PUBLIC
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function account_update_all($var1,$var2,$var3,$var4,$var5,$var6,$var7){
 	 return DB::GetInstance()->Set("UPDATE compte set ID_TYPE=$var2,EMAIL='$var3',MOT_DE_PASSE='$var4',BOOL_ADMIN='$var5',TEL='$var6',_PUBLIC='$var7' where ID_LOCAL_COMPTE=$var1"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_LOCAL_COMPTE
  *    egal a $var1
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function account_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM compte WHERE ID_LOCAL_COMPTE=$var1");
 }