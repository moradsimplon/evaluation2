<?php
/**
 * Created by PhpStorm.
 * User: morad
 * Date: 29/11/17
 * Time: 11:52
 */

// include manager for user
require("UsersManager.php");
// include manager for book
require("BookManager.php");



// *******function for autoload class

function chargerClasse($classe)
{
    require '../entities/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


?>
