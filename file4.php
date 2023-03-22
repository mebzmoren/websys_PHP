<?php
    session_start();
    $_SESSION['user'] = $_GET['fname'];

    echo "Welcome " . $_SESSION['user'] . "<br>";
    session_unset();
?>