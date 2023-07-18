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
        <div class="topic_header">ติดต่อ</div>
    </section>
    
    <?php foreach ($Training_place as $key => $Training_place_list) { ?>
        <section class="container">

            <div class="row">
                <div class="col-auto">
                    <h3 style="color: #1B3D84; font-weight: bold;">สถานที่อบรม</h3>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-auto ">
                                <div class="btn icon m-0"><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i></div>
                            </div>
                            <div class="col-auto  pt-2">
                                <?php echo $Training_place_list->address ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-12" style="padding: 0;">
                        <?php echo $Training_place_list->location ?>
                    </div>
                </div>
            </div>

        </section>
    <?php } ?>