<?php
session_unset();
session_destroy();
setcookie ('remember', '', time() - 3600,'/');
?>
<script> 
/* document.location.href = "./index.php?modules=glavn&page=glavn"; */
setTimeout("location.href='./index.php?modules=glavn&page=glavn'", 3000)
</script>
