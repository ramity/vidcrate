<?php
require_once("../modules/start.php");
require_once("../modules/posthandle.php");
$check	= new Check();
$user	= new User();

/*

DISABLED LOGIN (UTILIZES BAD PRACTICES + INSECURE)

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
*/
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
		echo "<!--end sidebar + start login container-->";
		require_once("../blocks/login.php");
		echo "<!--end login container-->\n";
		?>
	</body>
</html>
