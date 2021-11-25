<?php
session_start();


use Application\Database;
use Application\HelperFunctions;



$db_class_name = "Application\Database";

$autoloader_db = function ($db_class_name) {
    // on prépare le terrain : on remplace le séparteur d'espace de nom par le séparateur de répertoires du système
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $db_class_name);
    // on construit le chemin complet du fichier à inclure :
    // il faut que l'autoloader soit toujours à la racine du site : tout part de là avec __DIR__
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    // on vérfie que le fichier existe et on l'inclut
    // sinon on passe la main à une autre autoloader (return false)
    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_db);

$hlp_class_name = "Application\HelperFunctions";

$autoloader_hlp = function ($hlp_class_name) {
    // on prépare le terrain : on remplace le séparteur d'espace de nom par le séparateur de répertoires du système
    $name = str_replace('\\', DIRECTORY_SEPARATOR, $hlp_class_name);
    // on construit le chemin complet du fichier à inclure :
    // il faut que l'autoloader soit toujours à la racine du site : tout part de là avec __DIR__
    $path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';

    // on vérfie que le fichier existe et on l'inclut
    // sinon on passe la main à une autre autoloader (return false)
    if (is_file($path)) {
        include $path;
    } else {
        return false;
    }
};
spl_autoload_register($autoloader_hlp);


$db = new Application\Database();
$db = new Database();
$hlp = new Application\HelperFunctions();
$hlp = new HelperFunctions();



$urlword = array();
if (isset($_GET['url'])) {
    $urlword = explode("/", $_GET['url']);
} else {
    array_push($urlword, "");
}

$connectionNeeded = array(

    false,
    true,
    true,
    true,
    true,
    true,
    false,
    true,
    false,
    true,
    false,
    false,
    true,
);

$adminNeeded = array(

    false,
    false,
    false,
    false,
    true,
    true,
    false,
    false,
    false,
    true,
    false,
    true,
    false,

);
$urlsPossible = array(
    "pageNotFound" => 0,
    "pagenotfound" => 0,
    "" => 1,
    "home" => 1,
    "editInfo" => 2,
    "editinfo" => 2,
    "fonction" => 3,
    "addPoints" => 4,
    "addpoints" => 4,
    "adminHome" => 5,
    "adminhome" => 5,
    "connexionregister" => 6,
    "dlqrcode" => 7,
    "login" => 8,
    "qrcodeProfile" => 9,
    "qrcodeprofile" => 9,
    "register" => 10,
    "scanner" => 11,
    "qrcode" => 12,



);

$filesPossible = array(
    "pages/notFound.php",
    "pages/home.php",
    "pages/editInfo.php",
    "pages/fonction.php",
    "pages/addPoints.php",
    "pages/adminHome.php",
    "pages/connexionregister.php",
    "pages/dlqrcode.php",
    "pages/login.php",
    "pages/qrcodeProfile.php",
    "pages/register.php",
    "pages/scanner.php",
    "pages/qrcode.php",
);



if (count($urlword) > 0 && array_key_exists($urlword[0], $urlsPossible)) {
    $idUrl = $urlsPossible[$urlword[0]];
    if ($connectionNeeded[$idUrl] == true && $hlp->isConnected() == false) {
        $idUrl = 6;
    }
    if ($adminNeeded[$idUrl] == true && $hlp->isAdmin() == false) {
        $idUrl = 0;
    }
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
} else {
    $idUrl = 0;
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
}
