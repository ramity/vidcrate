
		<div id="topbar">
			<div id="topbarinr">
				<a id="topbarlink" href="">
					<div id="topbarinrlogo">vidcrate</div>
				</a>
				<div id="topbarinrright">
					<div id="topbarinrrightstatus"></div>
					<?php
					echo "<!--check build for secure login-->";
					if($securelogin)
					{
					?>

					<?php
					}else{
					echo'
					<a id="topbarlink" href="register.php">
						<div id="topbarinrrightregister">register</div>
					</a>
					<a id="topbarlink" href="login.php">
						<div id="topbarinrrightlogin">login</div>
					</a>
					';
					}
					echo "<!--end check build-->";
					?>

				</div>
			</div>
		</div>
