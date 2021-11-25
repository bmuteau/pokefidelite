<?php
// header
include 'C:\wamp64\www\pokefidelite\template\header.php ';

global $db, $hlp;
if (!isset($_SESSION['userTargetId'])) {
    header('location:scanner');
}

if (isset($_POST['addPoint'])) {
    $hlp->addPoint($_SESSION['userTargetId'], $_POST['points']);
    unset($_SESSION['userTargetId']);
    header('location:scanner');
}


?>
<link href="styles/addPoints.css" rel="stylesheet">

<img src="src/iconfinder_qrcode_7124082.svg" class="qrcode">

<h2>Nombre de points à <br />
    ajouter:
</h2>
<form method="POST">
    <input type="number" value="1" name="points" required>

    <button class="button1" name="addPoint">OK
    </button>
</form>
<?php
// footer
include 'C:\wamp64\www\pokefidelite\template\footer.php';
?>