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
<!--main page -->
<!--button return last page -->
<a href="Books.php" class="btn btn-danger m-2">RETURN</a>
<section class="container ">

    <!-- ********************************  -->
    <form action="Books.php" method="post">


        <!--dropdown for select category -->
        <select name="category" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"id="">
            <?php
            foreach (ListBook::category as $value){

            ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php
            }
            ?>
        </select>
        <input type="submit" class="btn btn-secondary" name="sort" value="Sort">

    </form>
    <!--table for see all books -->
    <table class="table  table-responsive">
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
                    <!--button delete -->
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
    <!--button for redirect on form for add book -->
    <a href="Form.php" class="btn btn-success">Add Book</a>

</section>

