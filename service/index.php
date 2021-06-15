<?php
require '../dbconfig.php';
?>
<?php
if (empty($_SESSION['username']) || empty($_SESSION['uid'])) {
?>
    <script>
        window.location.href = "../signup.php";
    </script>
    <?php
} else {
    if (isset($_GET['service'])) {
        // echo '<h1>' . $_GET['service'] . '</h1>';u there?
    ?>
        <html>

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Vibgyor Advisors</title>

            <!-- Favicon -->
            <link rel="shortcut icon" href="../assets/images/favicon.png">
            <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/vendor/fontawesome.css">
            <link rel="stylesheet" href="../assets/css/vendor/lightbox.css">
            <link rel="stylesheet" href="../assets/css/plugins/plugins.css">
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="stylesheet" href="../assets/css/vendor/mdb.min.css">
            <link rel="stylesheet" href="../assets/css/vendor/aos.css">



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
            <title><?php echo $_GET['service']; ?></title>

            <style>
                #fontsty {
                    cursor: pointer;
                }

                .tophr {
                    border: 3px solid rgb(178, 126, 4);
                    width: 19%;
                }

                .divderhr {
                    width: 90%;
                    margin: auto;
                    margin-bottom: 5rem;
                }

                .firstdiv {
                    height: 90%;
                    /* background-color: rgb(215, 216, 216); */
                }

                .spacebt {
                    width: 50%;
                }

                .head {
                    color: #000;
                    font-family: 'Montserrat', sans-serif !important;
                    font-size: 30px;
                    font-weight: 600;
                }


                /* table */

                #fontsty {
                    font-family: 'Montserrat', sans-serif !important;
                    font-size: 12px;
                    font-weight: bold;
                }

                @media (max-width:600px) {
                    #fontsty {
                        font-family: 'Montserrat', sans-serif !important;
                        font-size: 8px;
                        font-weight: bold;
                    }
                }


                /* sectioncolor */

                .sectioncolor1 {
                    background-color: rgb(238, 250, 248);
                }

                .sectioncolor2 {
                    background-color: rgb(253, 250, 250)
                }

                .heading {
                    margin-top: 10%;
                    text-align: center;
                }

                @media (max-width:900px) {
                    .heading {
                        margin-top: 28%;
                        text-align: center;
                    }
                }
            </style>
        </head>

        <body>
            <div class="main-page">
                <!-- Start Header -->
                <nav class="navbar fixed-top navbar-expand-md navbar-light sticky" style="background-color: white;">
                    <a class="navbar-brand" href="#"><img src="../assets/images/main.png" style="width:200px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"><i data-feather="menu"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" style="color:rgb(201, 21, 156);margin-right: 5rem;" href="../newshome.php">Back</a>
                            </li>

                        </ul>
                    </div>
                </nav>


                <?php
                echo '<h1 class="heading">' . $_GET['service'] . '</h1>'
                ?>


                <div class="container" style="padding:10px 10px;margin-bottom:10%;">

                    <div id="header"></div>
                    <div class="well">
                        <div class="row" id="csv-display" style="height:500px;overflow: scroll;">
                        </div>
                    </div>


                </div>

                <!-- Footer -->
                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <h6>Locate Us</h6>
                                <ul class="footer-links">
                                    <li><i class="fas fa-map-marker-alt"></i>&emsp;Vibgyor Advicorp Private Limited, 117, Swastik Disa Corporate Park, Opp Shreyas Cinema, LBS Marg, Ghatkopar (W), Mumbai 400086.</li>
                                    <li>
                                        <div class="map"> </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <h6>Connect Us</h6>
                                <ul class="footer-links">
                                    <li><i class="fas fa-envelope"></i>&emsp;info@vibgyoradvisors.com</li>
                                    <li><i class="fas fa-phone"></i>&emsp;9324361956</li>
                                    <li><i class="fas fa-tty"></i>&emsp;022-79615327</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-md-4">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4483.712803053567!2d72.91082386943492!3d19.09282140785004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7cc36cfdd89%3A0x108837ab2c1bc1f!2sSwastik%20Disa%20Corporate%20Park!5e0!3m2!1sen!2sin!4v1620983347252!5m2!1sen!2sin" width="300" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                        </div>
                        <hr style="color:#cc2e72;">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <p class="copyright-text"> Division of Vibgyor Advicorpr PVT Limited &copy; 2019

                                </p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="https://www.facebook.com/sachin.neema.332/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="dribbble" href="https://www.instagram.com/vibgyor_advisors/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </footer>
                <!-- Footer -->
            </div>

            <script type="text/javascript">
                var data, pel, i;
                <?php
                $service = $con->query("select csv from `Services` where service='" . $_GET['service'] . "'")->fetch_assoc()['csv'];
                // $service = 'docs/' . $service; 
                $service = './import_intern.csv'
                ?>
                $.ajax({
                    type: "GET",
                    url: "<?php echo $service; ?>",
                    dataType: "text",
                    success: function(response) {
                        data = $.csv.toArrays(response);


                        generateHtmlTable(data);
                    }
                });

                function generateHtmlTable(data) {
                    var html = '<table  class="table table-condensed table-hover table-striped">';

                    if (typeof(data[0]) === 'undefined') {
                        return null;
                    } else {
                        $.each(data, function(index, row) {

                            const start_date = new Date('08-10-2020'),
                                end_date = new Date('09-17-2020');
                            if (index > 0) {
                                var key = new Date(data[index][3]);
                                console.log("Start Day=", start_date);
                                console.log("End Date=", end_date);
                                console.log("Key Date=", key);
                                if(start_date > key || end_date < key) {
                                return;
                                }
                            }

                            if (index == 0) {
                                html += '<thead>';
                                html += '<tr>';
                                $.each(row, function(index, colData) {
                                    html += '<th>';
                                    html += colData;
                                    html += '</th>';
                                });
                                html += '</tr>';
                                html += '</thead>';
                                html += '<tbody>';
                            } else {
                                html += '<tr>';
                                $.each(row, function(index, colData) {

                                    html += '<td>';
                                    html += colData;
                                    html += '</td>';


                                });
                                html += '</tr>';
                            }
                        });
                        html += '</tbody>';
                        html += '</table>';

                        $('#csv-display').append(html);
                    }
                }
            </script>
            <!-- JS -->
            <!-- Modernizer JS -->
            <script src="../assets/js/vendor/modernizr.min.js"></script>
            <!-- jQuery JS -->
            <script src="../assets/js/vendor/jquery.js"></script>
            <!-- Bootstrap JS -->
            <script src="../assets/js/vendor/bootstrap.min.js"></script>
            <script src="../assets/js/vendor/stellar.js"></script>
            <script src="../assets/js/vendor/particles.js"></script>
            <script src="../assets/js/vendor/masonry.js"></script>
            <script src="../assets/js/vendor/stickysidebar.js"></script>
            <script src="../assets/js/plugins/plugins.min.js"></script>
            <script src="../assets/js/vendor/mdb.min.js"></script>
            <!-- Main JS -->
            <script src="../assets/js/main.js"></script>
            <script src="../assets/js/lazyload.js"></script>



            <script src="/assets/js/vendor/aos.js"></script>
            <script>
                AOS.init({
                    offset: 250, // offset (in px) from the original trigger point
                    delay: 90, // values from 0 to 3000, with step 50ms
                    duration: 800,
                });
            </script>


            <script src="js/nav.js "></script>

            <script src="../assets/js/services.js"></script>

        </body>

        </html>
    <?php
    } else {
    ?>
        <script>
            window.location.href = "../newshome.php";
        </script>
<?php
    }
}
