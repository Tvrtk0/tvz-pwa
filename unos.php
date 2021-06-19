<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PWA Projekt</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php include 'includes/header.php';?>

    <div class="container" id="articles">
        <section class="row">  
            <h2 class="col-sm-12 naslov">Create new article</h2>
            <article class="col-sm-12 row">

                <div class="col-sm-1"></div>

                <form action="includes/create.php" method="post" class="col-sm-10" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageFile" name="imageFile" required>
                            <label class="custom-file-label" for="imageFile">Choose article image</label>
                            <div id="categoryFeedback" class="invalid-feedback">
                                You must select an image.
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="custom-select" name="category" id="category" required="required">
                            <option value="" selected disabled>Choose...</option>
                            <option value="general">General</option>
                            <option value="tournaments">Tournaments</option>
                        </select>
                        <div id="categoryFeedback" class="invalid-feedback">
                            You must select a category.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control" name="caption" id="caption" required>
                        <div id="captionFeedback" class="invalid-feedback">
                            Title must be between 5 and 64 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="summary">Short summary</label>
                        <textarea class="form-control" name="summary" id="summary" rows="4" required></textarea>
                        <div id="summaryFeedback" class="invalid-feedback">
                            Summary must be between 10 and 300 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="10" required></textarea>
                        <div id="contentFeedback" class="invalid-feedback">
                            Content must be entered.
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="homePageBox" name="homePageBox" value="true" checked>
                            <label class="custom-control-label" for="homePageBox">Show this on the home page</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" id="reset" name="reset" class="btn btn-danger">Reset</button>
                    </div>                    
                    
                </form>
                
                <div class="col-sm-1"></div>

            </article>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript">
        document.querySelector('.custom-file-input').addEventListener('change',function(e){
            var fileName = document.getElementById("imageFile").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })

        document.getElementById("submit").onclick = function(event) {
            var send = true;


            var fieldImage = document.getElementById("imageFile");
            var image = document.getElementById("imageFile").value;
            if (image.length == 0) {
                send = false;
                fieldImage.classList.add("is-invalid");
            }
            else {
                fieldImage.classList.remove("is-invalid");
                fieldImage.classList.add("is-valid");
            }


            var fieldCategory = document.getElementById("category");
            if (document.getElementById("category").selectedIndex == 0) {
                send = false;
                fieldCategory.classList.add("is-invalid");
            }
            else {
                fieldCategory.classList.remove("is-invalid");
                fieldCategory.classList.add("is-valid");
            }


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