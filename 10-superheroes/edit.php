<?php
 include 'partials/header.php'; 

 $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL

    // Récupération de l'ID
    $id = isset($_GET['id']) ? trim($_GET['id']) : null;

if($_SERVER['REQUEST_METHOD'] === "POST")
{
   $name = isset($_POST['name']) ? trim(htmlentities($_POST['name'])) : null;
   $power = isset($_POST['power']) ? trim(htmlentities($_POST['power'])) : null;
   $identity = isset($_POST['identity']) ? trim(htmlentities($_POST['identity'])) : null;
   $universe = isset($_POST['universe']) ? trim(htmlentities($_POST['universe'])) : null;

   $sql = "UPDATE superheroe SET `name`=:name, `power`=:power, `identity`=:identity, `universe`=:universe WHERE `id`=:id ";
   $query = $db->prepare($sql);

   $query->bindValue(':name',$name);
   $query->bindValue(':power',$power);
   $query->bindValue(':identity',$identity);
   $query->bindValue(':universe',$universe);
   $query->bindValue(':id', $id, PDO::PARAM_INT);

   $query->execute();

   header("location: list.php");
   exit;
}

if(ctype_digit($id))
{
    $sql ="SELECT * FROM superheroe WHERE id=:id";

    $query = $db->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);

    // Execution de la requete
    $query->execute();

    $superHeroe = $query->fetch(PDO::FETCH_OBJ);

}



?>


<div class="container">
    <form method="post">
            <div class="form-group">
                <label for="name">Nom du Héro</label>
                <input type="text" value="<?=$superHeroe->name?>" name="name" class="form-control" placeholder="" id="name">
            </div>

            <div class="form-group">
                <label for="power">Pouvoir du Héro</label>
                <input type="text" name="power" value="<?=$superHeroe->power?>" class="form-control" placeholder="" id="power">
            </div>

            <div class="form-group">
                <label for="identity">L'identité du Héro</label>
                <input type="text" name="identity" value="<?=$superHeroe->identity?>" class="form-control"  id="identity">
            </div>
            <div class="form-group">
                <label for="universe">Pouvoir du Héro</label>
                <select class="form-control" name="universe" id="universe">
                    <option value="Marvel">Marvel</option>
                    <option value="DC">DC</option>
                </select>
            </div>

            <button type="submit" class="btn btn-secondary">Modifier </button>
        </form>
    </div>
</div>
