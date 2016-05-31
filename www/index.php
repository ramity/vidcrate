<?php
require_once("C:/wamp/modules/start.php");
?>
<!DOCTYPE>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="http://71.57.197.127/css/reset.css">
		<link rel="stylesheet" type="text/css" href="http://71.57.197.127/css/main.css">
	</head>
	<body>	
		<?php
		echo "<!--begin topbar-->";
		require_once("C:/wamp/blocks/topbar.php");
		echo "<!--end topbar + start sidebar-->";
		require_once("C:/wamp/blocks/sidebar.php");
		echo "<!--end sidebar + start container-->";
		echo "<!--end container-->\n";
		?>
	</body>
</html>