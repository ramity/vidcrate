<?php
require_once("C:/wamp/modules/start.php");
require_once("C:/wamp/modules/posthandle.php");
$check	= new Check();
$user	= new User();
if($check->postValue($_POST['l_sub']))
{
	if($check->postValue($_POST['l_use']))
	{
		if($check->postValue($_POST['l_pas']))
		{
			$user=new user;
			$user->login();
		}
	}
}
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
		echo "<!--end sidebar + start login container-->";
		require_once("C:/wamp/blocks/login.php");
		echo "<!--end login container-->\n";
		?>
	</body>
</html>