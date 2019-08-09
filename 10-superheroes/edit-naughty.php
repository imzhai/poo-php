<?php
require_once 'config/autoload.php';
include 'partials/header.php';

$db = Database::get();

$id = isset($_GET['id']) ? trim($_GET['id']) : null;

    // On récupère le vilain qui va être modifié
    $superNaughty = SuperNaughty::find($id);


    if($_SERVER['REQUEST_METHOD'] === "POST")
    {   // modifier les données du fomulaire
        $superNaughty = new SuperNaughty();
        $superNaughty->hydrate($_POST);

        if ($superNaughty->update($id))
        {
            echo '<div class="alert alert-succes">Le vilain a bien été modifié</div>';
        }
  

        header("location: list-naughty.php");
        exit;
    }

?>

<div class="container">
        <form method="post">
            <div class="form-group">
                <label for="name">Nom du Vilain</label>
                <input type="text" name="name" class="form-control" placeholder="Le nom du Vilain" id="name">
            </div>

            <div class="form-group">
                <label for="hobby">Nuisance du Vilain</label>
                <input type="text" name="hobby" class="form-control" placeholder="La nuisance du Vilain" id="hobby">
            </div>

            <div class="form-group">
                <label for="identity">L'identité du Vilain</label>
                <input type="text" name="identity" class="form-control" placeholder="L'identité du Vilain" id="identity">
            </div>
            <div class="form-group">
                <label for="universe">L'univers du Vilain</label>
                <select class="form-control" name="universe" id="universe">
                    <option value="Marvel" <?= ($superNaughty->universe === 'Marvel') ? 'selected' : '';?>>Marvel</option>
                    <option value="DC" <?= ($superNaughty->universe === 'DC') ? 'selected' : '';?>>DC</option>
                </select>
            </div>

            <button type="submit" class="btn btn-secondary">Envoyer </button>
        </form>
    </div>

    <?php include 'partials/footer.php' ?>