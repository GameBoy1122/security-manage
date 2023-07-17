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


    .select2-container .select2-selection--single .select2-selection__rendered {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 26px;
        font-size: 13px;
        width: 100%;
        padding: 0.375rem 0.75rem !important;
        /* height: 40px; */
    }

    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        user-select: none;
        -webkit-user-select: none;
        height: 38px;
        border: var(--bs-border-width) solid var(--bs-border-color);
        border-radius: var(--bs-border-radius);
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 40px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
    }

    @media only screen and (max-width: 900px) {
        .day_select {
            line-height: 26px;
            font-size: 11px;
            width: 100%;

        }

        .select2-single {
            line-height: 26px;
            font-size: 13px;
            width: 100%;
            padding: 0.375rem 0.75rem !important;
            height: 40px;
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
                    <label class="form-label lable_show" for="name_th">คำนำหน้า-ชื่อ-นามสกุล(ภาษาไทย) <span style="color: red;">*</span></label>
                    <input type="text" id="name_th" class="form-control" required />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="name_th">ชื่อ-สกุล (ภาษาอังกฤษ) <span style="color: red;">*</span></label>
                    <input type="text" id="name_en" class="form-control" />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="nickname">ชื่อเล่น <span style="color: red;">*</span></label>
                    <input type="text" id="nickname" class="form-control" />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="id_cardname">เลขบัตรประจำตัวประชาชน <span style="color: red;">*</span></label>
                    <input type="text" id="id_cardname" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline size_shirt">
                    <label class="form-label lable_show" for="size">ขนาดเสื้อยืดโปโล <span style="color: red;">*</span></label>
                    <select class="form-select shirt_select" id="shirt_select" aria-label="Default select example">
                        <option selected style="color: #E4E6EF">กรุณาเลือกขนาดเสื้อ</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_day">วันเกิด <span style="color: red;">*</span></label>
                    <select class="form-select day_select birthday_day" id="birthday_day" aria-label="Default select example">
                        <option selected value=""><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?PHP echo $i ?>"><?PHP echo $i ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_month">เดือน <span style="color: red;">*</span></label>
                    <select class="form-select day_select birthday_month" id="birthday_month" aria-label="Default select example">
                        <option selected value=""><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP $month = array("มกราคม ", "กุมภาพันธ์ ", "มีนาคม ", "เมษายน ", "พฤษภาคม ", "มิถุนายน ", "กรกฎาคม ", "สิงหาคม ", "กันยายน ", "ตุลาคม ", "พฤศจิกายน ", "ธันวาคม "); ?>
                        <?PHP for ($i = 0; $i < sizeof($month); $i++) { ?>
                            <option value="<?PHP echo $month[$i] ?>">
                                <?PHP echo $month[$i] ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_year">ปี <span style="color: red;">*</span></label>
                    <select class="form-select day_select birthday_year" id="birthday_year" aria-label="Default select example">
                        <option selected value=""><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 0; $i <= 85; $i++) { ?>
                            <option value="<?PHP echo date("Y") - $i + 543 ?>"><?PHP echo date("Y") - $i + 543 ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>


            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="ethnicity">เชื้อชาติ <span style="color: red;">*</span></label>
                    <input type="text" id="ethnicity" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="nationality">สัญชาติ <span style="color: red;">*</span></label>
                    <input type="text" id="nationality" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="religion">ศาสนา <span style="color: red;">*</span></label>
                    <input type="text" id="religion" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="current_position">ตำแหน่งปัจจุบัน <span style="color: red;">*</span></label>
                    <input type="text" id="current_position" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ที่อยู่ปัจจุบัน</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_no">เลขที่ <span style="color: red;">*</span></label>
                    <input type="text" id="address_no" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_alley">ซอย <span style="color: red;">*</span></label>
                    <input type="text" id="address_alley" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_road">ถนน <span style="color: red;">*</span></label>
                    <input type="text" id="address_road" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_province">จังหวัด <span style="color: red;">*</span></label>
                    <select class="form-select day_select select2-single address_province" id="address_province" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_district">เขต/อำเภอ <span style="color: red;">*</span></label>
                    <select class="form-select day_selec address_district select2-single" id="address_district" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_subdistrict">ตำบล <span style="color: red;">*</span></label>
                    <select class="form-select day_select address_subdistrict select2-single" id="address_subdistrict" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_postcode">รหัสไปรษณีย์ <span style="color: red;">*</span></label>
                    <div id="address_postcode_main"><input type="text" id="address_postcode" class="form-control" /></div>
                </div>
            </div>

            <div class="form_topic">โทรศัพท์</div>
            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_address">ที่ทำงาน <span style="color: red;">*</span></label>
                    <input type="text" id="work_address" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_mobile">มือถือ <span style="color: red;">*</span></label>
                    <input type="text" id="work_mobile" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_fax">โทรสาร <span style="color: red;">*</span></label>
                    <input type="text" id="work_fax" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_house">บ้านพัก <span style="color: red;">*</span></label>
                    <input type="text" id="work_house" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline one-form-line">
                    <label class="form-label lable_show" for="work_email">E-mail <span style="color: red;">*</span></label>
                    <input type="text" id="work_email" class="form-control" />
                </div>
            </div>

            <div class="form_topic" for="work_name">หน่วยงาน(ที่ทำงาน) <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-">
                <div class="form-outline one-form-line ">
                    <input type="text" id="work_name" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_no">เลขที่ <span style="color: red;">*</span></label>
                    <input type="text" id="work_no" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_alley">ซอย <span style="color: red;">*</span></label>
                    <input type="text" id="work_alley" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_road">ถนน <span style="color: red;">*</span></label>
                    <input type="text" id="work_road" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_province">จังหวัด <span style="color: red;">*</span></label>
                    <select class="form-select day_select work_province select2-single" id="work_province" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_district">เขต/อำเภอ <span style="color: red;">*</span></label>
                    <select class="form-select day_select work_district select2-single" id="work_district" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_subdistrict">แขวง/ตำบล <span style="color: red;">*</span></label>
                    <select class="form-select day_select work_subdistrict select2-single" id="work_subdistrict" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_postcode">รหัสไปรษณีย์ <span style="color: red;">*</span></label>
                    <div id="main_work_postcode">
                        <input type="text" id="work_postcode" class="form-control" />
                    </div>

                </div>
            </div>

            <div class="form_topic" for="mariage_status">สถานภาพสมรส <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline size_shirt">
                    <select class="form-select one-form-line marital_status" id="marital_status" aria-label="Default select example">
                        <option selected style="color: #E4E6EF">กรุณาเลือก</option>
                        <option value="single">โสด</option>
                        <option value="married">สมรส</option>
                        <option value="divorce">หย่าร้าง</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">
                <label class="form-label lable_show" for="marital_name">ชื่อคู่สมรส</label>
                <input type="text" id="marital_name" class="form-control" />
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">
                <label class="form-label lable_show" for="marital_job">อาชีพ/ตำแหน่ง </label>
                <input type="text" id="marital_job" class="form-control" />
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_day">วันเกิด</label>
                    <select class="form-select day_select marital_day" id="marital_day" aria-label="Default select example">
                        <option selected value=""><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?PHP echo $i ?>"><?PHP echo $i ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_month">เดือน</label>
                    <select class="form-select day_select marital_month" id="marital_month" aria-label="Default select example">
                        <option selected value=""><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP $month = array("มกราคม ", "กุมภาพันธ์ ", "มีนาคม ", "เมษายน ", "พฤษภาคม ", "มิถุนายน ", "กรกฎาคม ", "สิงหาคม ", "กันยายน ", "ตุลาคม ", "พฤศจิกายน ", "ธันวาคม "); ?>
                        <?PHP for ($i = 0; $i < sizeof($month); $i++) { ?>
                            <option value="<?PHP echo $month[$i] ?>">
                                <?PHP echo $month[$i] ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="mariage_birth_year">ปี </label>
                    <select class="form-select day_select marital_year" id="marital_year" aria-label="Default select example">
                        <option selected value=""><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 0; $i <= 70; $i++) { ?>
                            <option value="<?PHP echo date("Y") - $i + 543 ?>"><?PHP echo date("Y") - $i + 543 ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_ethnicity">เชื้อชาติ </label>
                    <input type="text" id="marital_ethnicity" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_nationality">สัญชาติ</label>
                    <input type="text" id="marital_nationality" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_religion">ศาสนา</label>
                    <input type="text" id="marital_religion" class="form-control" />
                </div>
            </div>
        </div>


        <div class="header_topic">๒. ข้อมูลการศึกษา</div>
        <div class="row mb-5">
            <div class="form_topic">ระดับมัธยมศึกษา</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="secondary_education_branch">สาขาวิชาที่จบการศึกษา <span style="color: red;">*</span></label>
                    <input type="text" id="secondary_education_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="secondary_education_academy">สถาบันการศึกษา <span style="color: red;">*</span></label>
                    <input type="text" id="secondary_education_academy" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="secondary_education_year">ปี พ.ศ. <span style="color: red;">*</span></label>
                    <input type="text" id="secondary_education_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาตรี</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelors_degree_branch">สาขาวิชาที่จบการศึกษา </label>
                    <input type="text" id="bachelors_degree_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelors_degree_academy">สถาบันการศึกษา </label>
                    <input type="text" id="bachelors_degree_academy" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelors_degree_year">ปี พ.ศ. </label>
                    <input type="text" id="bachelors_degree_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาโท</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="masters_degree_branch">สาขาวิชาที่จบการศึกษา </label>
                    <input type="text" id="masters_degree_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="masters_degree_academy">สถาบันการศึกษา </label>
                    <input type="text" id="masters_degree_academy" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="masters_degree_year">ปี พ.ศ.</label>
                    <input type="text" id="masters_degree_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาเอก</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="doctorate_branch">สาขาวิชาที่จบการศึกษา </label>
                    <input type="text" id="doctorate_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="doctorate_academy">สถาบันการศึกษา </label>
                    <input type="text" id="doctorate_academy" class="form-control" />
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
            และปีที่เข้าเรียน) <span style="color: red;">*</span></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
            <div class="form-outline w-100">
                <textarea type="text" id="training_course_information" class="form-control" style="height: 200px;"></textarea>
            </div>
        </div>


        <div class="header_topic">๔. ข้อมูลการทำงาน</div>
        <div class="row mb-2">
            <div class="form_topic">๑. ประวัติการทำงานที่สำคัญ <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="workinfo_work _history" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>

            <div class="form_topic">๒. ตำแหน่งอื่นๆ ในปัจจุบัน</div>
            <div class="lable_show mt-2 mb-2">๓.๒.๑</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_position">ตำแหน่ง <span style="color: red;">*</span></label>
                    <input type="text" id="workinfo_position" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_companyname">ชื่อหน่วยงาน/องค์กร <span style="color: red;">*</span></label>
                    <input type="text" id="workinfo_companyname" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_jobtype">ลักษณะ/ประเภท <span style="color: red;">*</span></label>
                    <input type="text" id="workinfo_jobtype" class="form-control" />
                </div>
            </div>

            <div class="lable_show mt-2 mb-2">๓.๒.๒</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_position_2">ตำแหน่ง </label>
                    <input type="text" id="workinfo_position_2" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_companyname_2">ชื่อหน่วยงาน/องค์กร </label>
                    <input type="text" id="workinfo_companyname_2" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_jobtype_2">ลักษณะ/ประเภท </label>
                    <input type="text" id="workinfo_jobtype_2" class="form-control" />
                </div>
            </div>

            <div class="form_topic">๓. ลักษณะงาน/ประเภทธุรกิจของบริษัท <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="workinfo_workdetails" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>

            <div class="form_topic">๔. ความรับผิดชอบของท่านในปัจจุบัน <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="workinfo_responsibility" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="header_topic">๕. ผลงานหรือความรับผิดชอบของงานที่ผ่านมาที่ผู้สมัครมีความภาคภูมิใจ <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="achievements_job" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="header_topic">๖. ความสามารถเฉพาะด้านของท่านหรือสิ่งที่ท่านสามารถจะทำประโยชน์ให้กับหลักสูตรได้ <span style="color: red;">*</span>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="abilities" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>



        <div class="row mb-2">
            <div class="header_topic">๗. เหตุผลที่ผู้สมัครมีความประสงค์ที่จะเข้ามาศึกษาในหลักสูตรฯ <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="desire" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>



        <div class="row mb-2">
            <div class="header_topic">๘. ผู้สมัครจะให้คำยืนยันอย่างไรต่อการเข้าเรียนในชั้นเรียนและร่วมกิจกรรม
                รวมทั้งปฏิบัติตามกฎระเบียบของหลักสูตรทุกประการ <span style="color: red;">*</span></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="course_regulations" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>




        <div class="row mb-2">
            <div class="header_topic">๙. เอกสารประกอบ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="file_idcard" class="mb-3 lable_show">สำเนาบัตรประชาชน หรือ สำเนาบัตรข้าราชการ <span style="color: red;">*</span></label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="file_idcard" multiple>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="file_house_registration" class="mb-3 lable_show">สำเนาทะเบียนบ้าน <span style="color: red;">*</span></label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="file_house_registration" multiple>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="file_photo" class="mb-3 lable_show">รูปถ่ายหน้าตรง ไม่สวมแว่น ไม่สวมหมวก ขนาด ๑ ๑/๒x
                            ๒
                            นิ้ว <span style="color: red;">*</span></label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="file_photo" multiple>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="file_certificate" class="mb-3 lable_show">สำเนาปริญญาบัตรวุฒิการศึกษาสูงสุด <span style="color: red;">*</span></label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="file_certificate" multiple>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <button id="submit" class="btn btn_click btn-block mb-4 pt-2 pb-2 ps-5 pe-5">ลงทะเบียน</button>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="alert_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-style">
            <div class="modal-header modal-header-style" style="background-color: black;">
            </div>
            <div class="modal-body" style="text-align: -webkit-center;">
                <div class="btn-close-modal">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <h5 class="alert_modal_response" style="text-align: center;"></h5>
                <button class="btn" type="button" data-bs-dismiss="modal" aria-label="Close" style="border-radius: 49px !important; width: 30%;height: 40.59px;background: #1A1560;color: white;">ตกลง</button>
            </div>

        </div>
    </div>
</div>


<script>
    var id_token = $("#id_token").val();
    var base_link = "<?php echo base_url('') ?>";
    $(function() {
        $(".select2-single").select2();
        $.ajax({
            url: base_link + "Api/Address/get_provinces",
            dataType: "json",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: {
                show_province: 'show_province'
            },
            success: function(data) {
                // console.log(data.data)
                $("#address_postcode").remove();
                $("#address_postcode_main").append(' <input type="text" id="address_postcode" class="form-control" value="" disabled />')
                $.each(data.data, function(index, value) {
                    $("#address_province").append("<option value='" + index + "'> " + value + "</option>");
                });
            }
        });

        $("#address_province").change(function() {
            var province_id = $(this).val();
            // console.log('province_id', province_id);
            $.ajax({
                url: base_link + "Api/Address/get_districts",
                method: "POST",
                dataType: "json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                data: {
                    address_province_id: province_id,
                },
                success: function(data) {
                    // console.log('district', data.data);
                    $("#address_subdistrict").text("");
                    $("#address_district").text("");
                    $("#address_postcode").remove();
                    $("#address_postcode_main").append(' <input type="text" id="address_postcode" class="form-control" value="" disabled />')
                    $.each(data.data, function(index, value) {

                        $("#address_district").append("<option value='" + index + "'> " + value + "</option>");
                    });
                }
            });

        });


        $("#address_district").change(function() {
            var district_id = $(this).val();
            // console.log('district_id', district_id);

            $.ajax({
                url: base_link + "Api/Address/get_sub_districts",
                method: "POST",
                dataType: "json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                data: {
                    address_district_id: district_id
                },
                success: function(data) {
                    // console.log('subdistrict', data.data);
                    $("#address_subdistrict").text("");
                    $("#address_postcode").remove();
                    $("#address_postcode_main").append('<input type="text" id="address_postcode" class="form-control" value="" disabled />')
                    $.each(data.data, function(index, value) {

                        $("#address_subdistrict").append("<option value='" + index + "'> " + value + "</option>");

                    });
                }
            });

        });
        $("#address_subdistrict").change(function() {
            var subdistrict = $('#address_subdistrict').val();
            // console.log('subdistrict', subdistrict);

            $.ajax({
                url: base_link + "Api/Address/get_zipcode",
                method: "POST",
                dataType: "json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                data: {
                    address_subdistrict_id: subdistrict
                },
                success: function(data) {
                    // console.log('zipcode', data.data[0]);
                    $("#address_postcode").remove();
                    $("#address_postcode_main").append(' <input type="text" id="address_postcode" class="form-control" value="' + data.data[0] + '" disabled />')
                }
            });

        });

        $.ajax({
            url: base_link + "Api/Address/get_provinces",
            dataType: "json",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: {
                show_province: 'show_province'
            },
            success: function(data) {
                // console.log(data.data)
                $("#work_postcode").remove();
                $("#main_work_postcode").append(' <input type="text" id="work_postcode" class="form-control" value="" disabled />')
                $.each(data.data, function(index, value) {
                    $("#work_province").append("<option value='" + index + "'> " + value + "</option>");
                });
            }
        });

        $("#work_province").change(function() {
            var work_province_id = $(this).val();
            // console.log('province_id', work_province_id);
            $.ajax({
                url: base_link + "Api/Address/get_districts",
                method: "POST",
                dataType: "json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                data: {
                    address_province_id: work_province_id,
                },
                success: function(data) {
                    // console.log('district', data.data);
                    $("#work_subdistrict").text("");
                    $("#work_district").text("");
                    $("#work_postcode").remove();
                    $("#main_work_postcode").append(' <input type="text" id="work_postcode" class="form-control" value="" disabled />')
                    $.each(data.data, function(index, value) {
                        $("#work_district").append("<option value='" + index + "'> " + value + "</option>");
                    });
                }
            });

        });


        $("#work_district").change(function() {
            var work_district_id = $(this).val();
            // console.log('district_id', work_district_id);

            $.ajax({
                url: base_link + "Api/Address/get_sub_districts",
                method: "POST",
                dataType: "json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                data: {
                    address_district_id: work_district_id
                },
                success: function(data) {
                    // console.log('subdistrict', data.data);
                    $("#work_subdistrict").text("");
                    $("#work_postcode").remove();
                    $("#main_work_postcode").append(' <input type="text" id="work_postcode" class="form-control" value="" disabled />')
                    $.each(data.data, function(index, value) {

                        $("#work_subdistrict").append("<option value='" + index + "'> " + value + "</option>");

                    });
                }
            });

        });
        $("#work_subdistrict").change(function() {
            var work_subdistrict = $('#work_subdistrict').val();
            // console.log('subdistrict', subdistrict);

            $.ajax({
                url: base_link + "Api/Address/get_zipcode",
                method: "POST",
                dataType: "json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                data: {
                    address_subdistrict_id: work_subdistrict
                },
                success: function(data) {
                    // console.log('zipcode', data.data[0]);
                    $("#work_postcode").remove();
                    $("#main_work_postcode").append(' <input type="text" id="work_postcode" class="form-control" value="' + data.data[0] + '" disabled />')
                }
            });

        });
        $("#marital_status").change(function() {
            var marital_status = $(this).val();
            if (marital_status == 'single') {
                $("#marital_name").prop("disabled", true);
                $("#marital_job").prop("disabled", true);
                $("#marital_day").prop("disabled", true);
                $("#marital_month").prop("disabled", true);
                $("#marital_year").prop("disabled", true);
                $("#marital_ethnicity").prop("disabled", true);
                $("#marital_nationality").prop("disabled", true);
                $("#marital_religion").prop("disabled", true);
            } else if (marital_status == 'married') {
                $("#marital_name").prop("disabled", false);
                $("#marital_job").prop("disabled", false);
                $("#marital_day").prop("disabled", false);
                $("#marital_month").prop("disabled", false);
                $("#marital_year").prop("disabled", false);
                $("#marital_ethnicity").prop("disabled", false);
                $("#marital_nationality").prop("disabled", false);
                $("#marital_religion").prop("disabled", false);
            } else if (marital_status == 'divorce') {
                $("#marital_name").prop("disabled", true);
                $("#marital_job").prop("disabled", true);
                $("#marital_day").prop("disabled", true);
                $("#marital_month").prop("disabled", true);
                $("#marital_year").prop("disabled", true);
                $("#marital_ethnicity").prop("disabled", true);
                $("#marital_nationality").prop("disabled", true);
                $("#marital_religion").prop("disabled", true);
            }
        });

    });
