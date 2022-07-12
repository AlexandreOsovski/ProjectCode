<?php
session_start();
if ( !$_SESSION ['usuario'] ) {
    header('location: /todos/html/corpoProjetoLogin.html');
    exit();
}