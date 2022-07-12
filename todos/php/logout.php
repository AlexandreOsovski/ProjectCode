<?php
session_start();
session_destroy();
header("location: /todos/html/corpoProjetoLogin.html");
exit();
?>