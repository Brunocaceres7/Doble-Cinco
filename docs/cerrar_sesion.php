<?php
session_start();
session_unset();
session_destroy();
header("Location: pag18.php");
exit();
?>