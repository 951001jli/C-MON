<?php
$ruta = Rut::ctrRuta();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>C'MON</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Favicon -->
    <link href="<?php echo $ruta . "/" ?>img/icon.ico" rel="icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
    <!-- Template Stylesheet -->
    <link href="<?php echo $ruta . "/" ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/shopping.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/login.css" rel="stylesheet">

</head>

<body>
    <!-- Nav Bar Start -->
    <?php include "modulos/cabezera.php"; ?>
    <!-- Nav Bar End -->


    <!-- DECLARAMOS LAS RUTAS NUEVAS INCLUYENDO UN .PHP -->
    <?php
    if (isset($_GET["pagina"])) {

        if ($_GET["pagina"] == "inicio") {
            include "modulos/carrusel.php";
            include "modulos/" . $_GET["pagina"] . ".php";
        }

        if ($_GET["pagina"] == "nosotros") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }

        if ($_GET["pagina"] == "contactanos") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }

        if ($_GET["pagina"] == "galeria") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }

        if ($_GET["pagina"] == "tienda") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }

        if ($_GET["pagina"] == "mapa") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }

        if ($_GET["pagina"] == "login") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }

    } else {
        include "modulos/carrusel.php";
        include "modulos/inicio.php";
    }

    ?>
    <div class="container-redes">
        <div class="barra">
            <li><a class="facebook" href="https://www.facebook.com/people/Equi-Mts/pfbid0xorFVVBVRvfXobTfB92wpog3TzQ6qCxeH3tQnpFAjLRPf5D8v2b5e1yfdoqo95Gyl/"><i class="fab fa-facebook"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/home?lang=es"><i class="fab fa-twitter"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/cmon_fast1/"><i class="fab fa-instagram"></i></a></li>
        </div>
    </div>
    <!-- Footer Start -->
    <?php include "modulos/footer.php";  ?>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="<?php echo $ruta . "/" ?>mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $ruta . "/" ?>js/main.js"></script>
    <!-- Template Javascript -->
    <script src="<?php echo $ruta . "/" ?>js/app.js" async></script>
    <script src="<?php echo $ruta . "/" ?>js/login.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/lightbox.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/redes.js"></script>
    <!-- Alerts Javascript -->
    <script src="<?php echo $ruta . "/" ?>js/sweetalert2.all.min.js"></script>
</body>

</html>