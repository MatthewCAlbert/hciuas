<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>Register | Docstruct</title>
</head>
<body>
    <?php include("include/headerv2.php"); ?>
    <div id="body" class="one">
        <section class="auth">
             <h2>REGISTER NEW PATIENT</h2>
             <div class="progress">
                 <div>1</div>
                 <div class="c-line"></div>
                 <div>2</div>
             </div>
             <form action="" method="post">
                 <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="username"/>
                 </div>
                 <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="budi@example.com"/>
                 </div>
                 <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="******"/>
                 </div>
                 <div class="form-group">
                    <label for="">Retype Password</label>
                    <input type="password" name="repassword" class="form-control" placeholder="******"/>
                 </div>
                 <button class="submit form-control" type="button" onclick="window.location = 'register-step2.php';">CONTINUE <i class="fas fa-chevron-right"></i></button>
             </form>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>