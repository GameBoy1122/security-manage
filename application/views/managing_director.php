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

    .topic {
        font-size: 30px;
        margin-top: 40px;
        margin-bottom: 40px;
        text-align: center;
    }

    @media only screen and (max-width: 600px) {
        .topic {
            font-size: 22px;
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
        }
    }



    .director {
        margin-left: auto;
        margin-right: auto;
    }

    .director_name {
        font-size: 24px;
        color: #116DB6;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 600px) {
        .director_name {
            font-size: 10px;
            color: #116DB6;
            text-align: center;
            margin-top: 7px;
            margin-bottom: 7px;
        }
    }

    .director_position {
        font-size: 18px;
        color: black;
        text-align: center;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 600px) {
        .director_position {
            font-size: 8px;
            color: black;
            text-align: center;
            margin-bottom: 10px;
        }
    }
</style>

<section class="head" style=" position: relative;">

    <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
    <div class="topic_header">กรรมการอำนวยการหลักสูตร</div>
</section>

<section class="content">
    <div class="container">
        <div class="topic">
            คณะกรรมการผู้ทรงคุณวุฒิ
        </div>

        <div class="row">
            <?php foreach ($qualified_committee as $key => $qualified_committee_list) { ?>
                <?php if ($key == 0) { ?>
                    <div class="director col-12">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mx-auto mb-3">
                            <div class="card card-custom bg-white border-white border-0">
                                <img class="director_picture"
                                    src="<?php echo base_url('') . $qualified_committee_list->image; ?>" alt="product">
                                <div class="card-body" style="overflow-y: auto">
                                    <h4 class="card-title director_name">
                                        <?php echo $qualified_committee_list->name ?>
                                    </h4>
                                    <p class="card-text director_position">
                                        <?php echo $qualified_committee_list->position ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="director row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($qualified_committee as $key => $qualified_committee_list) { ?>
                    <?php if ($key != 0) { ?>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card card-custom bg-white border-white border-0 mb-3">
                                <img class="director_picture"
                                    src="<?php echo base_url('') . $qualified_committee_list->image; ?>" alt="product">
                                <div class="card-body" style="overflow-y: auto">
                                    <h4 class="card-title director_name">
                                        <?php echo $qualified_committee_list->name ?>
                                    </h4>
                                    <p class="card-text director_position">
                                        <?php echo $qualified_committee_list->position ?>
                                    </p>


                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="topic">
            คณะกรรมการอำนวยการหลักสูตร
        </div>

        <div class="row">

            <?php foreach ($course_steering_committee as $key => $course_steering_committee_list) { ?>
                <?php if ($key == 0) { ?>
                    <div class="director col-12">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mx-auto mb-3">
                            <div class="card card-custom bg-white border-white border-0">
                                <img class="director_picture"
                                    src="<?php echo base_url('') . $course_steering_committee_list->image; ?>" alt="product">
                                <div class="card-body" style="overflow-y: auto">
                                    <h4 class="card-title director_name">
                                        <?php echo $course_steering_committee_list->name ?>
                                    </h4>
                                    <p class="card-text director_position">
                                        <?php echo $course_steering_committee_list->position ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="director row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($course_steering_committee as $key => $course_steering_committee_list) { ?>
                    <?php if ($key != 0) { ?>

                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="card card-custom bg-white border-white border-0 mb-3">
                                <img class="director_picture"
                                    src="<?php echo base_url('') . $course_steering_committee_list->image; ?>" alt="product">
                                <div class="card-body" style="overflow-y: auto">
                                    <h4 class="card-title director_name">
                                        <?php echo $course_steering_committee_list->name ?>
                                    </h4>
                                    <p class="card-text director_position">
                                        <?php echo $course_steering_committee_list->position ?>
                                    </p>


                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>

        <div class="topic">
            จนท.หลักสูตรฯ
        </div>

        <div class="director row row-cols-1 row-cols-md-3 g-4 mb-5">
            <?php foreach ($course_staff as $key => $course_staff_list) { ?>

                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="director_picture" src="<?php echo base_url('') . $course_staff_list->image; ?>"
                            alt="product">
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title director_name">
                                <?php echo $course_staff_list->name ?>
                            </h4>
                            <p class="card-text director_position">
                                <?php echo $course_staff_list->position ?>
                            </p>

                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>


    </div>




</section>