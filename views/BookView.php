<?php
include("template/header.php");

$managerUse=new UsersManager();
$users= $managerUse->getUsers();


?>
<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>
<!--button for return last page -->
<a href="Books.php" class="btn btn-danger m-2">RETURN</a>
<!--main page -->
<section class="container">

    <!-- *******************************  -->
    <!--table with show one book-->
    <table class="table  table-responsive">
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

    <!--condition for see one button in function the situation (if boorrower is null or no we watch this button )-->
    <?php if($onceBook->getBorrowedBook()==NULL){
    ?>

    <form action="Book.php" method="post">
        <select name="BorrowerUse" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <?php
            foreach ($users as $key => $user)
            {
            ?>
            <option value="<?=$user->getId()?>"><?= $user->getCodeUser(); ?></option>

                <?php
            }
            ?>
        </select>

        <input type="hidden" name="show" value="<?=  $onceBook->getId()?>">
        <input type="Submit" class="btn btn-secondary" name="Borrowed" value="Borrow" >
    </form>
<?php } else { ?>
    <form action="Book.php" method="post">

        <input type="hidden" name="show" value="<?=  $onceBook->getId()?>">
        <input type="Submit" class="btn btn-secondary" name="ReturnBook" value="Return Book" >
    </form>
    <?php } ?>
    </section>
