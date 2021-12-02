<?php
// header
global $db, $hlp;
if (!isset($_SESSION['idqrcodeprofil'])) {
    header("location:scanner");
}
$targetInfo = $hlp->idInfo($_SESSION['idqrcodeprofil']);

include 'template/header.php';
?>
<link href="styles/addPoints.css" rel="stylesheet">


<div class="user">
    <!--  VARIABLE A CHANGER SELON LE QRCODE test SCANNé-->
    <p><?= $targetInfo['lname'] ?></p>
    <p><?= $targetInfo['fname'] ?></p>
    <p><?= $targetInfo['points'] ?></p>


</div>

<button class="button1"><a href="scanner
">Scanner une autre carte <br />
        de fidélité</a>
</button>
<?php
// footer
include 'template/footer.php';
?>