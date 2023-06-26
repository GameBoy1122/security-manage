    <style>
        .file {
            background: none;
            border-radius: 10px;
            width: 100%;
            height: 60px;
            border: 1px solid #3DB1E4;
            text-align: start;
        }

        .file:hover {
            background: #C7EAFD;
            border-radius: 10px;
            width: 100%;
            height: 60px;
            border: 1px solid #3DB1E4;
            color: #1E57A2;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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
        <div class="topic_header">ดาวน์โหลดเอกสาร</div>
    </section>

    <section>

        <div class="container">
            <div class="row ">


                <div class="col-12 ">
                    <button class="btn file text-truncate mb-3"><img class="ps-2 pe-3" src="<?php echo base_url('assets/img/filepic.png') ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
                </div>

                <div class="col-12 ">
                    <button class="btn file text-truncate mb-3"><img class="ps-2 pe-3" src="<?php echo base_url('assets/img/filepic.png') ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
                </div>

                <div class="col-12 ">
                    <button class="btn file text-truncate mb-3"><img class="ps-2 pe-3" src="<?php echo base_url('assets/img/filepic.png') ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
                </div>

                <div class="col-12 ">
                    <button class="btn file text-truncate mb-3"><img class="ps-2 pe-3" src="<?php echo base_url('assets/img/filepic.png') ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
                </div>

                <div class="col-12 ">
                    <button class="btn file text-truncate mb-3"><img class="ps-2 pe-3" src="<?php echo base_url('assets/img/filepic.png') ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
                </div>

                <div class="col-12 ">
                    <button class="btn file text-truncate mb-3"><img class="ps-2 pe-3" src="<?php echo base_url('assets/img/filepic.png') ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</button>
                </div>

            </div>
        </div>

    </section>