<?php
// header


include 'template/header.php';

?>
<title>Télécharger son QrCode</title>
<link href="styles/dlqrcode.css" rel="stylesheet">
<a href="home"><img src="src/home.png" class="home"></a>



<!-- QRCODE Généré et affiché ici -> 1 QrCode par adresse mail  -->

<button class="dl"><a href="qrcode" download="qrcode">Télécharger son QrCode </a></button>
<p class="text1">Vous le retrouverez sur la page d'accueil de votre compte</p>
<p class="text3">ASTUCE <br />
    Faites une capture d'écran de QrCode pour l'avoir à portée de main même sans connexion internet</p>
<p class="text2"><a href="fonction">Retrouvez le fonctionnement de la carte de fidélité en cliquant ICI</a></p>
<?php
// footer
include 'template/footer.php';
?>