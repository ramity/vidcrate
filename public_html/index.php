<?php
require_once("../modules/start.php");
?>
<!DOCTYPE>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<?php
		echo "<!--begin topbar-->";
		require_once("../blocks/topbar.php");
		echo "<!--end topbar + start sidebar-->";
		require_once("../blocks/sidebar.php");
		echo "<!--end sidebar + start container-->";
		echo "<!--end container-->\n";
		?>
	</body>
</html>
