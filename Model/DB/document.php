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
   *  fonction document_consult_all
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table DOCUMENT(ID_DOCUMENT,ID_CATEGORIE, 
   *    NOM_DOC,DESCRIPTION_DOC,TYPE_DOC,NOM_MOT_CLE)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *     ID_DOCUMENT
   *
   * @return object
   */
 function document_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM document WHERE ID_DOCUMENT=$var");
 }
 /**
  * Fait l'insertion des param  en dessous dans la table DOCUMENT
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_DOCUMENT
  * @param  int $var2
  *    ID_CATEGORIE
  * @param  varchar $var3
  *    NOM_DOC
  * @param  text $var4
  *    DESCRIPTION_DOC
  * @param  varchar $var5
  *    TYPE_DOC
  * @param  varchar $var6
  *    NOM_MOT_CLE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function document_insert_all($var1,$var2,$var3,$var4,$var5,$var6){
 	 return DB::GetInstance()->Set("INSERT  INTO document  VALUES ($var1,$var2,'$var3','$var4','$var5','$var6')");
 }
 /**
  * Fait la mise à jour des param dans la table DOCUMENT
  *
  *    j'ai bien signalé que 2 variables car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_DOCUMENT
  * @param  int $var1
  *    ID_CATEGORIE
  * @param  varchar $var2
  *    NOM_DOC
  * @param  varchar $var3
  *    DESCRIPTION_DOC
  * @param  varchar $var4
  *    TYPE_DOC
  * @param  varchar $var5
  *    NOM_MOT_CLE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function document_update_all($var0,$var1,$var2,$var3,$var4,$var5){
 	 return DB::GetInstance()->Set("UPDATE document set ID_CATEGORIE=$var1,NOM_DOC='$var2',DESCRIPTION_DOC='$var3',TYPE_DOC='$var4',NOM_MOT_CLE='$var5' where ID_DOCUMENT=$var0"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_DOCUMENT
  *    egal a $var1 
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_DOCUMENT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function document_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM document WHERE ID_DOCUMENT=$var1 ");
 }