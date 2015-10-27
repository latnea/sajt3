<?php

Core::$META['title']='Join';
//Core::$JS['']='<link href="./js/jsjoin/jsjoin.css" rel="stylesheet" type="text/css" media="screen">';




if(isset($_POST['login'],$_POST['password'])) {
	$res=mysqli_query($link2,"
		SELECT * FROM `peoples`
		WHERE
		`login`='".es($_POST['login'])."'
		AND
		`password`='".myHash($_POST['password'])."'
		AND
		`active`=1
		LIMIT 1
	");

	if(mysqli_num_rows($res)){
		$_SESSION['user']=mysqli_fetch_assoc($res);
		$status='ok';
		if (isset($_SESSION['user'],$_POST['remember'])) {
			setcookie('remember',es($_POST['login']),time()+3600*24,'/');
			$_COOKIE['remember']=es($_POST['login']);
			
		}
	} else { $error='Wrond login or password!';}
}


?>