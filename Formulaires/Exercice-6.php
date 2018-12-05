<?php

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <form method="post" action="Exercice-6.php" style="display:block" id="form">
            <label>Civilité :</label>
            <select name="civilite" id="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <label>Nom :</label> <input name="nom" type="text" id="nom"/>
            <label>Prenom :</label><input name="prenom" type="text" id="prenom"/>
            <input type="submit" id="submit"/>
        </form>
    </body>
</html>

<?php
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $civilite = $_POST['civilite'];
    echo "Bonjour " . $civilite . " " . $prenom . " " . $nom . "!";
?>

<script>

//let civilite = document.querySelector("#civilite").value;
//let nom = document.querySelector("#nom").value;
//let prenom = document.querySelector("#prenom").value;
let civilite = <?php echo json_encode($civilite); ?>;
let nom = <?php echo json_encode($nom); ?>;
let prenom = <?php echo json_encode($prenom); ?>;
console.log(civilite + nom + prenom);
if (civilite!=undefined & nom!="" & prenom!="") {
    document.querySelector("#form").style = "display:none";
} else {
    document.querySelector("#form").style = "display:block";
}
</script>