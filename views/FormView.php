<?php
include("template/header.php");

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>

<a href="Books.php" class="btn btn-danger m-2">RETURN</a>


<div class="card col-md-3">


    <label for="">Add Book</label>
    <form action="Form.php" method="post" id="formAddBook" class="form-group" style="display:hidden" >
        <div class="card-block">
            <input name="Title" type="text" value="" placeholder="Title book" class="form-control" /> <br/>
            <input name="Author" type="text" value="" placeholder="Author book's" class="form-control" /> <br/>
            <input name="RealeaseDate" type="date" value="" placeholder="Realease Date" class="form-control" /> <br/>
            <input name="Resume" type="text" value="" placeholder="Resume Book" class="form-control" /> <br/>
            <div  class="form-group">
                <label for="exampleSelect1">Category</label>
                <select name="Category" class="form-control" >
                    <option>Thriller</option>
                    <option>Roman</option>
                    <option>History</option>
                    <option>literary</option>

                </select>
            </div> <br/>
            <input type="submit" name="SubmitAdd" value="Create" class="btn btn-primary" >
    </form>
</div>

