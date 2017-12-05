<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<?php
// Autoloader file php
require '../model/Autoloader.php';
// call PDO for Users
$manager= New UsersManager();
// call for all users
$users = $manager->getUsers();

//function for delete
if (isset($_POST['delete'])) {
    $userSupp = $manager->getUser($_POST['delete']);
    $userSupp = new ListUsers ($userSupp);
    $manager->deleteUsers($userSupp);

}

// views users pages
include('../views/UsersView.php');
