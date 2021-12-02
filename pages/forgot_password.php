<?php
global $db;

$messageE = "";
$messageG = "";

$connect = $db->connect();
if ($connect != null) {
    if (isset($_POST['email'])) {
        $stm = $connect->prepare("SELECT * FROM users WHERE email = ?");
        $stm->execute(array($_POST['email']));
        if ($stm->fetch()) {
            $password = uniqid();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


            $header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $subject = ' Poké Fidélité - Votre mot de passe a changer ';
            $message =
                "<html>
            <head>
            <meta charset=\"UTF-8\">

            <style>

.mail {
    text-align: center;
    font-family: \"Source Sans Pro\";
}
b {
    font-size: 35px;
}
.sign {
    text-align: right;
    position: absolute;
    right: 38%;
}
            </style>
            </head>

            <body>
<div class=\"mail\">

    
               Bonjour, voici votre nouveau mot de passe: 
               <br/>
               <br/>
               <br/>

                
               <b>$password</b> 
                <br/>
                <br/> 
                <br/>




 Penser à le changer depuis votre espace personnel pour plus de sécurité.<br/>
 <br/>
 <br/>
                
               <div class=\"sign\"> Bonne journée à vous,<br/> 
                 L'équipe Poké</div>
</div>
            </body>

            </html>";





            if (mail($_POST['email'], $subject, $message, $header)) {

                $stm = $connect->prepare("UPDATE users SET password = ? WHERE email = ?");
                $stm->execute(array($hashedPassword, $_POST['email']));
                $messageG = "E-mail envoyé";

                $stm = $connect->prepare("SELECT * FROM users WHERE email = ?");
                $stm->execute(array($_POST['email']));
            } else {
                $messageE = "Une erreur est survenue";
            }
        } else {
            $messageE = "Il n'existe pas de compte à cette adresse mail";
        }
        $db->disconnect();
    }
}
include 'template/header.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/forgot.css">
    <title>Mot de passe perdu ? </title>
</head>

<body>
    <div class="body">

        <form method="post">
            <div class="container">
                <label for="email">Saisir votre adresse mail </label><br />
                <input type="email" placeholder="Entrer votre adresse mail" name="email" required>
                <button type="submit">Envoyer un mot de passe aléatoire</button>
            </div>
            <a class="log" href="login">Se connecter</a>
            <?php
            if ($message != "") {
            ?>
                <div class="message">

                    <?= $messageE ?>
                </div>
                <div class="messageG">

                    <?= $messageG ?>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
</body>

</html>

<?php


include 'template/footer.php';
