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

        if (isset($_POST['name'], $_POST['surname'], $_POST['username'], $_POST['password'], $_POST['passwordConfirm']))
        {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hashed_pass = password_hash($password, CRYPT_BLOWFISH);
            $registration = "false";

            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $sql)) { 
                mysqli_stmt_bind_param($stmt, 's', $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt); 
            }

            if (mysqli_stmt_num_rows($stmt) > 0) {
                $msg = "This username is unavailable.";
            }
            else {
                $sql = "INSERT INTO users (name, surname, username, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $sql)) { 
                    mysqli_stmt_bind_param($stmt, 'ssss', $name, $surname, $username, $hashed_pass);
                    mysqli_stmt_execute($stmt); 
                    $registration = true;
                }

                if ($registration) {
                    #header("Location: index.php");
                    $msg = "You have successfully registered!";
                }
                else $msg = "Registration error.";
            }
            
            mysqli_close($dbc);
        }
    ?>

    <div class="container" id="articles">
        <section class="row">  
            <h2 class="col-sm-12 naslov">Register</h2>
            <article class="col-sm-12 row">

                <div class="col-sm-1"></div>

                <form method="post" class="col-sm-10" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                        <div id="nameFeedback" class="invalid-feedback">
                            Name must be between 2 and 32 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" name="surname" id="surname" required>
                        <div id="surnameFeedback" class="invalid-feedback">
                            Surname must be between 2 and 32 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                        <div id="usernameFeedback" class="invalid-feedback">
                            Username must be between 2 and 32 characters.
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <div id="passwordFeedback" class="invalid-feedback">
                            Password must be between 4 and 32 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="passwordConfirm">Confirm Password</label>
                        <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" required>
                        <div id="passwordConfirmFeedback" class="invalid-feedback">
                            Passwords are not the same!
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>     

                    <div>
                        <?php 
                            if (isset($_POST['submit'])) {
                                echo "<p>$msg</p>" ;
                            } 
                        ?>
                    </div>               
                    
                </form>
                
                <div class="col-sm-1"></div>

            </article>
        </section>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript">
         document.getElementById("submit").onclick = function(event) {
            var send = true;

            var fieldName = document.getElementById("name");
            var name = document.getElementById("name").value;
            if (name.length < 2 || name.length > 32) {
                send = false;
                fieldName.classList.add("is-invalid");
            }
            else {
                fieldName.classList.remove("is-invalid");
                fieldName.classList.add("is-valid");
            }


            var fieldSurname = document.getElementById("surname");
            var surname = document.getElementById("surname").value;
            if (surname.length < 2 || surname.length > 32) {
                send = false;
                fieldSurname.classList.add("is-invalid");
            }
            else {
                fieldSurname.classList.remove("is-invalid");
                fieldSurname.classList.add("is-valid");
            }


            var fieldUsername = document.getElementById("username");
            var username = document.getElementById("username").value;
            if (username.length < 2 || username.length > 32) {
                send = false;
                fieldUsername.classList.add("is-invalid");
            }
            else {
                fieldUsername.classList.remove("is-invalid");
                fieldUsername.classList.add("is-valid");
            }


            var fieldPassword = document.getElementById("password");
            var password = document.getElementById("password").value;
            var fieldPasswordConfirm = document.getElementById("passwordConfirm");
            var passwordConfirm = document.getElementById("passwordConfirm").value;
            if (password.length != passwordConfirm.length) {
                send = false;
                fieldPasswordConfirm.classList.add("is-invalid");
            }
            else {
                fieldPasswordConfirm.classList.remove("is-invalid");
                fieldPasswordConfirm.classList.add("is-valid");
            }

            if (password.length < 4 || password.length > 32) {
                send = false;
                fieldPassword.classList.add("is-invalid");
            }
            else {
                fieldPassword.classList.remove("is-invalid");
                fieldPassword.classList.add("is-valid");
            }

            if (send != true) {
                event.preventDefault();
            }
        }
    </script>
    
</body>
</html>