<?php
// header


include 'C:\wamp64\www\pokefidelite\template\header.php ';

?>
<link href="styles/dlqrcode.css" rel="stylesheet">
<a href="home"><img src="src/iconfinder_home_216242.svg" class="home"></a>
<h1>Télécharger votre QrCode</h1>


<!-- QRCODE Généré et affiché ici -> 1 QrCode par adresse mail  -->

<button class="dl"><a href="qrcode" download="qrcode">Télécharger le QrCode ! </a></button>
<p class="text1">Vous pourrez le retrouvez sur la page d'accueil de votre profil</p>

<p class="text2"><a href="fonction">Retrouvez le fonctionnement de la carte de fidélité en cliquant ICI</a></p>
<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>