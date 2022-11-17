<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


<h3 class="text-center text-secondary mt-5">Formulaire d'inscription</h3>


    <section class="d-flex justify-content-center mt-5">

           <div class="w-25">
           <!-- 
        <form action="" method="POST">
            <input type="text" name="nom1" value="ME">

        </form> -->
            <form action="" method="post">

                <div class="mb-3">
                    <label for="enom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
                <div class="mt-3">
                    <input type="submit" class="btn btn-secondary w-100" value="Enregistrer">
                </div>

            </form>
        </div>

    </section>

    <?php
    if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email'])) {

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $today = $today=date("H:i:s");
        $id = fopen("inscription.txt", "a");
        if ($id == false) {
            die("Erreur lors douverture de fichier");
        } else {
            flock($id, LOCK_EX);
            fwrite($id, "$nom';'$prenom';'$email';'$today "."\n");

            flock($id, LOCK_UN);

            $r = fclose($id);
            if ($r == false) {
                die("Erreur lors de la fermeture du fichier");
            }
        }
    }
    ?>

</body>

</html>