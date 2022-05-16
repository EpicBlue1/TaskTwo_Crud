<?php

    include 'db_connection.php';
    $sql_command = "SELECT * FROM users;";
    $storeResult = mysqli_query($connection, $sql_command);
    $resultCheck = mysqli_num_rows($storeResult);

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($storeResult)){
            echo "
                <div class='row_item'>
                    <p><strong>Name: ". $row["name"] ."</strong></p>
                    <p><strong>Age: ". $row["age"] ."</strong></p>
                    <p><strong>Occupation: ". $row["occupation"] ."</strong></p>
                </div>
            ";
        }
    } else {
        echo "<h1>No data found in DB</h1>";
    }

?>