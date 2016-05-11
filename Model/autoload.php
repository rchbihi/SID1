<?php

/**
 *classes est le dosier qui contient tous les classes exploiter dans le projet
 *
 * @author LAMSSAOUI Siham && TADILI Ali
*/
function autoload($class){
	require_once "classes/".$class.".php";
}

/**
 * Permet de charger les classes
 * S'execute avec les classes prend le nom d la classe
 */
spl_autoload_register("autoload");


?>