<?php

include('./lib/phpqrcode/qrlib.php');
QRcode::png($_SESSION['id']);

echo '<img src="qrcode" />';
