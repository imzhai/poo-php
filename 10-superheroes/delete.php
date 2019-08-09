<?php 
 include 'partials/header.php'; 

    // Récupère la base de données / connexion avec PDO
        // $db = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ]); // Activer les erreurs MySQL
    require_once 'Database.php'

   $db = Database::get();
   


    // Récupération de l'ID
    $id = isset($_GET['id']) ? trim($_GET['id']) : null;



    // Le select sert uniquement à faire une confirmation en mettant le nom du héro sélectionné dedans
    if(ctype_digit($id))
    {
        $sql = "SELECT * FROM superheroe WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();

        $superHeroe = $query->fetch(PDO::FETCH_OBJ); // $film->title

        // Cette condition permet d'arrêter le script si l'id dans l'url ne correspond à rien 
        if($superHeroe == false){
            header("location: list.php");
        }

        $name = $superHeroe->name;

        
    }

       // Suppression du Héro puis redirection
       if ($_SERVER['REQUEST_METHOD'] === "POST" )
       {
            $sql = "DELETE FROM superheroe WHERE id=:id";
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
                // Permet de rediriger vers la page list
            header("location: list.php");
            exit;
       }
?>


<div class="container">
    <div class="card text-center">
        <div class="card-boby">
            <h5 class="card-title"> Suppression</h5>
            <p class="card-text"> Voulez vous vraiment supprimer ce pauvre <?= $name ?> de votre base de donnée ? </p>
            <form action="" method="post">
                <button type="submit" class="btn btn-danger">OUI, je le veux</button>
            </form>
            <a href="list.php" class="btn btn-secondary"> NON</a>

        </div>
    </div>
</div>
       
<?php include 'partials/footer.php'; ?>
