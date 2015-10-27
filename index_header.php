<!DOCTYPE HTML>
<html>
<head>
<title> <?php echo Core::$META['title']; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">								
<meta name="description" content="<?php echo Core::$META['description']; ?>">
<meta name="keywords" content="<?php echo Core::$META['keywords']; ?>">

<link rel="stylesheet" type="text/css" media="screen" href="./css/stylee.css">

<!-- <?php // if(count(Core::$CSS)) {echo implode("\n", Core::$CSS);} ?> -->

<?php if(count(Core::$JS)) {echo implode("\n", Core::$JS);} ?>
<script type="text/javascript" src="./js/jquery-1.11.3.min.js"></script>
</head>
	<body>
		<div id="header">
			<?php 
			include './modules/menu/menu.php'; 
			include './skins/menu/menu.tpl';  
			?>
		</div>