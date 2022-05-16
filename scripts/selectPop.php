<?php

//populate dropdown
    include 'db_connection.php';
    $sql_command = "SELECT name FROM users;";
    $storeResult = mysqli_query($connection, $sql_command);
    $resultCheck = mysqli_num_rows($storeResult);

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($storeResult)){
            echo "
                <option>". $row["name"] ."</option>
            ";
        }
    } else {
        echo "<option>No Data</option>";
    }

?>