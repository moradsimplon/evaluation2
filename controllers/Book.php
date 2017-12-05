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
$managerUser = new UsersManager();


//show account
if(isset($_POST['show'])){
    $oneBook= $manager->getBook($_POST['show']);
    $onceBook = new ListBook($oneBook);
}
if (empty($_POST['show'])) {

    echo 'veuillez selectionner un compte';
}


if (isset($_POST['BorrowerUse']) ) {
    if (isset($_POST['Borrowed'])) {

       $borrowUse = $managerUser->getUser($_POST['BorrowerUse']);
        $User = new ListUsers($borrowUse);
$onceBook->setBorrowedBook($User->getCodeUser());

        $manager->addBorrowUse($onceBook);

    }
}


if (isset($_POST['ReturnBook'])){
    $onceBook->setBorrowedBook(NULL);

    $manager->addBorrowUse($onceBook);
}


include('../views/BookView.php');