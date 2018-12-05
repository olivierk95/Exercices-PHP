<?php

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="post" action="Exercice-8.php" style="display:block" id="form">
            <label>Civilité :</label>
            <select name="civilite" id="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <label>Nom :</label> <input name="nom" type="text"/>
            <label>Prenom :</label><input name="prenom" type="text"/>
            <input type="file" name="file" />
            <input type="submit"/>
        </form>
    </body>
</html>

<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $civilite = $_POST['civilite'];
    $file = $_POST['file'];
    $extension_valide = "pdf";
    $extension_upload = strtolower(substr(strrchr($file , '.'), 1));
    echo $civilite . " " . $prenom . " " . $nom . " a bien téléchargé le fichier " . $file;
?>

<script>

let civilite = <?php echo json_encode($civilite); ?>;
let nom = <?php echo json_encode($nom); ?>;
let prenom = <?php echo json_encode($prenom); ?>;
let file = <?php echo json_encode($file); ?>;
let valide = <?php echo json_encode($extension_valide); ?>;
let upload = <?php echo json_encode($extension_upload); ?>;

if (civilite!=undefined & nom!="" & prenom!="" & valide==upload) {
    document.querySelector("#form").style = "display:none";
} else {
    document.querySelector("#form").style = "display:block";
}
</script>