<?php
    include('database.php');

    if (isset($_POST['id'])) {

        $id = $_POST['id'];

        $query = "DELETE from task WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query Failed' . mysqli_error($connection));
        }

        echo "Task Deleted Succesfully";
    }

?>