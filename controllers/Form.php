<?php
require '../model/Autoloader.php';
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

$manager= New BookManager();
$books = $manager->getBooks();

if (isset($_POST['Title']) && isset($_POST['Author']) && isset($_POST['RealeaseDate'])
    && isset($_POST['Resume']) && isset($_POST['Category'])){
    if(isset($_POST['SubmitAdd'])){
        $book = new ListBook($_POST);
        $manager->addBooks($book);
        header('Location: Books.php');

    }
}

include('../views/FormView.php');