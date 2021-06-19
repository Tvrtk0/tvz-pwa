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
        include 'includes/connect.php';
        include 'includes/header.php';
        $_SESSION['$loginMsg'] = ""; 

        if (isset($_POST['login'])) {
            $loginUsername = $_POST['username'];
            $loginPassword = $_POST['password'];

            $sql = "SELECT username, password, admin FROM users WHERE username = ?";
            $stmt = mysqli_stmt_init($dbc); 
            if (mysqli_stmt_prepare($stmt, $sql)) { 

                mysqli_stmt_bind_param($stmt, 's', $loginUsername); 
                mysqli_stmt_execute($stmt); mysqli_stmt_store_result($stmt); 
            }

            mysqli_stmt_bind_result($stmt, $usernameDb, $passwordDb, $adminDb); 
            mysqli_stmt_fetch($stmt);

            if (password_verify($loginPassword, $passwordDb) && mysqli_stmt_num_rows($stmt) > 0) {
                
                $loginSuccess = true;
                if($adminDb == 1) { 
                    $admin = true; 
                } 
                else { 
                    $admin = false; 
                } 
                
                $_SESSION['$username'] = $usernameDb; 
                $_SESSION['$level'] = $adminDb; 
            }
            else {
                $_SESSION['$loginMsg'] = "Wrong username or password. If you do not have an account, sign up.";
            }
        }
        if (isset($_SESSION['$username']) && $_SESSION['$level'] == 1) {
            include 'includes/admin-table.php';
        } 
        else if (isset($_SESSION['$username']) && $_SESSION['$level'] == 0) {
            include 'includes/no-access.php';
        }
        else {           
            include 'includes/login.php';   
        }
        
        include 'includes/footer.php';
    ?>
</body>
</html>