<?php
    include('database.php');

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $query = "INSERT INTO task(name, description) VALUES ('$name','$description')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed');
        }

        echo 'Task Added yuju';
    }

?>
