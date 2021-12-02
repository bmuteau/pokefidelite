<?php
global $hlp, $db;
$_SESSION['points'] = $hlp->majpoint($_SESSION['email']);
if ($hlp->isConnected() == false) {
    header("location:connexionregister");
}
$nbreduc = 100 - $_SESSION['points'];

while ($nbreduc < 0) {
    $nbreduc += 100;
}

include 'template/header.php';

?>
<title>Accueil </title>
<link href="styles/home.css" rel="stylesheet">

<div class="menu-bg"></div>
<div class="menu-burger">☰</div>
<div class="menu-items">
    <div> <a href="home">• Accueil </a> </div>
    <div><a href="editInfo">• Mes informations</a></div>
    <div><a href="fonction">• Fonctionnement de la carte de fidélité </a></div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <div> <a href="https://www.pokegranville.fr/contact/">• Nous contacter</a></div>
    <div><a href="https://www.pokegranville.fr/mentions-legales/">• Mentions légale </a></div>
    <div><a href="https://www.pokegranville.fr/politique-de-confidentialite/">• Politique de confidentialité</a></div>
    <br />
    <br />
    <?php if ($hlp->isAdmin()) { ?>
        <div><a href="adminHome"> ESPACE ADMIN</div>

    <?php  } ?>
    <div><a href="connexionregister">• Se déconnecter</a></div>
</div>

<div class="content">
    <h2>Prochaine réduction dans : </h2>
    <p><span> &nbsp; <?= $nbreduc ?> points &nbsp; </span></p>
    <h2>=</h2>
    <p class="reduct">10% de réduction</p>
    <h2>Mes points actuels :</h2>
    <p><span style="font-size:100px;"> &nbsp;<?= $_SESSION['points'] ?> &nbsp; </span></p>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <p class="up"><a href="qrcode"><span>&nbsp;N'oubliez pas&nbsp;<br />
                &nbsp; de présenter votre QrCode &nbsp;<br />
                &nbsp;à chaque passage en&nbsp; </br>
                &nbsp; caisse&nbsp;</span></a></p>
</div>

<script src="script/navbar.js"></script>

<?php
// footer
include 'template/footer.php';
?>