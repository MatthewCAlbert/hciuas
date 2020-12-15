<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>Login | Docstruct</title>
</head>
<body>
    <?php include("include/headerv2.php"); ?>
    <div id="body" class="one">
        <section class="auth">
             <h2>SIGN IN</h2>
             <form action="" method="post">
                 <div class="form-group">
                    <label for="">Username / Email</label>
                    <input type="text" name="umail" class="form-control" placeholder="username / budi@example.com"/>
                 </div>
                 <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="******"/>
                 </div>
                 <button class="submit form-control" type="submit">LOGIN <i class="fas fa-chevron-right"></i></button>
                 <a href="register.html">Don't have account yet? Register Here.</a>
             </form>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>