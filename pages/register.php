<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';

?>
<link href="../styles/connexionregister.css" rel="stylesheet">
<p class="cf">Compte de fidélité</p>


<form>
    <p class="rules">Tout les champs sont obligatoires</p>
    <label>Nom</label>
    <input type="text" style="font-size: 51px;" required>
    <label>Prénom</label>
    <input type="text" style="font-size: 51px;" required>
    <label>Email</label>
    <input type="email" style="font-size: 51px;" value="" autocomplete="off" requiered>
    <label>Mot de passe</label>
    <input type="password" style="font-size: 51px;" value="" autocomplete="off" required>
    <label>Code postal</label>
    <input type="number" style="font-size: 51px;" required>

    <!-- NEED CAPTCHA -->
    <input type="submit" class="submitsend" value="S'inscrire">



</form>

<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>
<p class="mlu">Mention légales d'utilisation</p>