<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SFIT</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>
<?php
$codeigniter_instance = &get_instance();
$ln = $codeigniter_instance->session->userdata("CURRENT_LANGUAGE");
$actual_link = base_url();
$current_url_array = $_SERVER['REQUEST_URI'];
$current_url_array = explode("/", uri_string());
?>

<body>

	<div class="text-center p-3 bg-nav-social text-white ">
		<div class="row justify-content-between">
			<div class="col-xl-4 col-lg-4 col-12 text-xl-center text-lg-center text-sm-center text-start">
				<span>
					<i class="fas fa-envelope me-3 text-white"></i>
					Email : s.fitrehab@gmail.com
				</span>
			</div>
			<div class="col-xl-4 col-lg-4 col-12 text-start text-xl-center text-lg-center text-sm-center text-start">
				<span>
					<i class="fa-brands fa-facebook fa-xl text-white m-1"></i>
					<i class="fa-brands fa-line fa-xl text-white m-1"></i>
					<i class="fa-brands fa-whatsapp fa-xl text-white m-1"></i>
					<i class="fa-brands fa-youtube fa-xl text-white m-1"></i>
				</span>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/LOGO-S-FIT-REHAB.png') ?>" alt="LOGO-S-FIT-REHAB" style="width: 120px;"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto justify-content-between">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php echo base_url('') ?>"><?php echo getWording('index_menu', 'homepage') ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('About') ?>"><?php echo getWording('index_menu', 'ab') ?></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="<?php echo base_url('Ourservices') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php echo getWording('index_menu', 'services') ?>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo base_url('Ourservices') ?>"><?php echo getWording('index_menu', 'services') ?></a></li>
							<!-- <li><a class="dropdown-item" href="#">Another action</a></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li> -->
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('review') ?>"><?php echo getWording('index_menu', 'testimonial') ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('knowledge') ?>"><?php echo getWording('index_menu', 'article') ?></a>
					</li>
					<li class="nav-item dropdown me-3">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php echo getWording('index_menu', 'contact_us') ?>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo base_url('contact') ?>"><?php echo getWording('index_menu', 'contact_us') ?></a></li>
						</ul>
					</li>
					<li class="nav-item dropdown" style="border: 1px solid;border-radius: 4px;">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php if ($ln != 'en' && $ln != 'ae') { ?>
								TH
							<?php } elseif ($ln != 'th' && $ln != 'ae') { ?>
								EN
							<?php } elseif ($ln != 'en' && $ln != 'th') { ?>
								AE
							<?php } ?>
						</a>
						<ul class="dropdown-menu">
							<?php if ($ln != 'en' && $ln != 'ae') { ?>
								<li><a class="dropdown-item" href="<?php echo base_url("language/change/ae?url=" . $actual_link); ?>">AE</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url("language/change/en?url=" . $actual_link); ?>">EN</a></li>
							<?php } elseif ($ln != 'th' && $ln != 'ae') { ?>
								<li><a class="dropdown-item" href="<?php echo base_url("language/change/ae?url=" . $actual_link); ?>">AE</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url("language/change/th?url=" . $actual_link); ?>">TH</a></li>
							<?php } elseif ($ln != 'en' && $ln != 'th') { ?>
								<li><a class="dropdown-item" href="<?php echo base_url("language/change/th?url=" . $actual_link); ?>">TH</a></li>
								<li><a class="dropdown-item" href="<?php echo base_url("language/change/en?url=" . $actual_link); ?>">EN</a></li>
							<?php } ?>

						</ul>
					</li>
					<li class="nav-item">
						<i class="nav-link fa-solid fa-magnifying-glass fa-xl mt-3" style="color:#1B3D84"></i>
					</li>
					<li class="nav-item">
						<i class="nav-link fa-sharp fa-solid fa-phone fa-xl mt-3" style="color:#1B3D84"></i>
						+66 (088) 766 8888
					</li>

				</ul>

			</div>
		</div>
	</nav>