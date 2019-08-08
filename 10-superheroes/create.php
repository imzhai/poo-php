<!-- 
    Intégrer un page html avec bootstrap
    Ajouter un formulaire permettant de créer un superhéro
        -> champs : name (input), power (input), identity (input), universe (select)
    Ajouter le traitement du formulaire :
        - Quand le formulaire est soumis, on récupère les données dans $_POST
        - Apartir des données, créer instance de superHeroes et hydrater celle ci.-
        - Reprendre la requête SQL pour créer un super héros et on l'adapte pour pouvoir ajouter l'instance créée précédemment
-->
<?php 



    $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL

    $name = new SuperHeroe();
    $name->power = $power;
    $name->identity = $identity;
    $name->universe = $universe;
    

    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        // $_POST permet de récupérer les données du formulaire
    $name = isset($_POST['name']) ? trim(htmlentities($_POST['name'])) : null;
    $power = isset($_POST['power']) ? trim(htmlentities($_POST['power'])) : null;
    $identity = isset($_POST['identity']) ? trim(htmlentities($_POST['identity'])) : null;
    $universe = isset($_POST['universe']) ? trim(htmlentities($_POST['universe'])) : null;

    

    $sql = "INSERT INTO superheroe (name, power, identity, universe) VALUES (:name, :power, :identity, :universe)";
    $query = $db->prepare($sql);

    $query->bindParam(':name',$name);
    $query->bindParam(':power',$power);
    $query->bindParam(':identity',$identity);
    $query->bindParam(':universe',$universe);

    $query->execute();

    }

 

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="name">Nom du Héro</label>
                <input type="text" name="name" class="form-control" placeholder="Le nom du Héro" id="name">
            </div>

            <div class="form-group">
                <label for="power">Pouvoir du Héro</label>
                <input type="text" name="power" class="form-control" placeholder="Le pouvoir du Héro" id="power">
            </div>

            <div class="form-group">
                <label for="identity">L'identité du Héro</label>
                <input type="text" name="identity" class="form-control" placeholder="L'identité du Héro" id="identity">
            </div>
            <div class="form-group">
                <label for="universe">Pouvoir du Héro</label>
                <select class="form-control" name="universe" id="universe">
                    <option value="Marvel">Marvel</option>
                    <option value="DC">DC</option>
                </select>
            </div>

            <button type="submit" class="btn btn-secondary">Envoyer </button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>