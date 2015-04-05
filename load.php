<?php
$url = 'http://d2ws0xxnnorfdo.cloudfront.net/meme/';
$num = 33122;
$have = 59678;

$num += $have;

function load($url, $num){
	$file = file_get_contents($url . $num);
	$file_ext = image_type_to_mime_type(exif_imagetype($url . $num));
	$ext = explode('/', $file_ext)[1];

	if($ext === 'gif')
		file_put_contents('img/' . $num . '.gif', $file);
	else if($ext === 'jpg')
		file_put_contents('img/' . $num . '.jpg', $file);
	else if($ext === 'jpeg')
		file_put_contents('img/' . $num . '.jpeg', $file);
	else if($ext === 'png')
		file_put_contents('img/' . $num . '.png', $file);

}
for($i = 0; $i < 20000; $i++){
	load($url, $num);
	$num += 1;

	if($num % 100 === 0)echo "Loaded: " . $num . "\n";
}
?>
