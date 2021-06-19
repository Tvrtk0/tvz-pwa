<?php
    include 'connect.php';

    if (isset($_POST['delete'])) { 
        $id=$_POST['id']; 
        $query = "DELETE FROM news WHERE id=$id;"; 
        $result = mysqli_query($dbc, $query); 
    }

    mysqli_close($dbc);

    header("Location: ../administration.php");
?>