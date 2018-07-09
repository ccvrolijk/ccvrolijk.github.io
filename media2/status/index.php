<?php
if (isset( $_GET["refresh"])) {
	echo
'<!doctype html>
	<html>
		<head>
			<link rel="icon" type="image/png" sizes="16x16" href="/index/images/favicon/favicon-16x16.png">
			<title>
				Media 2 Icecast Server
			</title>
		</head>
		<body>
			<style>
				body { margin:0; padding:0; }
				iframe { width:100%; min-height:100vh; height:100%; padding:0; margin:0; border:0; }
			</style>
			<iframe id="external" name="external" src="http://media2.onswestbrabant.nl:8000/status.xsl"></iframe>
			<script>
				setInterval(function(){
				document.getElementById("external").src = document.getElementById("external").src;
				},60000);
			</script>
		</body>
	</html>';}
else { 
	header('Location: http://media2.onswestbrabant.nl:8000/status.xsl');
exit;
}
?>