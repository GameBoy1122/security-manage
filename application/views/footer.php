<?php
$codeigniter_instance = &get_instance();
$codeigniter_instance->load->model("Contact_us_model");
$model_filter = new stdClass();
$model_filter->where["contact_us_id"] = "1";
$model_filter->order_by = 'contact_us_id ASC';
$Contact_us = $codeigniter_instance->Contact_us_model->search($model_filter);
$Contact_us = $Contact_us[0];
// echo "<pre>";
// print_r($Contact_us);
// exit();

?>
<footer class="bg-footer-main text-white text-start">
	<!-- Grid container -->
	<div class="container pt-5">
		<!--Grid row-->
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-4 mb-md-0">
				<div class="row">
					<!-- Grid column -->
					<div class="col-12">
						<!-- Links -->
						<h5 class="text-uppercase">สำนักงานอำนวยการหลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง</h5>
						<p><i class="fa-solid fa-location-dot me-3 text-white"></i><?php echo $Contact_us->address ?></p>
						<p><i class="fas fa-phone me-3 text-white"></i><?php echo $Contact_us->tel ?></p>
						<p><i class="fas fa-phone me-3 text-white"></i><?php echo $Contact_us->mobile_phone ?></p>
						<p>
							<i class="fas fa-envelope me-3 text-white"></i>
							<?php echo $Contact_us->email ?>
						</p>
					</div>
					<!--Grid column-->

				</div>
			</div>

			<!--Grid column-->
			<div class="col-lg-6 col-md-6 mb-4 mb-md-0">
				<?php echo $Contact_us->location ?>
			</div>
			<!--Grid column-->
		</div>
		<!--Grid row-->
	</div>
	<!-- Grid container -->

	<!-- Copyright -->
	<div class="text-center p-3 bg-footer-copyright">
		Copyright 2023 All Rights Reserved
	</div>
	<!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>