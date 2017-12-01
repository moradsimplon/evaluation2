<?php

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<?php
require '../model/Autoloader.php';
$manager= New BookManager();
$books = $manager->getBooks();


if (isset($_POST['delete'])) {

    $Supp = $manager->getBook($_POST['delete']);
    $bookSupp = New ListBook ($Supp);
    $manager->deleteBook($bookSupp);

}

include('../views/BooksView.php');