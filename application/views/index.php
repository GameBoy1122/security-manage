	<style>
		.topic_header {
			position: absolute;
			top: 35%;
			left: 6%;
			font-size: 30px;
			color: white;

		}

		@media only screen and (max-width: 600px) {
			.topic_header {
				position: absolute;
				top: 35%;
				left: 6%;
				font-size: 20px;
				color: white;
			}
		}

		.box {
			background-color: #116DB6;
			border-radius: 20px;
			width: 100px;
		}

		.btn_click {
			background-color: #116DB6;
			width: 50%;
			color: white;
			font-size: 25px;
		}

		@media only screen and (max-width: 900px) {
			.btn_click {
				background-color: #116DB6;
				width: 50%;
				color: white;
				font-size: 14px;
			}
		}

		.news_content {
			margin-top: 10px;
			font-size: 16px;
		}

		.date {
			color: #878787;

		}

		.btn_all {
			color: #116DB6;
			background-color: none;
			border: solid 1px #116DB6;
			border-radius: 30px;
			width: 200px;
			height: 50px;
		}

		.btn_all:hover {
			color: #ffffff;
			background-color: #116DB6;
			border: solid 1px #116DB6;
			border-radius: 30px;
			width: 200px;
			height: 50px;
		}

		.slide-arrow {
			position: absolute;
			top: 50%;
			margin-top: -15px;
		}

		.prev-arrow {
			left: -40px;
			width: 0;
			height: 0;
			border-left: 0 solid transparent;
			border-right: 15px solid #113463;
			border-top: 10px solid transparent;
			border-bottom: 10px solid transparent;
		}

		.next-arrow {
			right: -40px;
			width: 0;
			height: 0;
			border-right: 0 solid transparent;
			border-left: 15px solid #113463;
			border-top: 10px solid transparent;
			border-bottom: 10px solid transparent;
		}
	</style>
	<section id="banner">
		<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo base_url('assets/img/banner.png') ?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('assets/img/banner.png') ?>" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('assets/img/banner.png') ?>" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>
	<section class="mt-3">
		<div class="container">
			<div class="row mb-3">
				<div class="col-auto">
					<img class="box p-3 " src="<?php echo base_url('/assets/img/course.png'); ?>">
				</div>
				<div class="col-6 pt-4 ps-4 mt-1">
					<h2>โครงสร้างหลักสูตร</h2>
				</div>
			</div>

			<div class="row mt-5 mb-3">
				<div class="row mb-3">
					<h5 style="color: #116DB6;">ปรัชญาของหลักสูตร</h5>
				</div>
				<div class="col-12">
					<p>พัฒนาผู้บริหารระดับสูงซึ่งเปรียบเสมือนเป็นคลังสมองของประเทศ ให้มี องค์ความรู้ที่ทันสมัยในองค์ประกอบความมั่นคงแห่งชาติ โดยเฉพาะในด้านความมั่นคงของมนุษย์ มีทักษะ หลักคิด มีหลักเกณฑ์ ในการวิเคราะห์/สังเคราะห์ สถานการณ์อย่างถูกต้อง และเสริมสร้างความสัมพันธ์ระหว่าง ผู้บริหารระดับสูง เพื่อร่วมกันสร้างเสริมความมั่นคงของมนุษย์ และความมั่นคงแห่งชาติโดยรวม</p>
				</div>
			</div>

			<div class="row mb-3">
				<div class="row mb-3">
					<h5 style="color: #116DB6;">วัตถุประสงค์ของหลักสูตร </h5>
				</div>
				<div class="col-auto">
					<p>1. เพื่อให้บุคคลทั่วไปทั้งภาครัฐ ภาคเอกชน และองค์กร สาธารณะ ได้ศึกษาและรับทราบข้อมูลใหม่ๆ ที่ทันสมัยเป็นการเสริมสร้างทักษะการวิเคราะห์สภาวะแวดล้อมที่แปรเปลี่ยนในปัจจุบัน เกี่ยวกับความมั่นคงของมนุษย์ในด้านต่างๆ สามารถสังเคราะห์แนวทาง ในการเสริมสร้างปัญญาอย่างมีประสิทธิภาพ ตลอดจนการเสริมสร้างความรับผิดชอบต่อสังคมของผู้บริหารระดับสูง</p>
				</div>
				<div class="col-auto">
					<p>2. เพื่อให้ผู้บริหารระดับสูงดังกล่าว ได้มีโอกาสเข้ารับการศึกษา มีความรู้ความเข้าใจ เกี่ยวกับการเปลี่ยนแปลงขององค์ประกอบความมั่นคงในมิติต่างๆ ที่มีผลกระทบต่อความมั่นคงแห่งชาติ รวมทั้งให้มีการแลกเปลี่ยนองค์ความรู้ วิสัยทัศน์และประสบการณ์ระหว่างผู้เข้ารับการศึกษาด้วยกัน</p>
				</div>
				<div class="col-auto">
					<p>3. เพื่อให้เกิดการสานสัมพันธ์ที่ดีระหว่างกัน ให้เกิดความรัก ความผูกพัน เพื่อนำความรู้และประสบการณ์ที่ได้รับไปประยุกต์ใช้ ให้เกิดประโยชน์ต่อองค์การ สังคมและประเทศชาติอย่างเป็น</p>
				</div>
			</div>

			<div class="row mt-5 mb-5">
				<div class="col-6 " style="text-align: end;">
					<a href="<?php echo base_url('Course') ?>"><button type="submit" class="btn btn_click">ดูหลักสูตร</button></a>
				</div>
				<div class="col-6  ">
					<a href="<?php echo base_url('Enroll_detail') ?>"><button type="submit" class="btn btn_click">สมัคร</button></a>
				</div>
			</div>

			<div class="row mb-3 pt-5">
				<div class="col-auto">
					<img class="box p-3 " src="<?php echo base_url('/assets/img/newspaper.png'); ?>">
				</div>
				<div class="col-6 pt-4 ps-4 mt-1">
					<h2>โครงสร้างหลักสูตร</h2>
				</div>
			</div>


			<div class="slide_detail">
				<div class="col-12 p-3">
					<div class="card card-custom bg-white border-white border-0 mb-3 p-2">
						<img class="lecturer_picture" src="<?php echo base_url('/assets/img/news.png'); ?>" alt="lecturer">

						<div class="card-body" style="overflow-y: auto">
							<div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; 21/06/2566</div>
							<p class="news_content">แถลงข่าวบันทึกข้อตกลงมูลนิธิการจัดการเพื่อ
								ความมั่นคงและสถานีโทรทัศน์กองทัพบกช่อง 5 เพื่อจัดทำรายการ THE BEST Forever</p>
						</div>
					</div>
				</div>

				<div class="col-12 p-3">
					<div class="card card-custom bg-white border-white border-0 mb-3 p-2">
						<img class="lecturer_picture" src="<?php echo base_url('/assets/img/news.png'); ?>" alt="lecturer">

						<div class="card-body" style="overflow-y: auto">
							<div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; 21/06/2566</div>
							<p class="news_content">แถลงข่าวบันทึกข้อตกลงมูลนิธิการจัดการเพื่อ
								ความมั่นคงและสถานีโทรทัศน์กองทัพบกช่อง 5 เพื่อจัดทำรายการ THE BEST Forever</p>
						</div>
					</div>
				</div>
				<div class="col-12 p-3">
					<div class="card card-custom bg-white border-white border-0 mb-3 p-2">
						<img class="lecturer_picture" src="<?php echo base_url('/assets/img/news.png'); ?>" alt="lecturer">

						<div class="card-body" style="overflow-y: auto">
							<div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; 21/06/2566</div>
							<p class="news_content">แถลงข่าวบันทึกข้อตกลงมูลนิธิการจัดการเพื่อ
								ความมั่นคงและสถานีโทรทัศน์กองทัพบกช่อง 5 เพื่อจัดทำรายการ THE BEST Forever</p>
						</div>
					</div>
				</div>
				<div class="col-12 p-3">
					<div class="card card-custom bg-white border-white border-0 mb-3 p-2">
						<img class="lecturer_picture" src="<?php echo base_url('/assets/img/news.png'); ?>" alt="lecturer">

						<div class="card-body" style="overflow-y: auto">
							<div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; 21/06/2566</div>
							<p class="news_content">แถลงข่าวบันทึกข้อตกลงมูลนิธิการจัดการเพื่อ
								ความมั่นคงและสถานีโทรทัศน์กองทัพบกช่อง 5 เพื่อจัดทำรายการ THE BEST Forever</p>
						</div>
					</div>
				</div>
				<div class="col-12 p-3">
					<div class="card card-custom bg-white border-white border-0 mb-3 p-2">
						<img class="lecturer_picture" src="<?php echo base_url('/assets/img/news.png'); ?>" alt="lecturer">

						<div class="card-body" style="overflow-y: auto">
							<div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; 21/06/2566</div>
							<p class="news_content">แถลงข่าวบันทึกข้อตกลงมูลนิธิการจัดการเพื่อ
								ความมั่นคงและสถานีโทรทัศน์กองทัพบกช่อง 5 เพื่อจัดทำรายการ THE BEST Forever</p>
						</div>
					</div>
				</div>
				<div class="col-12 p-3">
					<div class="card card-custom bg-white border-white border-0 mb-3 p-2">
						<img class="lecturer_picture" src="<?php echo base_url('/assets/img/news.png'); ?>" alt="lecturer">

						<div class="card-body" style="overflow-y: auto">
							<div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; 21/06/2566</div>
							<p class="news_content">แถลงข่าวบันทึกข้อตกลงมูลนิธิการจัดการเพื่อ
								ความมั่นคงและสถานีโทรทัศน์กองทัพบกช่อง 5 เพื่อจัดทำรายการ THE BEST Forever</p>
						</div>
					</div>
				</div>
			</div>


			<div class="row justify-content-center mt-5 mb-5 pt-3 ">
				<button type="submit" class="btn btn_all">ดูทั้งหมด</button>
			</div>

		</div>

	</section>




	<script>
		$(document).ready(function() {
			$('.slide_detail').slick({
				prevArrow: '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>',
				nextArrow: '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>',
				arrows: true,
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 4,
				responsive: [{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
							dots: true
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
			});
		});
	</script>