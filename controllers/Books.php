<?php

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<?php
//Autoloader
require '../model/Autoloader.php';
// call PDO and create new class manager for book
$manager= New BookManager();
// call all books
$Books = $manager->getBooks();

// function for sort book
if (isset($_POST['sort'])){

$Books = $manager->selectBook($_POST['category']);

}
// function for delete book
if (isset($_POST['delete'])) {

    $Supp = $manager->getBook($_POST['delete']);
    $bookSupp = New ListBook ($Supp);
    $manager->deleteBook($bookSupp);

}

//view all books
include('../views/BooksView.php');