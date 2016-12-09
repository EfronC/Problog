<?php

session_start();
unset ($_SESSION['username']);
session_destroy();

echo "<script lenguaje=\'JavaScript\'>window.location='post.php';</script>"; 

?>