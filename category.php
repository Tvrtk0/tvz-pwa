<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PWA Projekt</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include 'includes/header.php';
    include 'includes/connect.php';

    $category = $_GET['id'];
    $query = "SELECT * FROM news WHERE category='$category' ORDER BY date DESC";
    $result = mysqli_query($dbc, $query) or die('Error querying databese.');

    $category = ucwords($category); 
    echo "<div class='container' id='articles'>";
    echo "<section class='row'>";  
    echo "<h2 class='col-sm-12 naslov'>$category</h2>";

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $date = $row['date'];
        $title = $row['title'];
        $uploads_dir = "img/" . $row['image'];
        $category = $row['category'];
        $summary = $row['summary'];
        $content = $row['content'];
        $archive = $row['archive'];

        if ($archive == 0) {
            echo "
                <article class='col-md-12'>    
                    <div class='row'>
                        <div class='col-md col-lg-6'>
                            <a href='article.php?id=$id'>
                                <img src='$uploads_dir' class='rounded w-100' alt='$title'>
                            </a>
                        </div>
                        <div class='col-md col-lg-6 articleText'>
                            <a href='article.php?id=$id'>
                                <h3>$title</h3>
                            </a>
                            <p> $summary </p> <hr style='border: 1px solid #C5C6C7'>
                        </div>
                    </div>
                </article>
            ";
        }

    }

    echo "</section>";
    echo "</div>";

    mysqli_close($dbc);

    include 'includes/footer.php';
?>

</body>
</html>