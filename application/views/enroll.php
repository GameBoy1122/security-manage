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

    .header_topic {
        color: #116DB6;
        font-size: 26px;
        margin-top: 7%;
    }

    @media only screen and (max-width: 900px) {
        .header_topic {
            color: #116DB6;
            font-size: 16px;
            margin-top: 7%;
        }
    }



    .lable_show {
        font-size: 18px;
    }

    @media only screen and (max-width: 900px) {
        .lable_show {
            font-size: 9px;

        }
    }

    .shirt_select {
        line-height: 26px;
        font-size: 13px;
        width: 15%;
    }

    @media only screen and (max-width: 900px) {
        .shirt_select {
            line-height: 26px;
            font-size: 11px;
            width: 50%;

        }
    }

    .day_select {
        line-height: 26px;
        font-size: 13px;
        width: 100%;
    }


    @media only screen and (max-width: 900px) {
        .day_select {
            line-height: 26px;
            font-size: 11px;
            width: 100%;

        }
    }

    .form_topic {
        font-size: 22px;
        margin-top: 30px;
    }

    @media only screen and (max-width: 900px) {

        .form_topic {
            font-size: 14px;
            margin-top: 30px;
            margin-bottom: 0px !important;

        }
    }



    .one-form-line {
        line-height: 26px;
        font-size: 13px;
        width: 49%;
    }

    @media only screen and (max-width: 900px) {
        .one-form-line {
            line-height: 26px;
            font-size: 11px;
            width: 100%;

        }
    }

    .file_select {
        width: 50% !important;
        font-size: 13px !important;

    }


    @media only screen and (max-width: 600px) {
        .file_select {
            width: 100% !important;
            font-size: 8px !important;


        }
    }

    .btn_click {
        background-color: #116DB6;
        width: 30%;
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
</style>

<section class="head" style=" position: relative;">
    <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
    <div class="topic_header">สมัครเรียน</div>
</section>

<section class="enroll">
    <div class="container enroll_form">
        <div class="header_topic">๑. ข้อมูลส่วนบุคคล</div>
        <div class="row mt-4 mb-5">
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="name_thai">ยศ - ชื่อ นามสกุล</label>
                    <input type="text" id="name_thai" class="form-control" />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="name_english">ชื่อ-สกุล (ภาษาอังกฤษ)</label>
                    <input type="text" id="name_english" class="form-control" />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="nickname">ชื่อเล่น</label>
                    <input type="text" id="nickname" class="form-control" />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="idcard">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" id="idcard" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline size_shirt">
                    <label class="form-label lable_show" for="size_shirt">ขนาดเสื้อยืดโปโล</label>
                    <select class="form-select shirt_select" aria-label="Default select example">
                        <option selected style="color: #E4E6EF">กรุณาเลือก</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_date">วันเกิด</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_month">เดือน</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_year">ปี</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>


            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="ethnicity">เชื้อชาติ</label>
                    <input type="text" id="ethnicity" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="nationality">สัญชาติ</label>
                    <input type="text" id="nationality" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="religion">ศาสนา</label>
                    <input type="text" id="religion" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_position">ตำแหน่งปัจจุบัน</label>
                    <input type="text" id="current_position" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ที่อยู่ปัจจุบัน</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_number">เลขที่</label>
                    <input type="text" id="address_number" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_alley">ซอย</label>
                    <input type="text" id="address_alley" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_road">ถนน</label>
                    <input type="text" id="address_road" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_province">จังหวัด</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_district">เขต/อำเภอ</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_subdistrict">แขวง/ตำบล</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_postalcode">รหัสไปรษณีย์</label>
                    <input type="text" id="address_postalcode" class="form-control" />
                </div>
            </div>

            <div class="form_topic">โทรศัพท์</div>
            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work">ที่ทำงาน</label>
                    <input type="text" id="work" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="phone_number">มือถือ</label>
                    <input type="text" id="work" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="fax_number">โทรสาร</label>
                    <input type="text" id="work" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="home">บ้านพัก</label>
                    <input type="text" id="work" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline one-form-line">
                    <label class="form-label lable_show" for="email">E-mail</label>
                    <input type="text" id="email" class="form-control" />
                </div>
            </div>

            <div class="form_topic" for="work_name">หน่วยงาน(ที่ทำงาน)</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-">
                <div class="form-outline one-form-line ">
                    <input type="text" id="work_name" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_number">เลขที่</label>
                    <input type="text" id="work_number" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_alley">ซอย</label>
                    <input type="text" id="work_alley" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_road">ถนน</label>
                    <input type="text" id="work_road" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_province">จังหวัด</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_district">เขต/อำเภอ</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_subdistrict">แขวง/ตำบล</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_postalcode">รหัสไปรษณีย์</label>
                    <input type="text" id="work_postalcode" class="form-control" />
                </div>
            </div>

            <div class="form_topic" for="mariage_status">สถานภาพสมรส</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline size_shirt">
                    <select class="form-select one-form-line" aria-label="Default select example">
                        <option selected style="color: #E4E6EF">กรุณาเลือก</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">
                <label class="form-label lable_show" for="mariage_name">ชื่อคู่สมรส</label>
                <input type="text" id="mariage_name" class="form-control" />
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">
                <label class="form-label lable_show" for="mariage_position">อาชีพ/ตำแหน่ง</label>
                <input type="text" id="mariage_position" class="form-control" />
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_birth_date">วันเกิด</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_birth_month">เดือน</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_birth_year">ปี</label>
                    <select class="form-select day_select" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_ethnicity">เชื้อชาติ</label>
                    <input type="text" id="mariage_ethnicity" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_nationality">สัญชาติ</label>
                    <input type="text" id="mariage_nationality" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_religion">ศาสนา</label>
                    <input type="text" id="mariage_religion" class="form-control" />
                </div>
            </div>
        </div>


        <div class="header_topic">๒. ข้อมูลการศึกษา</div>
        <div class="row mb-5">
            <div class="form_topic">ระดับมัธยมศึกษา</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="highschool_major">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="highschool_major" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="highschool_name">สถาบันการศึกษา</label>
                    <input type="text" id="highschool_name" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="highschool_year">ปี พ.ศ.</label>
                    <input type="text" id="highschool_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาตรี</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelor_major">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="bachelor_major" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelor_name">สถาบันการศึกษา</label>
                    <input type="text" id="bachelor_name" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelor_year">ปี พ.ศ.</label>
                    <input type="text" id="bachelor_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาโท</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="master_major">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="master_major" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="master_name">สถาบันการศึกษา</label>
                    <input type="text" id="master_name" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="master_year">ปี พ.ศ.</label>
                    <input type="text" id="master_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาเอก</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="doctorate_major">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="doctorate_major" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="doctorate_name">สถาบันการศึกษา</label>
                    <input type="text" id="doctorate_name" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="doctorate_year">ปี พ.ศ.</label>
                    <input type="text" id="doctorate_year" class="form-control" />
                </div>
            </div>
        </div>



        <div class="header_topic">๓.ข้อมูลหลักสูตรที่ผ่านการอบรม (โปรดระบุชื่อหลักสูตรเต็ม ชื่อย่อ รุ่น
            และปีที่เข้าเรียน)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
            <div class="form-outline w-100">
                <textarea type="text" id="course_pass" class="form-control" style="height: 200px;"></textarea>
            </div>
        </div>


        <div class="header_topic">๔. ข้อมูลการทำงาน</div>
        <div class="row mb-2">
            <div class="form_topic">๑. ประวัติการทำงานที่สำคัญ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="work_information" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>

            <div class="form_topic">๒. ตำแหน่งอื่นๆ ในปัจจุบัน</div>
            <div class="lable_show mt-2 mb-2">๓.๒.๑</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_position1">ตำแหน่ง</label>
                    <input type="text" id="current_position1" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_workname1">ชื่อหน่วยงาน/องค์กร</label>
                    <input type="text" id="current_workname1" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_worktype1">ลักษณะ/ประเภท</label>
                    <input type="text" id="current_worktype1" class="form-control" />
                </div>
            </div>

            <div class="lable_show mt-2 mb-2">๓.๒.๒</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_position2">ตำแหน่ง</label>
                    <input type="text" id="current_position2" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_workname2">ชื่อหน่วยงาน/องค์กร</label>
                    <input type="text" id="current_workname2" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_worktype2">ลักษณะ/ประเภท</label>
                    <input type="text" id="current_worktype2" class="form-control" />
                </div>
            </div>

            <div class="form_topic">๓. ลักษณะงาน/ประเภทธุรกิจของบริษัท</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="work_type" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>

            <div class="form_topic">๔. ความรับผิดชอบของท่านในปัจจุบัน</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="work_doing" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="header_topic">๕. ผลงานหรือความรับผิดชอบของงานที่ผ่านมาที่ผู้สมัครมีความภาคภูมิใจ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="performance" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="header_topic">๖. ความสามารถเฉพาะด้านของท่านหรือสิ่งที่ท่านสามารถจะทำประโยชน์ให้กับหลักสูตรได้
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="unique_ability" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>



        <div class="row mb-2">
            <div class="header_topic">๗.
                ผู้สมัครมีความประสงค์อย่างไรที่จะเข้ามาศึกษาในหลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="want" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>



        <div class="row mb-2">
            <div class="header_topic">๘. ผู้สมัครจะให้คำยืนยันอย่างไรต่อการเข้าเรียนในชั้นเรียนและร่วมกิจกรรม
                รวมทั้งปฏิบัติตามกฎระเบียบของหลักสูตรทุกประการ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="confirm" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>




        <div class="row mb-2">
            <div class="header_topic">๙. เอกสารประกอบ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="idcard_file" class="mb-3 lable_show">สำเนาบัตรประชาชน หรือ สำเนาบัตรข้าราชการ</label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="idcard_file" multiple>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="house_file" class="mb-3 lable_show">สำเนาทะเบียนบ้าน</label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="house_file" multiple>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="picture_file" class="mb-3 lable_show">รูปถ่ายหน้าตรง ไม่สวมแว่น ไม่สวมหมวก ขนาด ๑ ๑/๒x
                            ๒
                            นิ้ว</label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="picture_file" multiple>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="qualification_file" class="mb-3 lable_show">สำเนาปริญญาบัตรวุฒิการศึกษาสูงสุด</label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="qualification_file" multiple>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <button type="submit" id="submit" class="btn btn_click btn-block mb-4 pt-2 pb-2 ps-5 pe-5">ลงทะเบียน</button>
    </div>
</section>