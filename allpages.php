

<?php
	if (isset($_COOKIE['remember']) ) {
		$_SESSION['allrights']="allrights";
		$ll=$_COOKIE['remember'];
?>
<script>
	window.onload=function() {
		
			var x=document.getElementById('reggg');
			var xx=document.getElementById('regggg');
			var x1=document.getElementById('regii');
			var x11=document.getElementById('regi');
			if(x.style.display=='block',xx.style.display=='block',x1.style.display=='none',x11.style.display=='none') {
				x.style.display='none';
				xx.style.display='none';
				x1.style.display='block';
				x11.style.display='block';
				
			}
	}

</script>
<? } 


/*
if (isset($_SESSION['user'])) {


	$res=mysqli_query($link2,"
		SELECT *
		FROM `peoples`
		WHERE
		`id` = ".$_SESSION['user']['id']."
		LIMIT 1
		");

	$_SESSION['user'] = mysqli_fetch_assoc($res);

	if($_SESSION['user']['active'] != 1) {
		header ("Location: index.php?skins=exit&page=exit");
		exit();
	}
}
*/
?>
