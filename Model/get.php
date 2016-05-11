<?php
/**
 * @author LAMSSAOUI Siham && TADILI Ali
 */
require 'commoninit.php';
require 'BD/compte.php';
require 'BD/action.php';
require 'BD/actualite.php';
require 'BD/categorie.php';
require 'BD/competence.php';
require 'BD/contenir.php';
require 'BD/document.php';
require 'BD/experience.php';
require 'BD/formation.php';
require 'BD/possede.php';
require 'BD/post_fil_actualite.php';
require 'BD/post_visibilite.php';
require 'BD/travaux.php';
require 'BD/type_utilisateur.php';
require 'BD/visibilite_doc.php';




/**
   *  fonction get_compte
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table COMPTE 
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_LOCAL_COMPTE
   *
   * @return object
   */

function get_compte($var1){
  $f= account_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Compte($a);
      }
      else return null;
}

/**
   *  fonction get_action
   *
   *    cette fonction return tous les attributs 
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

function get_action($var1,$var2){
  $f= action_consult_all($var1,$var2);
   if($f>0){
   	foreach ($f as $a)
        return  new Compte($a);
      }
      else return null;
}

/**
   *  fonction get_actualite
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table ACTUALITE 
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_ACTUALITE
   *
   * @return object
   */

function get_actualite($var1){
  $f= actualite_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Actualite($a);
      }
      else return null;
}

/**
   *  fonction get_categorie
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table CATEGORIE 
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_CATEGORIE
   *
   * @return object
   */

function get_categorie($var1){
  $f= categorie_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Categorie($a);
      }
      else return null;
}

/**
   *  fonction get_competence
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table COMPETENCE
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_COMPETENCE
   *
   * @return object
   */

function get_competence($var1){
  $f= competence_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Competence($a);
      }
      else return null;
}

/**
   *  fonction get_contenir
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table CONTENIR
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_TRAVAUX
   * @param int $var2
   *    ID_LOCAL_COMPTE
   *
   * @return object
   */

function get_contenir($var1,$var2){
  $f= contenir_consult_all($var1,$var2);
   if($f>0){
   	foreach ($f as $a)
        return  new Compte($a);
      }
      else return null;
}

/**
   *  fonction get_document
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table DOCUMENT
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_DOCUMENT
   *
   * @return object
   */

function get_document($var1){
  $f= document_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Document($a);
      }
      else return null;
}

/**
   *  fonction get_experience
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table EXPERIENCE
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_EXPERIENCE
   *
   * @return object
   */

function get_experience($var1){
  $f= experience_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Experience($a);
      }
      else return null;
}

/**
   *  fonction get_formation
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table FORMATION
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_FORMATION
   *
   * @return object
   */

function get_formation($var1){
  $f= formation_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Formation($a);
      }
      else return null;
}

/**
   *  fonction get_possede
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table POSSEDE
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   *
   * @return object
   */

function get_possede(){
  $f= possede_consult_all();
   if($f>0){
   	foreach ($f as $a)
        return  new Compte($a);
      }
      else return null;
}

/**
   *  fonction get_visibilite_doc
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table VISIBILITE_DOC
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   *
   * @return object
   */

function get_visibilite_doc(){
  $f= visibilite_doc_consult_all();
   if($f>0){
   	foreach ($f as $a)
        return  new Compte($a);
      }
      else return null;
}

/**
   *  fonction get_type_utilisateur
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table TYPE_UTILISATEUR
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_TYPE
   *
   * @return object
   */

function get_type_utilisateur($var1){
  $f= type_utilisateur_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Type_compte($a);
      }
      else return null;
}

/**
   *  fonction get_travail
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table TYPE_UTILISATEUR
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_TRAVAUX
   *
   * @return object
   */

function get_travail($var1){
  $f= travaux_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Travaux($a);
      }
      else return null;
}

/**
   *  fonction get_post_fil_actualite
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table post_fil_actualite
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   * @param int $var1
   *    ID_POST_FIL_ACTUALITE
   *
   * @return object
   */

function get_post_fil_actualite($var1){
  $f= post_fil_actualite_consult_all($var1);
   if($f>0){
   	foreach ($f as $a)
        return  new Post($a);
      }
      else return null;
}

/**
   *  fonction get_post_visibilite
   *
   *    cette fonction return tous les attributs 
   *    présenter dans la table post_visibilite
   *    
   *
   * @package db.php
   * @see `DB::GetInstance()->get()`
   *
   * @return object
   */

function get_post_visibilite(){
  $f= post_visibilite_consult_all();
   if($f>0){
   	foreach ($f as $a)
        return  new Compte($a);
      }
      else return null;
}

