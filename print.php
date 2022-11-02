<?php
define('UPLOAD_DIR', 'D:/Work/Note/web/');
chmod(UPLOAD_DIR, 777);
$img = $_POST['img'];
$name = $_POST['owner'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$file = UPLOAD_DIR . $name;
file_put_contents($file, base64_decode($img));
?>