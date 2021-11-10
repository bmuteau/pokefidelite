<?php

$urlword = array();
if (isset($_GET['url'])) {
    $urlword = explode("/", $_GET['url']);
} else {
    array_push($urlword, "");
}

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
);

if (count($urlword) > 0 && array_key_exists($urlword[0], $urlsPossible)) {
    $idUrl = $urlsPossible[$urlword[0]];
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
} else {
    $idUrl = 0;
    $_SESSION['pageid'] = $idUrl;
    require $filesPossible[$idUrl];
}
