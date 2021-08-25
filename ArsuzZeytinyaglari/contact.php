<!DOCTYPE html>
<html>

<head>
    <title>Arsuz Zeytinyağları / İletişim</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script type="text/javascript" src="js/contact.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.3/firebase-analytics.js"></script>
    <script src="js/firebase.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon_icon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <!--===============================================================================================-->

</head>

<body>
    <?php include("header2.php"); ?>

    <div class="container-contact100">
        <div class="wrap-contact100" style="height: 1000px !important;">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Türkiye'nin her yanına ulaştırıyoruz!
                </span>

                <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row align-items-center">
            <div class="col-lg-6" style="width: 500px !important" >
            <h6 style="width: 500px !important">Whatsapp İletişim Hattımız</h6>
                    <h2 style="width: 500px !important" class="font-weight-light">Mehmet Şenkal</h2>
                    <p style="font-size: 24px !important" class="font-italic text-muted mb-4">0505 258 28 30</p>
                </div>
                <div class="col-lg-5 px-5 mx-auto"><img src="images/zeytincilik.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            </div>         
        </div>
    </div>
            </form>

            <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Adres
                        </span>

                        <span class="txt2">
                        Arsuz/Hatay, HTY 31000 TR
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Hadi Konuşalım!
                        </span>

                        <span class="txt3">
                            +90 0505 258 28 30
                        </span>
                    </div>
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                    </div>

                    <div class="flex-col size2">
                        <span class="txt1 p-b-20">
                            Genel Destek
                        </span>

                        <span class="txt3">
                            arsuzzeytinyaglari@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <?php include("footer.php"); ?>

</body>

</html>