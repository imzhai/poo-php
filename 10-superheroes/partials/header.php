<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>

</head>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./list.php">Super heroes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./list.php">Les héros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./create.php">Créer un héro</a>
                </li>
                <!-- 
                     1/ Créer une classe SuperNaughty avec attributs : 
                        name
                        identity
                        hobby
                        universe
                     2/créer table SuperNaughty avec les colonne:
                        id, name, identity, hobby et universe
                    3/ créer formulaire permettant d'ajouter un super vilain ( create-naughty.php)
                    4/ créer tableau HTML listant les supers vilains (list-naughty.php)

                
                -->
                <li class="nav-item active">
                    <a class="nav-link" href="./list-naughty.php">Les vilains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./create-naughty.php">Créer un vilain</a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<body>