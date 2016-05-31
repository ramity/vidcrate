		
		<div id="topbar">
			<div id="topbarinr">
				<a id="topbarlink" href="http://71.57.197.127/">
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
					<a id="topbarlink" href="http://71.57.197.127/register">
						<div id="topbarinrrightregister">register</div>
					</a>
					<a id="topbarlink" href="http://71.57.197.127/login">
						<div id="topbarinrrightlogin">login</div>
					</a>
					';
					}
					echo "<!--end check build-->";
					?>
					
				</div>
			</div>
		</div>
		