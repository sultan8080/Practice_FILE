<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="d-flex justify-content-center">
    <div class="w-50 mt-5 p-5 shadow border">
        <table class="table table-striped">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Les Horaires</th>
            </tr>

            <?php
            //$id = fopen("C:\Users\amine\Desktop\log\log.txt", "a");
            $id = fopen("inscription.txt", "r");
            while ($ligne = fgets($id)) {
                $tr = explode(";", $ligne);
                echo "<tr>
        <td>$tr[0] </td>
        <td>$tr[1] </td>
        <td>$tr[2] </td>
        <td>$tr[3] </td> </tr>";
            }
            fclose($id);
            ?>
        </table>
    </div>
</body>

</html>