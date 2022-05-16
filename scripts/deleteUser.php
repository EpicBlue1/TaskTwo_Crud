<?php

    include 'db_connection.php';

    $selectedUser = $_POST['delUser'];

    $sql = "DELETE FROM users WHERE name = '$selectedUser';";
    $result = mysqli_query($connection, $sql);

    header("Location: http://localhost/phpIntro");

?>