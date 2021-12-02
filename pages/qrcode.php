<?php

include('./lib/phpqrcode/qrlib.php');
QRcode::png($_SESSION['id'], false, QR_ECLEVEL_L, 10);


echo '<img  src="qrcode" />';
