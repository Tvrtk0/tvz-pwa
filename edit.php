<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PWA Projekt</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php 
        session_start();
        include 'includes/header.php';
        include 'includes/connect.php';

        $id = $_POST['id'];

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
        <section class="row">  
            <h2 class="col-sm-12 naslov">Edit article</h2>
            <article class="col-sm-12 row">

                <div class="col-sm-1"></div>

                <form action="includes/update.php" method="post" class="col-sm-10" enctype="multipart/form-data">
                    <div class="form-group" style="width: 300px;margin:auto;">
                        <img src="<?php echo $uploads_dir; ?>" class='rounded w-100' alt="<?php echo $title; ?>">
                    </div><br>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageFile" name="imageFile" >
                            <label class="custom-file-label" for="imageFile">Choose article image</label>
                            <div id="categoryFeedback" class="invalid-feedback">
                                You must select an image.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="custom-select" name="category" id="category" required="required">
                            <?php 
                                if ($category == 'general') {
                                    echo "<option value='general' selected>General</option>
                                          <option value='tournaments'>Tournaments</option>";
                                }
                                else {
                                    echo "<option value='general'>General</option>
                                          <option value='tournaments' selected>Tournaments</option>";
                                }
                            ?>
                        </select>
                        <div id="categoryFeedback" class="invalid-feedback">
                            You must select a category.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control" name="caption" id="caption" required value="<?php echo $title; ?>">
                        <div id="captionFeedback" class="invalid-feedback">
                            Title must be between 5 and 64 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="summary">Short summary</label>
                        <textarea class="form-control" name="summary" id="summary" rows="4" required><?php echo $summary; ?></textarea>
                        <div id="summaryFeedback" class="invalid-feedback">
                            Summary must be between 10 and 300 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="10" required><?php echo $content; ?></textarea>
                        <div id="contentFeedback" class="invalid-feedback">
                            Content must be entered.
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <?php 
                                if ($archive) 
                                echo '<input type="checkbox" class="custom-control-input" id="homePageBox" name="homePageBox" value="true">';
                                else
                                echo '<input type="checkbox" class="custom-control-input" id="homePageBox" name="homePageBox" value="true" checked>';
                            ?>
                            <label class="custom-control-label" for="homePageBox">Show this on the home page</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type='hidden' name='id' value='<?php echo $id; ?>'>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                    </div>                    
                    
                </form>
                
                <div class="col-sm-1"></div>

            </article>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
        document.querySelector('.custom-file-input').addEventListener('change',function(e){
            var fileName = document.getElementById("imageFile").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })

        document.getElementById("submit").onclick = function(event) {
            var send = true;

            var fieldTitle = document.getElementById("caption");
            var title = document.getElementById("caption").value;
            if (title.length < 5 || title.length > 64) {
                send = false;
                fieldTitle.classList.add("is-invalid");
            }
            else {
                fieldTitle.classList.remove("is-invalid");
                fieldTitle.classList.add("is-valid");
            }


            var fieldSummary = document.getElementById("summary");
            var summary =  document.getElementById("summary").value;
            if (summary.length < 10 || summary.length > 300) {
                send = false;
                fieldSummary.classList.add("is-invalid");
            }
            else {
                fieldSummary.classList.remove("is-invalid");
                fieldSummary.classList.add("is-valid");
            }


            var fieldContent = document.getElementById("content");
            var category = document.getElementById("content").value;
            if (category == 0) {
                send = false;
                fieldContent.classList.add("is-invalid");
            }
            else {
                fieldContent.classList.remove("is-invalid");
                fieldContent.classList.add("is-valid");
            }


            if (send != true) {
                event.preventDefault();
            }
        }
    </script>
    
</body>
</html>