<?php
// $url = 'http://i.imgur.com/oQIwz2Y.jpg';
// $num = 33122;
// load($url);
// function load($url){
// 	$file = file_get_contents($url);
// 	$file_ext = image_type_to_mime_type(exif_imagetype($url));
// 	$ext = explode('/', $file_ext)[1];

// 	if($ext === 'gif')
// 		file_put_contents('imgur/imgur.gif', $file);
// 	else if($ext === 'jpg')
// 		file_put_contents('imgur/imgur.jpg', $file);
// 	else if($ext === 'jpeg')
// 		file_put_contents('imgur/imgur.jpeg', $file);
// 	else if($ext === 'png')
// 		file_put_contents('imgur/imgur.png', $file);

// }
// for($i = 0; $i < 20000; $i++){
// 	load($url);
// }
$salt = '$@%GAS1415lkjaf';
echo sha1('password' . $salt);
?>
