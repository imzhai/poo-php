<!-- 
    Intégrer un page html avec bootstrap
    Ajouter un formulaire permettant de créer un superhéro
        -> champs : name (input), power (input), identity (input), universe (select)
    Ajouter le traitement du formulaire :
        - Quand le formulaire est soumis, on récupère les données dans $_POST
        - Apartir des données, créer instance de superHeroes et hydrater celle ci.-
        - Reprendre la requête SQL pour créer un super héros et on l'adapte pour pouvoir ajouter l'instance créée précédemment
-->

<?php include 'partials/header.php' ?>


    <div class="container">
    <?php 
        // $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL
        var_dump($_SERVER['REQUEST_METHOD']);
        if($_SERVER['REQUEST_METHOD'] === "POST")
        { 
            require_once 'SuperHeroe.php';
            // $_POST permet de récupérer les données du formulaire
            $superHeroe = new SuperHeroe();
            $superHeroe->hydrate($_POST); // Hydrate l'objet avec les données du formulaire
            // $superHeroe->name = isset($_POST['name']) ? trim(htmlentities($_POST['name'])) : null;
            // $superHeroe->power = isset($_POST['power']) ? trim(htmlentities($_POST['power'])) : null;
            // $superHeroe->identity = isset($_POST['identity']) ? trim(htmlentities($_POST['identity'])) : null;
            // $superHeroe->universe = isset($_POST['universe']) ? trim(htmlentities($_POST['universe'])) : null;

            // connexion PDO

            // $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
            //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL

            // Vérification des données
                // ...
            // $superHeroe->save();
            if ($superHeroe->save())
            {
                echo ' <div class="alert alert-success">Le héros a bien été ajouté</div>';
            }   
            
            //Préparare la requête pour insérer le héros
            // $sql = "INSERT INTO superheroe (name, power, identity, universe) VALUES (:name, :power, :identity, :universe)";
            // $query = $db->prepare($sql);

            // $query->bindValue(':name',$superHeroe->name);
            // $query->bindValue(':power',$superHeroe->power);
            // $query->bindValue(':identity',$superHeroe->identity);
            // $query->bindValue(':universe',$superHeroe->universe);

            // $query->execute();
    }
?>
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

<?php include 'partials/footer.php' ?>

