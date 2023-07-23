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
        font-size: 40px;
        margin-top: 40px;
        margin-bottom: 40px;
        text-align: center;

    }


    .lecturer_name {
        font-size: 18px;
        font-weight: bold;
        color: #116DB6;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 600px) {
        .lecturer_name {
            font-size: 6px;
            color: #116DB6;
            text-align: center;
            margin-top: 7px;
            margin-bottom: 7px;
        }
    }

    .lecturer_position {
        font-size: 14px;
        color: black;
        text-align: center;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 600px) {
        .lecturer_position {
            font-size: 6px;
            color: black;
            text-align: center;
            margin-bottom: 10px;
        }
    }
</style>

<section class="head" style=" position: relative;">

    <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
    <div class="topic_header">วิทยากร</div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($lecturer as $key => $lecturer_list) { ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card card-custom bg-white border-white border-0 mb-3">
                            <img class="lecturer_picture" src="<?php echo base_url('') . $lecturer_list->image; ?>" alt="lecturer">
                            <div class="card-body" style="overflow-y: auto">
                                <h4 class="card-text lecturer_name"><?php echo $lecturer_list->name; ?></h4>
                                <p class="card-text lecturer_position">
                                    <?php echo $lecturer_list->position; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>