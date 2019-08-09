<?php

require_once 'Database.php';
 include 'partials/header.php'; ?>

<?php
 
 $superNaughtys = SuperNaughty::findAll();


 ?>

<div class="container ">
    <table class="table table-light mt-5 shadow p-3 mb-5 bg-white rounded">
        <thead class="thead-light text-center">
            <tr>
               
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Nom</th>
                <th scope="col">Nuisance</th>
                <th scope="col">Identité</th>
                <th scope="col">Univers</th>
                <th scope="col" class=" ml-0">Actions</th>
                
            </tr>
        </thead>
        <tbody class="text-center">
            <?php foreach($superNaughtys as $superNaughty): ?>
                <tr>
                    <th scope="row"><?= $superNaughty->id ?></th>
                    <td> Photo </td>
                    <td> <?= $superNaughty->name ?> </td>
                    <td><?= $superNaughty->hobby ?></td>
                    <td><?= $superNaughty->identity ?></td>
                    <td><?= $superNaughty->universe ?></td>  
                    <td>
                        <a class="btn btn-secondary rounded center" href=""> Révéler</a>
                        <a class="btn btn-primary rounded center" href="./edit-naughty.php?id=<?= $superNaughty->id ?>">Modifier</a>   
                        <a class="btn btn-danger rounded center" href="./delete-naughty.php?id=<?= $superNaughty->id ?>">supprimer</a>                       

                    </td>               

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>







<?php include 'partials/footer.php' ?>
