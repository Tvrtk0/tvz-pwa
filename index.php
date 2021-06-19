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
        
        $queryCategory = "SELECT DISTINCT news.category FROM news;";
        $resultCategory = mysqli_query($dbc, $queryCategory) or die('Error querying databese.');

        while ($rowCategory = mysqli_fetch_array($resultCategory)) {
            $category = $rowCategory['category'];
            $category = ucwords($category); 

            echo "
                <div class='container' id='articles'>
                    <section class='row'>
                        <h2 class='col-sm-12 naslov'>$category</h2>
                        
            ";

            $queryPost =   "SELECT * FROM news 
                            WHERE category = '$category' AND archive = 0 
                            ORDER BY date DESC 
                            LIMIT 3;";
            $resultPost = mysqli_query($dbc, $queryPost) or die('Error querying databese.');

            while ($row = mysqli_fetch_array($resultPost)) {
                echo "
                    <article class='col-sm col-lg-4'>
                        <a href='article.php?id=".$row['id']."'>
                            <img src='img/".$row['image']."' class='rounded w-100' alt='".$row['title']."'>
                            <h3>".$row['title']."</h3>
                        </a>
                        <p>".$row['summary']."</p>
                    </article>
                ";
            }

            echo "
                    </section>
                </div>
            ";
        }

        mysqli_close($dbc);
    ?>

    <?php include 'includes/footer.php'; ?>

</body>
</html>


