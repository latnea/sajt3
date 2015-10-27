<div id="content1">
<?php 
		if (isset($_GET['page'])) {
			//include $_GET['page'].'.php';
			include './modules/'.$_GET['modules'].'/'.$_GET['page'].'.php';
			include './skins/'.$_GET['modules'].'/'.$_GET['page'].'.tpl';
		}
			elseif (!isset($_GET['page'])) {
				include './modules/glavn/glavn.php';
				include './skins/glavn/glavn.tpl';
			}
	
?>
</div>