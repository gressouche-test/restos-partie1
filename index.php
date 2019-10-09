<?php
include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
echo $fichier;
include "$racine/controleur/$fichier";

?>
     