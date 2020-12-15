<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>Docstruct | Your Medical One Stop eBooking</title>
</head>
<body>
    <?php include("include/header.php"); ?>
    <div id="body">
        <section class="service">
            <div class="t-wrap">
                <h2>OUR SERVICE</h2>
            </div>
            <div class="s-wrapper">
                <a href="booking.php" class="menu">
                    <img src="img/mp/appoint.svg" alt="appoint">
                    <p>Make an Appointment</p>
                </a>
                <a href="queue.php" class="menu">
                    <img src="img/mp/queue.svg" alt="queue">
                    <p>My Queue</p>
                </a>
                <a href="register.php" class="menu">
                    <img src="img/mp/regnew.png" alt="regnew">
                    <p>Register New Patient</p>
                </a>
            </div>
        </section> 
        <section class="banner prim">
            <div class="text">
                <p class="b-title">ONE STOP<br>medical clinic</p>
                <a href="#" class="btn">GET STARTED <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="img-wrapper">
                <img src="img/mp/img%206.svg" alt="consultation">
            </div>
        </section>
        <section class="why">
            <h2 class="s-title">WHY US?</h2>
            <div class="w-wrapper">
                <div class="item">
                    <div>
                        <i class="far fa-handshake"></i>
                        <h3>Trust</h3>
                    </div>
                    <p> 
                    Over 10 years of experience<br>
                    and<br>
                    trusted by over 10K patients
                    </p>
                </div>
                <div class="item">
                    <div>
                        <i class="far fa-hand-pointer"></i>
                        <h3>Ease of Use</h3>
                    </div>
                    <p> Easy of use at palm of your hand just click away to your reservation</p>
                </div>
                <div class="item">
                    <div>
                        <i class="fas fa-clock"></i>
                        <h3>Time Saver</h3>
                    </div>
                    <p>We offer many service so you don’t need to find another</p>
                </div>
            </div>
        </section>
        <section class="opening darkerb">
             <div>
                 <h2>Opening Hour</h2>
                 <hr>
                 <table>
                     <tr>
                         <td>Monday - Thursday</td>
                         <td>: 8AM - 9PM</td>
                     </tr>
                     <tr>
                         <td>Friday</td>
                         <td>: 8AM - 11AM & 1PM - 9PM</td>
                     </tr>
                     <tr>
                         <td>Saturday</td>
                         <td>: 9AM - 7PM</td>
                     </tr>
                     <tr>
                         <td>Sunday</td>
                         <td>: <span style="font-weight:bold;color:red;">CLOSED</span></td>
                     </tr>
                 </table>
             </div>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>