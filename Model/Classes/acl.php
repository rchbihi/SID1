<?php
/**
 * ACL access control link pour controler l'acces a certain ressources
 * 
 * @author LAMSSAOUI Siham && TADILI Ali
 */
Class Acl {
   
   private $user_empty = false;

   //initialize the database object here
   function __construct() {
     
   }
   /* $id_type est le id_type d utilisateur actuel et  
      $id_type_cible c est le type d utilisateur que je desire 
      lui montrer le document
    */
   function check($id_type,$userid,$id_type_cible) {

     //we check the user permissions first
     if(!$this->user_permissions($id_type,$userid,$id_type_cible)) {
        return false;
     }

     return true;

   }

   function user_permissions($id_type,$userid,$id_type_cible) {
$f=db::GetInstance()->get("SELECT COUNT(*) AS count FROM compte WHERE ID_TYPE='$id_type' AND ID_LOCAL_COMPTE='$userid' ")[0]->count;


     if($f>0) {
$f=db::GetInstance()->get("SELECT * FROM compte WHERE ID_TYPE='$id_type' AND ID_LOCAL_COMPTE='$userid' ");

   if($f['id_type']!=$id_type_cible) {
     return false;
   }
   
   return true;

     }
     $this->setUserEmpty('true');

     return true;
     
   }

   function setUserEmpty($val) {
     $this->userEmpty = $val;
}

function isUserEmpty() {
   return $this->userEmpty;
}


}
?>

