<?php
include("template/header.php");
$Books= $manager->getBooks();

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
            <th>Title</th>
            <th>Author</th>
            <th>Realease date</th>
            <th>Abstract</th>
            <th>Category</th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($Books as $key => $Book)
        {
            ?>
            <tr>

                <td>
                    <a href="Books.php?id=<?=  $Book->getId(); ?>"><?= $Book->getId(); ?> </a>
                </td>
                <td>
                    <a href="Books.php?id=<?=  $Book->getId(); ?>"><?= $Book->getTitle(); ?> </a>
                </td>
                <td>
                    <a href="Books.php?id=<?= $Book->getId(); ?>"><?= $Book->getAuthor(); ?> </a>
                </td>
                <td>
                    <a href="Books.php?id=<?= $Book->getId();?>" class="" title=""><?= $Book->getRealeaseDate(); ?></a>
                </td>
                <td>
                    <a href="Books.php?id=<?= $Book->getId();?>" class="" title=""><?= $Book->getResume(); ?></a>
                </td>
                <td>
                    <a href="Books.php?id=<?= $Book->getId();?>" class="" title=""><?= $Book->getCategory(); ?></a>
                </td>
                <td>
                    <form action="Book.php" method="post" class="" style="">
                        <input name="show" type="hidden" value="<?= $Book->getId();?>"/>
                        <input class="btn btn-primary" id="" type="Submit" name="" value="Show"/>
                    </form>
                </td>
                <td>
                    <form action="Books.php" method="post" class="" style="">
                        <input name="delete" type="hidden" value="<?= $Book->getId();?>"/>
                        <input class="btn btn-danger" id="" type="Submit" name="" value="Supprimer"/>
                    </form>
                </td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
    <a href="Form.php" class="btn btn-success">Add Book</a>

</section>
