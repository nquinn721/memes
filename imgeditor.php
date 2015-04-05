<?php 
$url = 'G:\wamp\www\memes';
$img = '33123.jpeg';

$dir = scandir($url);

unset($dir[0]);
unset($dir[1]);

print_r($dir);
function createImage($imgName, $url, $srcDir){
	$ext = explode('.', $imgName)[1];
	echo $imgName . '<br>';
	if($ext === 'jpg' || $ext === 'jpeg')
		$img = imagecreatefromjpeg($url . $imgName);
	if($ext === 'png')
		$img = imagecreatefrompng($url . $imgName);
	if($ext === 'gif')
		$img = imagecreatefromgif($url . $imgName);
	
	$sizes = getimagesize($url . $imgName);

	$w = $sizes[0];
	$h = $sizes[1];

	$croppedImg = imagecrop($img, [
		'x' => 0,
		'y' => 0,
		'width' => $w,
		'height' => $h - 25
	]);

	if($ext === 'jpg' || $ext === 'jpeg')
		imagejpeg($croppedImg, $srcDir . $imgName, 100);
	if($ext === 'png')
		imagepng($croppedImg, $srcDir . $imgName, 100);
	if($ext === 'gif')
		imagegif($croppedImg, $srcDir . $imgName, 100);
}

// for ($i=3; $i < count($dir); $i++) { 
// 	createImage($dir[$i], $url, $url);
// }
echo 'Done!';
?>