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
   *  fonction action_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table ACTION
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_LOCAL_COMPTE
   * @param int $var2
   *    ID_POST_FIL_ACTUALITE
   *
   * @return object
   */
 function action_consult_all($var1,$var2){
 	 return DB::GetInstance()->Get("SELECT * FROM action where ID_LOCAL_COMPTE=$var1 and ID_POST_FIL_ACTUALITE=$var2");
 }
 

 /**
  * Fait l'insertion des param dans la table ACTION
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  int $var2
  *    ID_POST_FIL_ACTUALITE
  * @param  varchar $var3
  *    SIGNALISATION_MOTIF
  * @param  varchar $var4
  *    MENTION_FORMATION
  * @param  bool $var5
  *    COMMENTAIRE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function action_insert_all($var1,$var2,$var3,$var4,$var5){
 	 return DB::GetInstance()->Set("INSERT  INTO action  VALUES ($var1,$var2,'$var3','$var4','$var5')");
 }
 /**
  * Fait la mise à jour des param dans la table ACTION
  *
  *    j'ai bien signalé que 4 variable car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_LOCAL_COMPTE
  *    avant la mise à jour
  * @param  int $var1
  *    SIGNALISATION_MOTIF
  * @param  int $var2
  *    MENTION_FORMATION
  * @param  varchar $var3
  *    EMAIL
  * @param  varchar $var4
  *    ID_POST_FIL_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function action_update_all($var0,$var1,$var2,$var3,$var4){
 	 return DB::GetInstance()->Set("UPDATE action set SIGNALISATION_MOTIF=$var1,MENTION_FORMATION=$var2,COMMENTAIRE='$var3' where ID_LOCAL_COMPTE=$var0 and ID_POST_FIL_ACTUALITE=$var4"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_LOCAL_COMPTE
  *    egal a $var1 et ID_POST_FIL_ACTUALITE egal a $var2
  *    car les 2 compose la clé primaire
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  int $var2
  *    ID_POST_FIL_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function action_remove_all($var1,$var2){
 	 return DB::GetInstance()->Set("DELETE FROM action WHERE ID_LOCAL_COMPTE=$var1 and ID_POST_FIL_ACTUALITE=$var2");
 }