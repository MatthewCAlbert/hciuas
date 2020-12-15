<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>Booking Confirmation | Docstruct</title>
</head>
<body>
    <?php include("include/headerv2.php"); ?>
    <div id="body" class="one">
        <div class="soft-alert soft-alert-success" id="flipflop">
            <div class="sf-wrapper">
                <i class="fas fa-check-circle"></i>
                <p class="title">Success</p>
                <p class="desc">Your Booking is Success.</p>
                <button class="close btn" onclick="SoftAlert.close('flipflop');window.location='/';">Next</button>
            </div>
        </div>
        <section class="d-flex c-booking justify-content-center align-items-center flex-column">
            <div class="progress complete">
                <div>1</div>
                <div class="c-line"></div>
                <div>2</div>
            </div>
            <h1>Your eBooking</h1>
            <div class="d-flex info-wrapper">
                <div class="qr">
                    <img src="img/mp/example-qr.png" alt="qrcode">
                </div>
                <div>
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
            </div>
            <small style="margin-top:20px;">Scan this QR code at receptionist to confirm your attendance.</small>
            <small>This information also have been sent to your email address. Please check your email.</small>
            <a href="javascript:void(0)" class="btn confirm" onclick="SoftAlert.open('flipflop');">Confirm</a>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>