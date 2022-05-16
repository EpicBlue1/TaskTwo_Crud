<?php

    include 'db_connection.php';

    if(empty($_POST['username']) && empty($_POST['age']) && empty($_POST['occupation'])){
        echo 'You need to enter data!';
    } else{
        $username = $_POST['name'];
        $age = $_POST['age'];
        $occupation = $_POST['occupation'];

        $sql = "INSERT INTO users(id, name, age, occupation) VALUES (NULL,'$username','$age','$occupation');";
        $result = mysqli_query($connection, $sql);
        header("Location: http://localhost/phpIntro");
    }



?>