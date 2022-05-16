<?php

    include 'db_connection.php';

    //get the row to update

    $selectedUser = $_POST['selectedUser'];

    $sql = "SELECT * FROM users WHERE name = '$selectedUser';";
    $result = mysqli_query($connection, $sql);
    $result_check = mysqli_num_rows($result);

    if ($result_check > 0){
        while ($row = mysqli_fetch_assoc($result)){

            if(empty($_POST['name'])){
                $name = $row['name'];
            } else {
                $name = $_POST['name'];
            }

            if(empty($_POST['age'])){
                $age = $row['age'];
            } else {
                $age = $_POST['age'];
            }

            if(empty($_POST['occupation'])){
                $occupation = $row['occupation'];
            } else {
                $occupation = $_POST['occupation'];
            }

            $updateSql = "UPDATE users SET name='$name', age='$age', occupation='$occupation' WHERE name = '$selectedUser';";
            $result_Two = mysqli_query($connection, $updateSql);
            header("Location: http://localhost/phpIntro");
        }

    } else {
        echo "There is no user with that name";
    }
    
?>