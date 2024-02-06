<?php
$ruta = Rut::ctrRuta();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link href="<?php echo $ruta . "/" ?>img/icon.ico" rel="icon">
	<title>C'MON</title>
	<link href="<?php echo $ruta . "/" ?>css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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
</head>

<body>
	<div class="wrapper">

		<!-- Nav Bar Start -->
		<?php include "modulos/cabeceraPerfil.php"; ?>
		<!-- Nav Bar End -->

		<?php
		if (isset($_GET["pagina"])) {

			if ($_GET["pagina"] == "perfil") {
				
				include "modulos/" . $_GET["pagina"] . ".php";
				
			}
		} else {
			include "modulos/perfil.php";
		}

		?>



		
	</div>
	<?php include "modulos/footerPerfil.php"; ?>

	<script src="<?php echo $ruta . "/" ?>js/app.js"></script>

</body>

</html>