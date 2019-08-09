<?php
require_once 'config/autoload.php';
include 'partials/header.php';


// Traitement des données envoyées en formulaire.
// La condition sert a récupérer les data envoyés en méthode post
// Si dans la superglobale $_SERVER, dans le tableau REQUEST_METHOD, celle-ci est bien en post alors execute le code

if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $superVilain = new SuperNaughty();
        $superVilain->hydrate($_POST);

        if($superVilain->save())
        {
            echo '<div class="alert alert-success">Le super Vilain a bien été ajouté</div>';
        }
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
                    <option value="Marvel">Marvel</option>
                    <option value="DC">DC</option>
                </select>
            </div>

            <button type="submit" class="btn btn-secondary">Envoyer </button>
        </form>
    </div>

    <?php include 'partials/footer.php' ?>