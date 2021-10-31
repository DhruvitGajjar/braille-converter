<html> 
<head>
	<link id="css" href="css/braille-big.css" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="br.gif">
    <title>Braille-Tools</title>
	
	<?php

	echo "<script src='braille.js'></script>";
	echo "<script language='javascript'>
		function elem(id){
			return document.getElementById(id);
		}
		function showBraille() {
			var message = elem('txtBraille').value;
			elem('myBraille').innerHTML=br.braille(message);
		}
		function BrText() {
			var message = elem('txtBr').value;
			elem('myBr').innerHTML=br.braille(message);
		}
		function setCSS(size) {
			elem('css').href='css/braille-'+size+'.css';
		}
	</script>"
	?>
</head>
<body>
<div>
<h1>Braille Converter By KD</h1>

<p>3 styles of Braille:
	<a href="javascript:setCSS('big')">big</a> -  
	<a href="javascript:setCSS('small')">small</a>
</p>

<name id="braillename"/>
<div id="out-braille">
	<h2>Type text to convert it in braille.</h2>
	              
	<input id="txtBraille" class="form-control pull-left" type="text" style="width:200px"> 
	<input id="btnBraille" type="submit" value="Show Braille" maxlength="50" onclick="showBraille()"
		class="btn btn-primary pull-left">

	<div style="height:20px;width:1px;"></div>
	<div id="myBraille" class="braille" style="margin-top:30px;min-height:70px;min-width:1px;"></div>
	
</div>

</div>
<script>
document.getElementById("txtBraille")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("btnBraille").click();
    }
});


</script>
</body>
</html>
