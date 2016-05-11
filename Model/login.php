<?php
/**
 *
 * @author LAMSSAOUI Siham && TADILI Ali
 */
require'get.php';
/**
 *fonction pour verfier est ce que le session est deja initialisé ou non
 */
public static function isLoggedIn(){
    return isset($_SESSION['user']) ? true : false;
  }
/**
 *fontion pour la creation d'une session  
 *    la redirection selon le type d'utilisateur authentifier
 */
 public function login($email,$password){
    $result = DB::GetInstance()->Get("SELECT BOOL_ADMIN FROM compte WHERE EMAIL = '".$email."' AND MOT_DE_PASSE= '".md5($password)."'");

if( $result>0 ){
    if($result['BOOL_ADMIN']==true) 
    {
    $_SESSION['user'] = get_compte($result['ID_LOCAL_COMPTE']);
    header("Location: admin.php");

   }
else  {
    $_SESSION['user'] = get_compte($result['ID_LOCAL_COMPTE']);
    header("Location: user.php"); 

    }    
}
else 
    header("Location: authentification.php"); 

}
?>