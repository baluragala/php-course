<?php
/**
 * Created by PhpStorm.
 * User: baluteju
 * Date: 3/14/2017
 * Time: 5:42 PM
 */

/*$im = ImageCreate(200, 200);
$white = ImageColorAllocate($im, 0xFF, 0xFF, 0xFF);
$black = ImageColorAllocate($im, 0x00, 0x00, 0x00);
ImageFilledRectangle($im, 0, 0, 0, 0, $black);
header('Content-Type: image/png');
ImagePNG($im);*/


// set up array of points for polygon
$values = array(
    40,  50,  // Point 1 (x, y)
    20,  240, // Point 2 (x, y)
    60,  60,  // Point 3 (x, y)
    240, 20,  // Point 4 (x, y)
    50,  40,  // Point 5 (x, y)
    10,  10   // Point 6 (x, y)
);

// create image
$image = imagecreatetruecolor(250, 250);

// allocate colors
$bg   = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);

// fill the background
imagefilledrectangle($image, 0, 0, 249, 249, $bg);

// draw a polygon
imagefilledpolygon($image, $values, 6, $blue);

// flush image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);