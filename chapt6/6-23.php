<?php
header("Content-type: image/jpeg");
$im = imagecreatefromjpeg("pic.jpg");
$white = imagecolorallocate($im,255,255,255);
$width=imagesx($im);
$height=imagesy($im);
$x=0;
$y=0;
while($x<$width && $y<$height){
imagestring($im,2, $x,$y,"http://www.xxx.com", $white);
$x+=20;
$y+=20;
}
imagejpeg($im);
imagedestroy($im);
?> 