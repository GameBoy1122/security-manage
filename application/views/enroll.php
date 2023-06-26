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

    .enroll_form {
        border-radius: 10px;
        background-color: white;

    }

    .topic {
        color: #116DB6;
        width: 212px;
        height: 42px;
        font-size: 26px;
        margin-top: 7%;
    }
</style>

<section class="head" style=" position: relative;">
    <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
    <div class="topic_header">สมัครเรียน</div>
</section>

<section class="enroll">
    <div class="container enroll_form">
        <div class="topic">๑. ข้อมูลส่วนบุคคล</div>
        <div class="row mt-4 mb-4">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label" for="name_thai">ยศ - ชื่อ นามสกุล</label>
                    <input type="text" id="name_thai" class="form-control" />
                </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label" for="name_english">ชื่อ-สกุล (ภาษาอังกฤษ)</label>
                    <input type="text" id="name_english" class="form-control" />
                </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label" for="nickname">ชื่อเล่น</label>
                    <input type="text" id="nickname" class="form-control" />
                </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label" for="idcard">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" id="idcard" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline">
                    <label class="form-label" for="size_shirt">ขนาดเสื้อยืดโปโล</label>
                    <input type="text" id="size_shirt" class="form-control" style="width: 15%"/>
                </div>
            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-3">
                <div class="form-outline">
                    <label class="form-label" for="nickname">ขนาดเสื้อยืดโปโล</label>
                    <input type="text" id="nickname" class="form-control" />
                </div>
            </div>
        </div>
    </div>
</section>