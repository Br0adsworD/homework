<?php
$file=__DIR__ . "/123.php";
$fh=fopen($file, "r+");

$fil="asdad.asdasd.adgfdg.dgh.adsphp.php";
$data=explode(".", $fil);
$key=0;
foreach ($data as $key => $value) {
}
var_dump($data);
if (($data[$key]==="php")==true) {
	echo "aaaaaaaaaa";
}
else {
	echo "asd";
}
// if (!$data[$key]==="php") {
// 	echo "aaaa";
// }
// else{
// 	echo "asd";
// }
fclose($fh);