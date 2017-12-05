<?php

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<?php
//Autoloader file
require '../model/Autoloader.php';

// call PDO and create new class manager for book
$manager= New BookManager();
// call PDO and create new class manager for User
$managerUser = new UsersManager();


//show account
if(isset($_POST['show'])){
    $oneBook= $manager->getBook($_POST['show']);
    $onceBook = new ListBook($oneBook);
}
if (empty($_POST['show'])) {

    echo 'veuillez selectionner un compte';
}

// add codeUser in BorrewedBook
if (isset($_POST['BorrowerUse']) ) {
    if (isset($_POST['Borrowed'])) {

       $borrowUse = $managerUser->getUser($_POST['BorrowerUse']);
        $User = new ListUsers($borrowUse);
$onceBook->setBorrowedBook($User->getCodeUser());

        $manager->addBorrowUse($onceBook);

    }
}

// clean BorrowedBook if the book return
if (isset($_POST['ReturnBook'])){
    $onceBook->setBorrowedBook(NULL);

    $manager->addBorrowUse($onceBook);
}

// view one book
include('../views/BookView.php');