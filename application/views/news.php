<style>
    .topic_header {
        position: absolute;
        top: 35%;
        left: 5%;
        font-size: 30px;
        color: white;
    }

    @media only screen and (max-width: 600px) {
        .topic_header {
            position: absolute;
            top: 35%;
            left: 5%;
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

    .first_director {
        margin-left: auto;
        margin-right: auto;
    }

    .news_content {
        margin-top: 10px;
        font-size: 16px;
    }

    .date {
        color: #878787;

    }

    a {
        text-decoration: none;
    }
</style>

<section class="head" style=" position: relative;">

    <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
    <div class="topic_header">ข่าวสารและกิจกรรม</div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <?php foreach ($news as $key => $news_list) { ?>
                <div class="col-6 col-sm-6 col-lg-4 col-xl-3 mt-4">
                    <a href="<?php echo base_url('news/details/') . $news_list->news_id ?>">
                        <div class="card card-custom bg-white border-white border-0 mb-3">
                            <img class="lecturer_picture" src="<?php echo base_url('') . $news_list->image; ?>" alt="lecturer">
                            <div class="card-body" style="overflow-y: auto">
                                <div class="date"><i class="calendar_icon fa-solid fa-calendar-days"></i> &nbsp; <?php echo $news_list->created_date ?></div>
                                <p class="news_content "><?php echo $news_list->title ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>