<?php
/**
 *création d'une session
 *
 * @author LAMSSAOUI Siham && TADILI Ali
 */
session_start();
/**
 *inclure le fichier autoload.php qui recupere les classes
 */
require_once "autoload.php";

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
?>
