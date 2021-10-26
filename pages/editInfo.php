<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';

?>
<link href="../styles/home.css" rel="stylesheet">
<link href="../styles/connexionregister.css" rel="stylesheet">

<div class="menu-bg"></div>
<div class="menu-burger">☰</div>
<div class="menu-items">
    <div>• Accueil </div>
    <div>• Mes informations</div>
    <div>• Fonctionnement de la carte de fidélité </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <div>• Nous contacter</div>
    <div>• Mention légale </div>
    <div>• Politique de confidentialité</div>
</div>
<form class="form">
    <label>Nom</label>
    <input type="text" style="font-size: 51px;" value="NOM" required>
    <label>Prénom</label>
    <input type="text" style="font-size: 51px;" value="PRENOM" required>
    <label>Email</label>
    <input type="email" style="font-size: 51px;" value="EMAIL" autocomplete="off" requiered>
    <label>Mot de passe</label>
    <input type="password" style="font-size: 51px;" value="MOT DE PASSE" autocomplete="off" required>
    <label>Code postal</label>
    <input type="number" style="font-size: 51px;" value="CODE POSTAL" required>
</form>

<script src="../script/navbar.js"></script>

<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>