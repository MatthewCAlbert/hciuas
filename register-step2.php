<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>Register | Docstruct</title>
</head>
<body>
    <?php include("include/headerv2.php"); ?>
    <div id="body" class="one st-2">
        <section class="auth">
             <h2>REGISTER, 
                <br>ALMOST DONE</h2>
             <div class="progress complete">
                 <div>1</div>
                 <div class="c-line"></div>
                 <div>2</div>
             </div>
             <form action="/" method="post">
                 <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Budi Master"/>
                 </div>
                 <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Pasir Kaliki no 23 Bandung"/>
                 </div>
                 <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="+62 xxxx xxxx xx"/>
                 </div>
                 <div class="form-group">
                    <label for="">Gender</label>
                    <div class="radio-wrapper">
                        <div>
                            <input type="radio" id="gm" name="gender" value="male"><label for="gm">Male</label>
                        </div>
                        <div>
                            <input type="radio" id="fm" name="gender" value="female"><label for="fm">Female</label>
                        </div>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="dd/mm/yyyy"/>
                 </div>
                 <button class="submit form-control" type="submit">REGISTER <i class="fas fa-chevron-right"></i></button>
             </form>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>