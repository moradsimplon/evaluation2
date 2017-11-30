<?php
include("template/header.php");
$users= $manager->getUsers();

?>
<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<!--main page -->
<section class="container">

    <!-- ***********account selected*********************  -->

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>code user</th>
            <th>name</th>
            <th>firstname</th>
            <th>Adress</th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($users as $key => $users)
        {
        ?>
        <tr>

            <td>
                <a href="Users.php?id=<?=  $users->getId(); ?>"><?= $users->getId(); ?> </a>
            </td>
            <td>
                <a href="Users.php?id=<?=  $users->getId(); ?>"><?= $users->getCodeUser(); ?> </a>
            </td>
            <td>
                <a href="Users.php?id=<?= $users->getId(); ?>"><?= $users->getName(); ?> </a>
            </td>
            <td>
                <a href="Users.php?id=<?= $users->getId();?>" class="" title=""><?= $users->getFirstname(); ?></a>
            </td>
            <td>
                <a href="Users.php?id=<?= $users->getId();?>" class="" title=""><?= $users->getAdress(); ?></a>
            </td>
            <td>
            <form action="Users.php" method="post" class="" style="">
                <input name="delete" type="hidden" value="<?= $users->getId();?>"/>
                <input class="btn btn-danger" id="" type="Submit" name="" value="Supprimer"/>
            </form>
            </td>
        </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
</section>


