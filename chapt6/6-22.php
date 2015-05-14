<?php
header("Content-type: image/png");
$im = @imagecreate(200, 100) or die("无法创建图像流");
@imagecolorallocate($im, 240, 150, 255);
$t_color1 = imagecolorallocate($im, 0, 0, 0);
$t_color2 = imagecolorallocate($im,100,100,100);
imagestring($im, 5, 8, 10,  "I like PHP!", $t_color1);
imagestringup($im,5,8,90,"Hello!",$t_color2);
imageellipse($im,65,65,55,55,$t_color1);
imageellipse($im,65,65,55,55,$t_color1);
imagefilledrectangle($im,110,95,160,30,$t_color2);
imagepng($im);
imagedestroy($im);
?> 