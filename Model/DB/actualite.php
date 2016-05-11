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
   *  fonction actualite_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table ACTUALITE(ID_ACTUALITE,ID_LOCAL_COMPTE, 
   *    TITRE_ACT,DESCRIPTION_ACT,
   *    TEXTE_ACT,IMAGE_ACT)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *    ID_ACTUALITE
   *
   * @return object
   */
 function actualite_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM actualite WHERE ID_ACTUALITE=$var");
 }

 /**
  * Fait l'insertion des param  en dessous dans la table ACTUALITE
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_ACTUALITE
  * @param  int $var2
  *    ID_LOCAL_COMPTE
  * @param  varchar $var3
  *    TITRE_ACT
  * @param  varchar $var4
  *    DESCRIPTION_ACT
  * @param  varchar $var5
  *    TEXTE_ACT
  * @param  varchar $var6
  *    IMAGE_ACT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function actualite_insert_all($var1,$var2,$var3,$var4,$var5,$var6){
 	 return DB::GetInstance()->Set("INSERT  INTO actualite  VALUES ($var1,$var2,'$var3','$var4','$var5','$var6')");
 }
 /**
  * Fait la mise à jour des param dans la table ACTUALITE
  *
  *    j'ai bien signalé que 4 variables car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var0
  *    ID_ACTUALITE
  * @param  int $var1
  *    ID_LOCAL_COMPTE
  * @param  varchar $var2
  *    TITRE_ACT
  * @param  varchar $var3
  *    DESCRIPTION_ACT
  * @param  varchar $var4
  *    TEXTE_ACT
  * @param  varchar $var5
  *    IMAGE_ACT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function actualite_update_all($var0,$var1,$var2,$var3,$var4,$var5){
 	 return DB::GetInstance()->Set("UPDATE actualite set TITRE_ACT='$var2',DESCRIPTION_ACT='$var3',TEXTE_ACT='$var4',IMAGE_ACT='$var5', ID_LOCAL_COMPTE=$var1 where ID_ACTUALITE=$var0"));
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_ACTUALITE
  *    egal a $var1 et ID_LOCAL_COMPTE egal a $var2
  *    car les 2 compose la clé primaire
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_ACTUALITE
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function actualite_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM actualite WHERE ID_ACTUALITE=$var1");
 }