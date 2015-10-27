<?php
if(isset($_GET['hash'], $_GET['id'])) {
	mysqli_query($link2,"UPDATE `peoples` SET `active`=1 WHERE 

		`id`=".(int)$_GET['id']." 
		AND
		`hash`='".es($_GET['hash'])."' 
			");
	$info="Вы активны на сайте!";
	require './modules/auth/auth.php'; 
} else {
	$info = "Vi prowli po nevernoj ssilke!";
}


?>