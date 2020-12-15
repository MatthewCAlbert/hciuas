<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/head.php"); ?>
    <title>Booking | Docstruct</title>
</head>
<body>
    <?php include("include/headerv2.php"); ?>
    <div id="body" class="one">
        <div class="soft-alert soft-alert-info" id="flipflop">
            <div class="sf-wrapper">
                <i class="fas fa-info-circle"></i>
                <p class="title">Notification</p>
                <p class="desc">Please come 15 minutes before the appointment.</p>
                <button class="close btn" onclick="SoftAlert.close('flipflop');window.location='booking-complete.php';">Next</button>
            </div>
        </div>
        <section class="booking">
            <div class="left d-flex flex-column">
                <div class="p-wrapper">
                    <div class="progress">
                        <div>1</div>
                        <div class="c-line"></div>
                        <div>2</div>
                    </div>
                </div>
                <div class="schedule">
                    <div class="d-flex justify-content-center flex-column">
                        <h3>Opening Hours</h3>
                        <table>
                            <tr>
                                <td>Monday - Thursday</td>
                                <td>8AM - 9PM</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>8AM - 11AM & 1PM - 9PM</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td><span style="font-weight:bold;color:red;">Closed</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="emergency">
                    <h3>Emergency</h3>
                    <a class="btn call"><i class="fas fa-phone"></i>Call +62 1 500 911</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis amet molestie magna eu a egestas id. Ac tortor cras turpis bibendum in nec eget. Euismod enim, nunc, et arcu. Morbi non semper sed bibendum volutpat</p>
                </div>
            </div>
            <div class="right regis">
                <h1>Create New eBooking</h1>
                <h3>Make an appointment</h3>
                <div class="d-flex">
                    <form action="booking-complete.php">
                        <div>
                            <div class="form-group">
                                <label for="">Specialist</label>
                                <select class="form-control" name="specialist" id="">
                                    <option value="Umum">Umum</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Gigi">Gigi</option>
                                    <option value="Kebidanan">Kebidanan</option>
                                    <option value="Lab">Laboratorium</option>
                                    <option value="Fisioterapi">Fisioterapi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Purpose</label>
                                <select class="form-control" name="purpose" id="">
                                    <option value="checkup">Checkup</option>
                                    <option value="operasi">Operasi</option>
                                    <option value="konsultasi">Konsultasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Complaints</label>
                                <textarea class="form-control" name="complaints" id="" cols="30" rows="5" class="form-control" placeholder="Contoh: muntah darah, mual-mual"></textarea>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="">Doctor</label>
                                <select class="form-control" name="doctor" id="">
                                    <option value="1">Dr. Ohii Mark</option>
                                    <option value="2">Dr. Lisa Blackpink</option>
                                    <option value="3">Dr. Phil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input class="form-control" type="date" name="date" placeholder="Pilih tanggal"/>
                            </div>
                            <div class="form-group">
                                <label for="">Time</label>
                                <select class="form-control" name="time" id="">
                                    <option value="none">Pilih Jam <i class="fas fa-clock"></i></option>
                                    <option value="0900">09:00</option>
                                    <option value="1000">10:00</option>
                                    <option value="1100">11:00</option>
                                    <option value="1200">12:00</option>
                                    <option value="1300">13:00</option>
                                    <option value="1400">14:00</option>
                                    <option value="1500">15:00</option>
                                    <option value="1600">16:00</option>
                                    <option value="1700">17:00</option>
                                    <option value="1800">18:00</option>
                                    <option value="1900">19:00</option>
                                    <option value="2000">20:00</option>
                                    <option value="2100">21:00</option>
                                </select>
                                <small>Note: Please come 15 minutes before the appointment.</small>
                            </div>
                        </div>
                        <div class="submit">
                            <button class="btn" onclick="SoftAlert.open('flipflop');" type="button">Make Appointment</button>
                        </div>
                    </form>
                    <div class="backchar">
                        <img src="img/mp/img%208.svg" alt="doc">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("include/footer.php"); ?>
</body>
</html>