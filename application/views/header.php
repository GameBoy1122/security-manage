<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Advanced Security Mangement Program</title>
	<link href="<?php echo base_url('/assets/img/LOGO-Main.png') ?>" rel="shortcut icon" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<?php
$codeigniter_instance = &get_instance();
$ln = $codeigniter_instance->session->userdata("CURRENT_LANGUAGE");
$actual_link = base_url();
$current_url_array = $_SERVER['REQUEST_URI'];
$current_url_array = explode("/", uri_string());
?>

<body>
	<div class="container p-3">
		<div class="row">
			<div class="col-xl-1 col-lg-2 col-sm-12 col-12 text-center">
				<a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/LOGO-Main.png') ?>" alt="LOGO-Main" style="width: 60px;"></a>
			</div>
			<div class="col-xl-10 col-lg-10 col-sm-12 col-12">
				<div class="row">
					<div class="col-xl-auto col-lg-auto col-sm-12 col-12 mt-xl-2 text-xl-start text-lg-start text-sm-center text-center" style="color: #116DB6;">
						<span><b>หลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง (มส.) </b></span>
						<p class="p-0 m-0">Advanced Security Mangement Program </p>
					</div>
					<div class="col-xl-auto col-lg-auto col-sm-12 col-12 mt-xl-2 text-xl-start text-lg-start text-sm-center text-center" style="color: #116DB6;">
						<span><b>มูลนิธิการจัดการเพื่อความมั่นคง</b></span>
						<p class="p-0 m-0">Security Management Foundation </p>
					</div>
				</div>

			</div>

		</div>
	</div>

	<nav class="navbar navbar-expand-lg bg-nav-main">
		<div class="container">

			<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav me-auto" style="color:white">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php echo base_url('') ?>">หน้าหลัก</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Course') ?>">โครงสร้างหลักสูตร</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Managing_Director') ?>">กรรมการอำนวยการหลักสูตร</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Lecturer') ?>">วิทยากร</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('News') ?>">ข่าวสาร/กิจกรรม</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ทำเนียบรุ่น</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('download') ?>">ดาวน์โหลดเอกสาร</a>
					</li>
					<li class="nav-item dropdown me-3">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							ติดต่อ
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo base_url('contact') ?>">สำนักงานอำนวยการ</a></li>
							<li><a class="dropdown-item" href="<?php echo base_url('Place') ?>">สถานที่อบรม</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<a class="navbar-brand" href="<?php echo base_url('Enroll_detail') ?>">
				<button type="button" class="btn btn-light">สมัครเรียน</button>
			</a>
		</div>
	</nav>