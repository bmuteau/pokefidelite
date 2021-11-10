<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';

?>
<link href="styles/connexionregister.css" rel="stylesheet">
<p class="cf">Compte de fidélité</p>


<form>
    <p class="rules">Tous les champs sont obligatoires</p>
    <label>Nom</label>
    <input type="text" style="font-size: 51px;" value="NOM" onclick="javascript:this.value = '';" required>
    <label>Prénom</label>
    <input type="text" style="font-size: 51px;" value="PRENOM" onclick="javascript:this.value = '';" required>
    <label>Email</label>
    <input type="email" style="font-size: 51px;" value="EMAIL" autocomplete="off" onclick="javascript:this.value = '';" requiered>
    <label>Mot de passe</label>
    <input type="password" style="font-size: 51px;" value="MOT DE PASSE" autocomplete="off" onclick="javascript:this.value = '';" required>
    <label>Code postal</label>
    <input type="number" style="font-size: 51px;" value="12345" onclick="javascript:this.value = '';" required>

    <!-- NEED CAPTCHA -->
    <input type="submit" class="submitsend" value="S'inscrire">



</form>

<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>
<p class="mlu">Mention légales d'utilisation</p>