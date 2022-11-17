<?php
//$id = fopen("C:\Users\amine\Desktop\log\log.txt", "a");
$id = fopen("etudiants.txt", "a");
if ($id==false) {
    die("Erreur lors douverture de fichier");
} else {
    flock($id, LOCK_EX);
    fwrite($id, "Bonjour GK"."\n");
    flock($id, LOCK_UN);

    $r=fclose($id);
    if ($r==false) {
        die("Erreur lors de la fermeture du fichier");
    }
}


?>
