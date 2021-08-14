<?php
session_start();
session_destroy();
if(session_status() !== PHP_SESSION_ACTIVE)
{
	echo '<script type="text/javascript">
					alert("Your Have Successfully Signed out\n Thank You For Joining Us\n ~Team CODIET");
					window.location.href = "index.html";
				</script>';
}
?>
