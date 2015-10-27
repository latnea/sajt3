<?php
$hous3=mysqli_query($link, "SELECT * FROM `allhouses` WHERE 
	`id`=4 OR `id`=6 OR `id`=7 OR `id`=9 OR `id`=12 OR `id`=15 OR `id`=19 
	OR `id`=22 OR `id`=24 OR `id`=28 OR `id`=32 OR `id`=33 OR `id`=41 OR `id`=42 OR `id`=44 
	OR `id`=45 OR `id`=46 OR `id`=47 OR `id`=50 OR `id`=51 OR `id`=54 OR `id`=55 OR `id`=56 
	OR `id`=57 OR `id`=58 OR `id`=59 OR `id`=60 OR `id`=61 OR `id`=62 OR `id`=63 OR `id`=64 
	OR `id`=65 OR `id`=66 OR `id`=67 OR `id`=68 OR `id`=69 OR `id`=70 
	ORDER BY `price` ASC ") or exit();




?>