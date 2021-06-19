<div class="container" id="articles" style="margin-bottom: 200px;">
    <section class="row">  
        <h2 class="col-sm-12 naslov">Sign in</h2>
        <article class="col-sm-12 row">

            <div class="col-sm-1"></div>

            <form action="administration.php" method="post" class="col-sm-10" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" id="login" name="login" class="btn btn-primary">Sign in</button>
                    <a style="margin: 0 15px;" href="register.php">Sign up.</a>
                </div>
                
                <div id="loginMsg"><?php echo $_SESSION['$loginMsg']; ?></div>
            </form>
            
            <div class="col-sm-1"></div>

        </article>
    </section>
</div>