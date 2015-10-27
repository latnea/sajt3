<?php
$hous1=mysqli_query($link, "SELECT * FROM `allhouses` WHERE `km` <= 10 ORDER BY `km` ASC ") or exit();




?>