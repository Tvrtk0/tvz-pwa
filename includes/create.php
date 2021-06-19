<?php
    include 'connect.php';

    if (isset($_POST['category'], $_POST['caption'], $_POST['summary'], $_POST['content']))
    {
        if (file_exists($_FILES['imageFile']['tmp_name']) && is_uploaded_file($_FILES['imageFile']['tmp_name'])) 
        {
            $category = $_POST['category'];
            $title = $_POST['caption'];
            $summary = $_POST['summary']; 
            $content = $_POST['content'];
            $date = date('Y-m-d');
            
            if (isset($_POST['homePageBox'])) {
                $archive = 0;
            } 
            else $archive = 1;
            
            $image = basename($_FILES['imageFile']['name']);
            $uploads_dir = '../img/' . $image;

            if (move_uploaded_file($_FILES['imageFile']['tmp_name'], $uploads_dir)) 
            {
                $sql = "INSERT INTO news (date, title, summary, content, image, category, archive) VALUES ('$date', ?, ?, ?, ?, ?, ?)";

                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $sql)){ 
                    mysqli_stmt_bind_param($stmt,'ssssss', $title, $summary, $content, $image, $category, $archive); 
                    mysqli_stmt_execute($stmt); 
                }

                $last_id = $dbc->insert_id;
                
                mysqli_close($dbc);

                header("Location: ../article.php?id=" . $last_id);
            }
        }
    }
    else {
        echo "Pogrešan unos podataka.";
        die();
    }
?>