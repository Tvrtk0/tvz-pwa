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

        $id = $_GET['id'];

        $query = "SELECT * FROM news WHERE id=$id;"; 

        $result = mysqli_query($dbc, $query) or die('Error querying databese.');
        $row = mysqli_fetch_array($result);

        $title = $row['title'];
        $uploads_dir = "img/" . $row['image'];
        $category = $row['category'];
        $summary = $row['summary'];
        $content = $row['content'];
        $archive = $row['archive'];

        mysqli_close($dbc);
    ?>

    <div class="container" id="articles">
        <div class="row">
            <div class="col-md-12 col-lg-1"></div>
            <div class="col-md-12 col-lg-10">
                <section class="row">
                    <h2 class="col-12 naslov"><?php echo $title ?></h2>
                    <article id="articleText">
                        <img src="<?php echo $uploads_dir ?>" class="rounded w-100"> <br><br>
                        <b><p> <?php echo $summary ?> </p></b> <hr>
                        <p> <?php echo $content ?> </p> <br>
                    </article>
                </section>
            </div>
            <div class="col-md-12 col-lg-1"></div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>