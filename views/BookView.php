<?php
include("template/header.php");



?>
<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<a href="Books.php" class="btn btn-danger m-2">RETURN</a>
<!--main page -->
<section class="container">

    <!-- ***********account selected*********************  -->

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Realease date</th>
            <th>Abstract</th>
            <th>Category</th>
            <th>Borrowed Book</th>
        </tr>
        </thead>

        <tbody>

            <tr>

                <td>
                    <a href="Book.php?id=<?=  $onceBook->getId(); ?>"><?= $onceBook->getId(); ?> </a>
                </td>
                <td>
                    <a href="Book.php?id=<?=  $onceBook->getId(); ?>"><?= $onceBook->getTitle(); ?> </a>
                </td>
                <td>
                    <a href="Book.php?id=<?= $onceBook->getId(); ?>"><?= $onceBook->getAuthor(); ?> </a>
                </td>
                <td>
                    <a href="Book.php?id=<?= $onceBook->getId();?>" class="" title=""><?= $onceBook->getRealeaseDate(); ?></a>
                </td>
                <td>
                    <a href="Book.php?id=<?= $onceBook->getId();?>" class="" title=""><?= $onceBook->getResume(); ?></a>
                </td>
                <td>
                    <a href="Book.php?id=<?= $onceBook->getId();?>" class="" title=""><?= $onceBook->getCategory(); ?></a>
                </td>
                <td>
                    <a href="Book.php?id=<?= $onceBook->getId();?>" class="" title=""><?= $onceBook->getborrowedBook(); ?></a>
                </td>
                <td>
                    <form action="Books.php" method="post" class="" style="">
                        <input name="delete" type="hidden" value="<?= $onceBook->getId();?>"/>
                        <input class="btn btn-danger" id="" type="Submit" name="" value="Supprimer"/>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>

</section>
