<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>My Queue | Docstruct</title>
</head>
<body>
    <?php include("include/header.php"); ?>
    <div id="body" class="one">
        <section class="queue d-flex justify-content-center align-items-center flex-column">
             <h1>My Queue</h1>
             <h2>Your current appointment:</h2>
             <div class="info-wrapper">
                <div class="info-group">
                    <h3>Queue Number</h3>
                    <p>3</p>
                </div>
                <div class="info-group">
                    <h3>Name</h3>
                    <p>Budi Master</p>
                </div>
                <div class="info-group">
                    <h3>Service</h3>
                    <p>My Heart Specialist</p>
                </div>
                <div class="info-group">
                    <h3>Doctor</h3>
                    <p>Dr. Lisa Blackpink</p>
                </div>
                <div class="info-group">
                    <h3>Date & Time</h3>
                    <p>January 1, 1970 at 5.00pm - 5.30pm</p>
                </div>
             </div>
             <div class="qn">
                <h2>Current Patient</h2>
                <div class="qnn">
                    <span>2</span>
                </div>
                <div class="alert alert-warning"><i class="fas fa-info-circle"></i>Get Ready, It’s Next Turn</div>
             </div>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>