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
   *  fonction travaux_consult_all
   *
   *    cette fonction return tous les atributs 
   *    présenter dans la table TRAVAUX(ID_TRAVAUX,AUTEUR_TRAV, 
   *    TITRE_TRAV,DOC_TRAV,LIEN_TRAV,
   *    DATE_PUB_TRAV,NOM_JOURNAL,NOM_CONF,DATE_DEPOT)
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var
   *     ID_TRAVAUX
   *
   * @return object
   */
 function travaux_consult_all($var){
 	 return DB::GetInstance()->Get("SELECT * FROM travaux  WHERE ID_TRAVAUX=$var");
 }
 /**
  * Fait l'insertion des param  en dessous dans la table TRAVAUX
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TRAVAUX
  * @param  varchar $var2
  *    AUTEUR_TRAV
  * @param  varchar $var3
  *    TITRE_TRAV
  * @param  varchar $var4
  *    DOC_TRAV
  * @param  varchar $var5
  *    LIEN_TRAV
  * @param  date $var6
  *    DATE_PUB_TRAV
  * @param  varchar $var7
  *    NOM_JOURNAL
  * @param  varchar $var8
  *    NOM_CONF
  * @param  date $var9
  *    DATE_DEPOT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function travaux_insert_all($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9){
 	 return DB::GetInstance()->Set("INSERT  INTO travaux  VALUES ($var1,'$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9')");
 }
 /**
  * Fait la mise à jour des param dans la table TRAVAUX
  *
  *    j'ai bien signalé que 8 variables car le changement ne peut
  *    pas etre dans l'identifiant
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TRAVAUX
  * @param  varchar $var2
  *    AUTEUR_TRAV
  * @param  varchar $var3
  *    TITRE_TRAV
  * @param  varchar $var4
  *    DOC_TRAV
  * @param  varchar $var5
  *    LIEN_TRAV
  * @param  date $var6
  *    DATE_PUB_TRAV
  * @param  varchar $var7
  *    NOM_JOURNAL
  * @param  varchar $var8
  *    NOM_CONF
  * @param  date $var9
  *    DATE_DEPOT
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function travaux_update_all($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8,$var9){
 	 return DB::GetInstance()->Set("UPDATE travaux set AUTEUR_TRAV='$var2',TITRE_TRAV='$var3',DOC_TRAV='$var4',LIEN_TRAV='$var5',DATE_PUB_TRAV='$var6',NOM_JOURNAL='$var7',NOM_CONF='$var8',DATE_DEPOT='$var9' where ID_TRAVAUX=$var1");
 }
/**
  * Fait la suppression d'une ligne
  * 
  *    la fonction supprime la ligne qui a un ID_TRAVAUX
  *    egal a $var1 
  * avec `DB::GetInstance()->set()`
  *
  * @package db.php
  * @see `DB::GetInstance()->set()`
  *
  * @param  int $var1
  *    ID_TRAVAUX
  * @return int
  *    - 1 en cas de succes
  *    - 0 en cas d'echec
  */
function travaux_remove_all($var1){
 	 return DB::GetInstance()->Set("DELETE FROM travaux WHERE ID_TRAVAUX=$var1");
 }