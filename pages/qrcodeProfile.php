<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';
?>
<link href="../styles/addPoints.css" rel="stylesheet">

<img src="../src/iconfinder_qrcode_7124082.svg" class="qrcode">

<div class="user">
    <!--  VARIABLE A CHANGER SELON LE QRCODE SCANNé-->
    <p>Nom</p>
    <p>Prénom</p>
    <p>Nombre de points</p>

</div>

<button class="button1"><a href="../pages/addPoints.php">Scanner une autre carte <br />
        de fidélité</a>
</button>
<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>