<div style=" height: auto; width: 350px; margin:0 auto; margin-bottom:5%;">
	<?php if(!isset($status) || $status!='ok') { echo @$error; ?>
<form method="post" action=''>
	<p> Login: </p>
	<input type="text" name="login"> <br>
	Запомнить меня: <input type="checkbox" value="f" name="remember">
	<p> Password: </p>
	<input type="password" name="password"> <br>
	<input type="submit" name="submit "value="Join">
</form>

<? } 

else { echo '<h2> You are succesfully logged in! </h2> <img style="margin-left:15%;  height:45%; width:45%;" src="./img/smile.png" alt=""> ';

//sleep(5);
//header ("Location:./index.php?modules=glavn&page=glavn");
//leep(3);
?>
<script> 
/* document.location.href = "./index.php?modules=glavn&page=glavn"; */
setTimeout("location.href='./index.php?modules=glavn&page=glavn'", 3000)
</script>
<? } ?>
</div>


<div id="test" >
	<a class="testa" onclick="$('.testa').hide ()" href="#"> http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js </a>
	<ul class="menju2" style="float:left;">
		<li>
			<a href="#">Навигация</a>
			<ul>
				<li><a href="#">Карта Москвы</a></li>
				<li><a href="#">Калькулятор </a></li>
				<li><a href="#">Ещё что-нибудь </a></li>
			</ul>
		</li>
	</ul>
</div>
<br>

<?php require './skins/aboutus/urok33.tpl'; ?>