</script>
<script>
    $("#submit").click(function(e) {
        e.preventDefault();
        event.preventDefault();
        // console.log('test');
        var formData = new FormData();
        formData.append("enroll_id", '1');
        formData.append("status", 'ACTIVE');
        formData.append("name_th", $("#name_th").val());
        formData.append("name_en", $("#name_en").val());
        formData.append("nickname", $("#nickname").val());
        formData.append("id_cardname", $("#id_cardname").val());
        formData.append("shirt_select", $("#shirt_select").val());
        formData.append("birthday_day", $("#birthday_day").val());
        formData.append("birthday_month", $("#birthday_month").val());
        formData.append("birthday_year", $("#birthday_year").val());
        formData.append("ethnicity", $("#ethnicity").val());
        formData.append("nationality", $("#nationality").val());
        formData.append("religion", $("#religion").val());
        formData.append("current_position", $("#current_position").val());
        formData.append("address_no", $("#address_no").val());
        formData.append("address_alley", $("#address_alley").val());
        formData.append("address_road", $("#address_road").val());
        formData.append("address_province", $("#address_province").val());
        formData.append("address_district", $("#address_district").val());
        formData.append("address_subdistrict", $("#address_subdistrict").val());
        formData.append("address_postcode", $("#address_postcode").val());
        formData.append("work_address", $("#work_address").val());
        formData.append("work_mobile", $("#work_mobile").val());
        formData.append("work_fax", $("#work_fax").val());
        formData.append("work_house", $("#work_house").val());
        formData.append("work_email", $("#work_email").val());
        formData.append("work_name", $("#work_name").val());
        formData.append("work_no", $("#work_no").val());
        formData.append("work_alley", $("#work_alley").val());
        formData.append("work_road", $("#work_road").val());
        formData.append("work_province", $("#work_province").val());
        formData.append("work_district", $("#work_district").val());
        formData.append("work_subdistrict", $("#work_subdistrict").val());
        formData.append("work_postcode", $("#work_postcode").val());
        formData.append("marital_status", $("#marital_status").val());
        formData.append("marital_name", $("#marital_name").val());
        formData.append("marital_job", $("#marital_job").val());
        formData.append("marital_day", $("#marital_day").val());
        formData.append("marital_month", $("#marital_month").val());
        formData.append("marital_year", $("#marital_year").val());
        formData.append("marital_ethnicity", $("#marital_ethnicity").val());
        formData.append("marital_nationality", $("#marital_nationality").val());
        formData.append("marital_religion", $("#marital_religion").val());
        formData.append("secondary_education_branch", $("#secondary_education_branch").val());
        formData.append("secondary_education_academy", $("#secondary_education_academy").val());
        formData.append("secondary_education_year", $("#secondary_education_year").val());
        formData.append("bachelors_degree_branch", $("#bachelors_degree_branch").val());
        formData.append("bachelors_degree_academy", $("#bachelors_degree_academy").val());
        formData.append("bachelors_degree_year", $("#bachelors_degree_year").val());
        formData.append("masters_degree_branch", $("#masters_degree_branch").val());
        formData.append("masters_degree_academy", $("#masters_degree_academy").val());
        formData.append("masters_degree_year", $("#masters_degree_year").val());
        formData.append("doctorate_branch", $("#doctorate_branch").val());
        formData.append("doctorate_academy", $("#doctorate_academy").val());
        formData.append("doctorate_year", $("#doctorate_year").val());
        formData.append("training_course_information", $("#training_course_information").val());
        formData.append("workinfo_work_history", $("#workinfo_work_history").val());
        formData.append("workinfo_position", $("#workinfo_position").val());
        formData.append("workinfo_companyname", $("#workinfo_companyname").val());
        formData.append("workinfo_jobtype", $("#workinfo_jobtype").val());
        formData.append("workinfo_position_2", $("#workinfo_position_2").val());
        formData.append("workinfo_companyname_2", $("#workinfo_companyname_2").val());
        formData.append("workinfo_jobtype_2", $("#workinfo_jobtype_2").val());
        formData.append("workinfo_workdetails", $("#workinfo_workdetails").val());
        formData.append("workinfo_responsibility", $("#workinfo_responsibility").val());
        formData.append("achievements_job", $("#achievements_job").val());
        formData.append("abilities", $("#abilities").val());
        formData.append("desire", $("#desire").val());
        formData.append("course_regulations", $("#course_regulations").val());
        var file_idcard = $("#file_idcard")[0].files;
        var file_house_registration = $("#file_house_registration")[0].files;
        var file_photo = $("#file_photo")[0].files;
        var file_certificate = $("#file_certificate")[0].files;
        if (file_idcard.length > 0) {
            for (var i = 0; i < file_idcard.length; i++) {
                formData.append("file_idcard[]", file_idcard[i]);
            }
        }

        if (file_house_registration.length > 0) {
            for (var i = 0; i < file_house_registration.length; i++) {
                formData.append("file_house_registration[]", file_house_registration[i]);
            }
        }

        if (file_photo.length > 0) {
            for (var i = 0; i < file_photo.length; i++) {
                formData.append("file_photo[]", file_photo[i]);
            }
        }

        if (file_certificate.length > 0) {
            for (var i = 0; i < file_certificate.length; i++) {
                formData.append("file_certificate[]", file_certificate[i]);
            }
        }

        var fields = [
            $("#name_th"),
            $("#name_en"),
            $("#nickname"),
            $("#id_cardname"),
            $("#shirt_select"),
            $("#birthday_day"),
            $("#birthday_month"),
            $("#birthday_year"),
            $("#ethnicity"),
            $("#nationality"),
            $("#religion"),
            $("#current_position"),
            $("#address_no"),
            $("#address_alley"),
            $("#address_road"),
            $("#address_province"),
            $("#address_district"),
            $("#address_subdistrict"),
            $("#address_postcode"),
            $("#work_address"),
            $("#work_mobile"),
            $("#work_fax"),
            $("#work_house"),
            $("#work_email"),
            $("#work_name"),
            $("#work_no"),
            $("#work_alley"),
            $("#work_road"),
            $("#work_province"),
            $("#work_district"),
            $("#work_subdistrict"),
            $("#work_postcode"),
            $("#marital_status"),

            // $("#marital_name"),
            // $("#marital_job"),
            // $("#marital_day"),
            // $("#marital_month"),
            // $("#marital_year"),
            // $("#marital_ethnicity"),
            // $("#marital_nationality"),
            // $("#marital_religion"),

            $("#secondary_education_branch"),
            $("#secondary_education_academy"),
            $("#secondary_education_year"),

            // $("#bachelors_degree_branch"),
            // $("#bachelors_degree_academy"),
            // $("#bachelors_degree_year"),
            // $("#masters_degree_branch"),
            // $("#masters_degree_academy"),
            // $("#masters_degree_year"),
             
            $("#doctorate_branch"),
            $("#doctorate_academy"),
            $("#doctorate_year"),
            $("#training_course_information"),
            $("#workinfo_work_history"),
            $("#workinfo_position"),
            $("#workinfo_companyname"),
            $("#workinfo_jobtype"),

            // $("#workinfo_position_2"),
            // $("#workinfo_companyname_2"),
            // $("#workinfo_jobtype_2"),

            $("#workinfo_workdetails"),
            $("#workinfo_responsibility"),
            $("#achievements_job"),
            $("#abilities"),
            $("#desire"),
            $("#course_regulations")
        ];

        var isValid = true;
        for (var i = 0; i < fields.length; i++) {
            if (fields[i].val() === '') {
                isValid = false;
                fields[i].css("border", "#dc3545 1px solid");
                fields[i][0].scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
                break;
            }
        }

        if (!isValid) {
            alert('กรุณากรอกข้อมูลให้ครบทุกช่อง')
            // $(".alert_modal_response").text("กรุณากรอกข้อมูลให้ครบทุกช่อง");
            // $('#alert_modal').modal('show');
            return;
        }

        var send_data = {
            "url": "<?php echo base_url('Enroll/register') ?>",
            "method": "POST",
            "data": formData,
            "contentType": false,
            "processData": false
        }

        $.ajax(send_data).done(function(response) {
            if (response.code == "0x0000-00000") {
                $(".alert_modal_response").text('');
                window.location.href = "<?php echo base_url('enroll_complete') ?>";
            } else if (response.code == "1x0000-00000") {
                $(".alert_modal_response").text('เลขบัญประชนของท่านได้ทำการสมัครแล้วกรุณาตรวจสอบข้อมูลอีกครั้ง');
            } else if (response.code == "2x0000-00000") {
                $(".alert_modal_response").text('กรุณาตรวจสอบข้อมูลอีกครั้ง');
            }
            $('#alert_modal').modal('show');
        });
        return false;
    });
</script>