<?php
include("template/header.php");

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

?>



<div class="card col-md-3">


    <label for="">Add Book</label>
    <form action="Form.php" method="post" id="formAddBook" class="form-group" style="display:hidden" >
        <div class="card-block">
            <input name="Title" type="text" value="" placeholder="Title book" class="form-control" /> <br/>
            <input name="Author" type="text" value="" placeholder="Author book's" class="form-control" /> <br/>
            <input name="RealeaseDate" type="date" value="" placeholder="Realease Date" class="form-control" /> <br/>
            <input name="Resume" type="text" value="" placeholder="Resume Book" class="form-control" /> <br/>
            <input name="Category" type="text" value="" placeholder="Category" class="form-control" /> <br/>
            <input type="submit" name="SubmitAdd" value="Create" class="btn btn-primary" >
    </form>
</div>

