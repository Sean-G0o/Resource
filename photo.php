<?php
include 'createRandom.php';

// 创建验证码背景图片
$width = 70;
$height = 20;
$image = imagecreate($width,$height); //创建大小为70px*20px的背景图片
// 分配蓝色并且将蓝色作为图片的背景色
$bgColor = imagecolorallocate($image,0x33,0x66,0xff);
// 获取随机字符串
$random_str = random_string(6);
// 设置字符串字体大小以及在背景图片中的显示位置
$fontSize = 5;
$x = imagesx($image)/2 - strlen($random_str)*imagefontwidth($fontSize)/2;
$y = imagesy($image)/2 - imagefontheight($fontSize)/2;

// 将字符串输出到背景图片上
$fontColor = imagecolorallocate($image,0xff,0xff,0xff);
imagestring($image,$fontSize,$x,$y,$random_str,$fontColor);

// 输出图像
header('Content-type:image/png');
imagepng($image);
imagedestroy($image);

?> 
