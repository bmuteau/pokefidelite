<?php
global $hlp, $db;
$idFound = false;
$userName = "";
$userFname = "";

if (isset($_POST['sendId'])) {
  if (isset($_SESSION['userTargetId'])) {
    unset($_SESSION['userTargetId']);
  }
  if (isset($_SESSION['userLName'])) {
    unset($_SESSION['userLName']);
  }
  if (isset($_SESSION['userFName'])) {
    unset($_SESSION['userFName']);
  }
  $resStock = $hlp->idInfo($_POST['userId']);
  if (count($resStock) > 0) {
    $idFound = true;
    $_SESSION['userTargetId'] = $_POST['userId'];
    $_SESSION['userLName'] = $resStock['lname'];
    $_SESSION['userFName'] = $resStock['fname'];
  }
}
if (isset($_POST['validId'])) {
  unset($_SESSION['userLName']);
  unset($_SESSION['userFName']);
  header("location:addPoints");
}
if (isset($_SESSION['userLName'])) {
  $userName = $_SESSION['userLName'];
}
if (isset($_SESSION['userFName'])) {
  $userFname = $_SESSION['userFName'];
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>QR Code Scanner</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
  <link rel="stylesheet" href="styles/scanner.css" />
  <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
</head>

<body>
  <div id="container">
    <h1>QR Code Scanner</h1>
    <a href="adminHome"><img src="src/homewhite.svg" class="home"></a>

    <a id="btn-scan-qr">
      <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
      <a />

      <canvas hidden="" id="qr-canvas"></canvas>

      <div id="qr-result" hidden>
        <form method="POST">
          <input type="text" name="userId" id="userId" required>
          <input type="submit" name="sendId" id="sendId">
        </form>

      </div>
      <?php
      if (isset($_SESSION['userLName']) && isset($_SESSION['userFName'])) {
      ?>
        <form method="POST">
          <input type="text" value="<?= $userName ?>" disabled>
          <input type="text" value="<?= $userFname ?>" disabled>
          <input type="submit" name="validId" value="OK">
        </form>
      <?php
      }
      ?>
  </div>

  <script src="script/qrCodeScanner.js"></script>
</body>

</html>