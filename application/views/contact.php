    <style>
        .icon {
            line-height: 1.7;
            width: 45px;
            height: 45px;
            background-color: #3DB1E4;
            border-radius: 100%;
            font-size: 20px;

        }

        .icon:hover {
            line-height: 1.7;
            width: 45px;
            height: 45px;
            background-color: #3DB1E4;
            border-radius: 100%;
            font-size: 20px;
        }

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
    </style>

    <section class="head mb-5" style=" position: relative;">

        <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
        <div class="topic_header">ติดต่อเรา</div>
    </section>

    <?php foreach ($contacts as $key => $contact_list) { ?>
        <section class="container">

            <div class="row">
                <div class="col-auto">
                    <h3 style="color: #1B3D84; font-weight: bold;">สำนักงานอำนวยการหลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง</h3>
                </div>

                <div class="row mt-5">

                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-auto ">
                                <div class="btn icon "><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i></div>
                            </div>
                            <div class="col-xl-8 col-lg-6 col-sm-6 col-6 pt-2">
                                <?php echo $contact_list->address ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-auto ">
                                <div class="btn icon m-0"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></div>
                            </div>
                            <div class="col-xl-8 col-lg-6 col-sm-6 col-6">
                                <?php echo $contact_list->tel ?><br><?php echo $contact_list->mobile_phone ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-auto">
                                <div class="btn icon m-0"><i class="fa-solid fa-envelope" style="color: #ffffff;"></i></div>
                            </div>
                            <div class="col-auto mt-2">
                            <?php echo $contact_list->email ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <i class="fa-brands fa-facebook b" style="color: #3B5998; font-size: 30px;"></i>
                        <i class="fa-brands fa-line" style="color: #00CA5F; font-size: 30px; margin-left: 20px;"></i>

                    </div>


                </div>
            </div>

        </section>


        <section>
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-12" style="padding: 0;">
                        <?php echo $contact_list->location?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>