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
$manager= New UsersManager();
$users = $manager->getUsers();

if (isset($_POST['delete'])) {
    $userSupp = $manager->getUser($_POST['delete']);

    $userSupp = new ListUsers ($userSupp);
    $manager->deleteUsers($userSupp);

}


include('../views/UsersView.php');
