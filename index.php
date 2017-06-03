<?php

// detect IE
function ae_detect_ie() {
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}

?><html>
<head>

<title>Image to ASCII</title>

<script type="text/javascript" src="lib/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="lib/imgtoascii.min.js"></script>
<script type="text/javascript" src="lib/enhance.js"></script>	
<script type="text/javascript" src="lib/grabber.min.js"></script>
<link href="lib/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
// Run capabilities test for file uploader
enhance({
	loadScripts: [
		'lib/jquery-1.7.2.min.js',
		'lib/jQuery.fileinput.min.js',
		'lib/example.js'
	],
	loadStyles: ['lib/enhanced.css']
});   
</script>

</head>
<body><center>

<img src="img/logo.jpg" />

<div id='ajax_upload_demo'>

<?php
// If browser is IE, display error message.
if (ae_detect_ie()) {
?>

<b>Sorry!</b> this website does not work with your current browser, Internet Explorer.<br />Try viewing this website with <a href="http://www.google.com/intl/en/chrome/">Google Chrome</a> instead.

<?php
}
else {
?>

<form id='image_upload_form' method='post' enctype='multipart/form-data' action='uploads/upload.php' target='upload_to'>

<div id="options">Resolution: 
<select name="resolution" id="resolution">
  <option value="low">Low</option>
  <option value="medium" selected>Medium</option>
  <option value="high">High</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Color: <input type="checkbox" name="color" id="color" value="true" />


</div><br />

<div id="uploadbtn"><input type='file' id='file' name='image'/><input type="submit" name="upload" id="upload" value="Convert to ASCII" /></div>

</form>
    
    
<p id="result"><img src='img/s.png' /></p>
<iframe name='upload_to'>
</iframe>

<?php
} // End else IE
?>

</div><br /><br />

</center></body>
</html>