<?php

$directory = "uploads";
$inames = array();
$handler = opendir($directory);
while ($file = readdir($handler)) {
	if ($file != "." && $file != "..") {
		$inames[] = $file;
	}
}
closedir($handler);
foreach ($inames as $iname) {
	if ($iname != "upload.php") {
		unlink($directory."/".$iname);
	}
}
echo "All images deleted!";

?>