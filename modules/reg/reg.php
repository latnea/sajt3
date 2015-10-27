<?php

if(isset($_SESSION['regok'])) {
	echo 'Your are succesfully registered!';
	unset($_SESSION['regok']);
}


if (isset($_POST['login'], $_POST['password'], $_POST['email'])) {


	$errors=array();

		if(empty($_POST['login'])){
			$errors['login'] = 'Vi ne zapolnili login!';
		} elseif (mb_strlen($_POST['login'] ) < 2 ) {
			$errors['login']='login sliwkom korotkij';
		} elseif (mb_strlen($_POST['login'] ) > 16 ) {
			$errors['login']='login sliwkom dlinnij';
		} 
		if(empty($_POST['password'])){
			$errors['password'] = 'Vi ne zapolnili parolj!';
		} elseif (mb_strlen($_POST['password'] ) < 5 ) {
			$errors['password']='password dolzhen bitj dlinnee 4 simvolov';
		} elseif (mb_strlen($_POST['login'] ) > 16 ) {
			$errors['password']='password sliwkom dlinnij';
		} 



		if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = 'Vi ne zapolnili E-mail!';
		} 




	if(!count($errors)) {
		$res=mysqli_query($link2,"
			SELECT `id` 
			FROM `peoples` 
			WHERE `login`='".es($_POST['login'])."' 
			LIMIT 1
			"); 															// proverjaem povtor logina v baze dannih
	
		if(mysqli_num_rows($res)) {								// t.e. ravna 1 = true. t.e. login povtorilsja v baze dannih
			$errors['login']='takoj login uzhe suwestvuet';
	
		}


	
		$res=mysqli_query($link2,"
			SELECT `id` 
			FROM `peoples` 
			WHERE `email`='".es($_POST['email'])."' 
			LIMIT 1
			"); 															// proverjaem povtor emaila v baze dannih
	
		if(mysqli_num_rows($res)) {								// t.e. ravna 1 = true. t.e. email povtorilsja v baze dannih
			$errors['email']='takoj email uzhe suwestvuet';
		}

	}





	if (!count($errors)){
		mysqli_query($link2,"
			INSERT INTO `peoples` SET 
			`login`='".es($_POST['login'])."',
			`password`='".myHash($_POST['password'])."',
			`email`='".es($_POST['email'])."',
			`age` = ".(int)$_POST['age']. ",
			`hash`='".myHash($_POST['login'].$_POST['age'])."'
			");

		$id=mysqli_insert_id($link2);
		$_SESSION['regok'] = 'ok';
		
		Mail::$to='./logs/mysql.log';
		Mail::$subject='Your are succesfully registered!';
		Mail::$text=
					'Для подтверждения регистрации пройдите по этой ссылке:'.Core::$Domain.'index.php?modules=activate&page=activate&id='.$id.'&hash=
					'.myHash($_POST['login'].$_POST['age']).'
					';
		Mail::send();
		file_put_contents('./logs/mysql.log',strip_tags(Mail::$text,Mail::$subject)."\n\n", FILE_APPEND);
		header ("Location:./index.php?modules=glavn&page=glavn");
		exit();
	}
}

?>