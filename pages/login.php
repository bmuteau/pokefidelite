<?php
// header
global $hlp, $db;
$result = -1;
$error = "";
$hlp->disconnected();


if (isset($_POST['login'])) {
    $result = $hlp->connexion($_POST['mail'], $_POST['password']);
}
if ($result > -1) {
    if ($result == 0) {
        header("location:home");
    } else if ($result == 1) {
        // Mot de passe incorect
        $error = " Le mot de passe est incorrect ! ";
    } else if ($result == 2) {
        // pas de compte
        $error = "Le compte n'existe pas !";
    } else {
        // erreur de connexion   
        $error = "Il y'a une erreur de connexion!";
    }
}

include 'template/header.php';


?>
<title>Se connecter à son compte</title>
<link href="styles/connexionregister.css" rel="stylesheet">
<p class="cf">Mon compte de <br /> fidélité</p>


<form class="loginplace" method="POST">

    <label>Email</label>
    <input name="mail" type="email" style="font-size: 51px;" value="EMAIL" autocomplete="off" onclick="javascript:this.value = '';" requiered>
    <label>Mot de passe</label>
    <input name="password" type="password" style="font-size: 51px;" value="MOT DE PASSE" autocomplete="off" onclick="javascript:this.value = '';" required>
    <span class="psw"><a href="mdpoublie">Mot de passe oublié ?</a></span>
    <?php
    if ($result > 0) {
    ?>
        <div class="error2"><?= $error ?></div>
    <?php
    }
    ?>

    <input name="login" type="submit" class="login" value="Se connecter">

</form>

<a href="register" class="already2">Je n'ai pas de compte ! </a>
<?php
// footer
include 'template/footer.php';
?>