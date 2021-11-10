<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';

?>
<link href="../styles/connexionregister.css" rel="stylesheet">
<p class="cf">Mon compte de <br /> fidélité</p>


<form class="loginplace">

    <label>Email</label>
    <input type="email" style="font-size: 51px;" value="EMAIL" autocomplete="off" onclick="javascript:this.value = '';" requiered>
    <label>Mot de passe</label>
    <input type="password" style="font-size: 51px;" value="MOT DE PASSE" autocomplete="off" onclick="javascript:this.value = '';" required>

    <input type="submit" class="login" value="Se connecter">
</form>


<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>
<p class="mlu">Mention légales d'utilisation</p>