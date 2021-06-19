<?php

    echo '<div class="container-fluid">';

    echo '
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
                <th scope="col" style="text-align:center;">ID</th>
                <th scope="col" style="text-align:center;">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Summary</th>
                <th scope="col" style="text-align:center;">Category</th>
                <th scope="col" style="text-align:center;">Archive</th>
                <th scope="col" style="text-align:center;">Edit</th>
                <th scope="col" style="text-align:center;">Delete</th>
                </tr>
            </thead>
            <tbody>';

    $query = "SELECT * FROM news;";
    $result = mysqli_query($dbc, $query);
    while($row = mysqli_fetch_array($result)) {
        if ($row['archive']) {
            $test = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg svg" viewBox="0 0 16 16"><path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/></svg>';
        }
        else $test = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg svg" viewBox="0 0 16 16"><path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/></svg>';

        echo "
            <tr>
                <th scope='row' style='text-align:center;'>".$row['id']."</th>
                <td style='text-align:center;'>".$row['date']."</td>
                <td>".$row['title']."</td>
                <td>".$row['summary']."</td>
                <td style='text-align:center;'>".$row['category']."</td>
                <td style='text-align:center;'>".$test."</td>
                
                <form action='edit.php' method='POST'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <td style='text-align:center;'>
                        <button type='submit' class='btn btn-primary'>Edit</button>
                    </td>
                </form>
                <form action='includes/delete.php' method='POST'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <td style='text-align:center;'>
                        <button type='submit' class='btn btn-danger' name='delete'>Delete</button>
                    </td>
                </form>
            </tr>";
        
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';

?>