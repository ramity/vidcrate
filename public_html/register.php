<?php
require_once("../modules/start.php");
require_once("../modules/posthandle.php");
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
		echo "<!--end sidebar + start register container-->";
		require_once("../blocks/register.php");
		echo "<!--end register container-->\n";
		?>
	</body>
</html>
