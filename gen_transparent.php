<?php
// Generate transparent background
$image = imagecreatetruecolor(700, 300);
imagealphablending($image, true);
imagesavealpha($image, true);
$text_color = imagecolorallocate($image, 255, 0, 0);
$bgcolor = imagecolorallocatealpha($image, 0, 0, 0, 127);
imagefill($image, 0, 0, $bgcolor);
imagestring($image,2, 100, 150, 'Text written on transparent background', $text_color);
imagepng($image,'transparent.png');
