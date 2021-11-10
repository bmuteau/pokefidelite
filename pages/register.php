<?php
global $db, $hlp;
$result = -1;
$error = "";

// header
if (isset($_POST['sendregister'])) {
    $result = $hlp->createAccount($_POST['mail'], $_POST['fname'], $_POST['lname'], $_POST['password'], $_POST['postal']);
}
if ($result > -1) {
    if ($result == 0) {
        header("location:dlqrcode");
    } else if ($result == 1) {
        // Mail deja utilisé
        $error = " Adresse mail déjà utilisée ! ";
    } else if ($result == 2) {
        // erreur de connexion a la bdd
        $error = "Erreur de connexion !";
    } else {
        // Le compte n'a pas était crée 
        $error = "Le compte n'a pas été créé!";
    }
}


include 'C:\wamp64\www\pokefidelite\template\header.php ';



?>
<link href="styles/connexionregister.css" rel="stylesheet">
<p class="cf">Compte de fidélité</p>


<form method="POST">
    <p class="rules">Tous les champs sont obligatoires</p>
    <label>Nom</label>
    <input name="lname" type="text" style="font-size: 51px;" value="NOM" onclick="javascript:this.value = '';" required>
    <label>Prénom</label>
    <input name="fname" type="text" style="font-size: 51px;" value="PRENOM" onclick="javascript:this.value = '';" required>
    <label>Email</label>
    <input name="mail" type="email" style="font-size: 51px;" value="EMAIL" autocomplete="off" onclick="javascript:this.value = '';" requiered>
    <label>Mot de passe</label>
    <input name="password" type="password" style="font-size: 51px;" value="MOT DE PASSE" autocomplete="off" onclick="javascript:this.value = '';" required>
    <label>Code postal</label>
    <input name="postal" type="number" style="font-size: 51px;" value="12345" onclick="javascript:this.value = '';" required>

    <!-- NEED CAPTCHA -->
    <?php
    if ($result > 0) {
    ?>
        <div class="error"><?= $error ?></div>
    <?php
    }
    ?>
    <input name="sendregister" type="submit" class="submitsend" value="S'inscrire">
    <a href="login" class="already">J'ai déjà un compte ! </a>


</form>

<?php

// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>
<p class="mlu">Mention légales d'utilisation</p>