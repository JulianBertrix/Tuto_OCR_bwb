<?php
    header ("Content-type: image/jpeg");
    $image = imagecreatefromjpeg("image.jpg");
    imagejpeg($image);
?>
<img src="tutoP5.php" />
