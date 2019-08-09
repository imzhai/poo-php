<?php

/**
 * Reprendre le header et le footer pour les mettre dans deux fichiers distinct header.php et footer.php
 * 
 * Créer tableau HTML avec bootstrap.
 * Afficher liste des superhéros présents dans la bdd
 */

 include 'partials/header.php' ?>
<?php

     

        // Récupère la base de données
        $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL

        $sql = "SELECT id, name, power, identity, universe FROM superheroe ";

        $query = $db->prepare($sql);
        $query->execute();

        $superHeroes = $query->fetchAll(PDO::FETCH_OBJ);

    

?>

<div class="container ">
    <table class="table table-light mt-5 shadow p-3 mb-5 bg-white rounded">
        <thead class="thead-light text-center">
            <tr>
               
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Nom</th>
                <th scope="col">Pouvoir</th>
                <th scope="col">Identité</th>
                <th scope="col">Univers</th>
                <th scope="col" class=" ml-0">Actions</th>
                
            </tr>
        </thead>
        <tbody class="text-center">
            <?php foreach($superHeroes as $superHeroe): ?>
                <tr>
                    <th scope="row"><?= $superHeroe->id ?></th>
                    <td> Photo </td>
                    <td> <?= $superHeroe->name ?> </td>
                    <td><?= $superHeroe->power ?></td>
                    <td><?= $superHeroe->identity ?></td>
                    <td><?= $superHeroe->universe ?></td>  
                    <td>
                        <a class="btn btn-secondary rounded center" href=""> Révéler</a>
                        <a class="btn btn-primary rounded center" href="./edit.php?id=<?= $superHeroe->id ?>">Modifier</a>   
                        <a class="btn btn-danger rounded center" href="./delete.php?id=<?= $superHeroe->id ?>">supprimer</a>                       

                    </td>               

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>







<?php include 'partials/footer.php' ?>
