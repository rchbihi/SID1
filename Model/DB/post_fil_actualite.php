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
   *  fonction post_fil_actualite_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table POST_FIL_ACTUALITE(
   *    ID_POST_FIL_ACTUALITE,ID_DOCUMENT, 
   *    IMAGE,TEXT,LIEN)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_POST_FIL_ACTUALITE
   *
   * @return object
   */
 function post_fil_actualite_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM post_fil_actualite WHERE ID_POST_FIL_ACTUALITE=$var");
 }

 /**
  * Fait l'insertion des param  en dessous dans la table
  *    POST_FIL_ACTUALITE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_POST_FIL_ACTUALITE
  * @param  int $var2
  *    ID_DOCUMENT
  * @param  varchar $var3
  *    IMAGE
  * @param  varchar $var4
  *    TEXTE
  * @param  varchar $var5
  *    LIEN
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function post_fil_actualite_insert_all($var1,$var2,$var3,$var4,$var5){
 	 return DB::GetInstance()->Set("INSERT  INTO post_fil_actualite  VALUES ($var1,$var2,'$var3','$var4','$var5')");
 }
 /**
  * Fait la mise à jour des param dans la table POST_FIL_ACTUALITE
  *
  *    j'ai bien signalé que 4 variables car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_POST_FIL_ACTUALITE
  * @param  int $var1
  *    ID_DOCUMENT
  * @param  varchar $var2
  *    IMAGE
  * @param  varchar $var3
  *    TEXTE
  * @param  varchar $var4
  *    LIEN
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function post_fil_actualite_update_all($var0,$var1,$var2,$var3,$var4){
 	 return DB::GetInstance()->Set("UPDATE post_fil_actualite set ID_DOCUMENT=$var1,IMAGE='$var2',TEXTE='$var3',LIEN='$var4' where ID_POST_FIL_ACTUALITE=$var0"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un 
  *    ID_POST_FIL_ACTUALITE
  *    egal a $var1 
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_POST_FIL_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function post_fil_actualite_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM post_fil_actualite WHERE ID_POST_FIL_ACTUALITE=$var1");
 }