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
                    <label class="form-label lable_show" for="name_th">ยศ - ชื่อ นามสกุล</label>
                    <input type="text" id="name_th" class="form-control" />
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="form-outline">
                    <label class="form-label lable_show" for="name_th">ชื่อ-สกุล (ภาษาอังกฤษ)</label>
                    <input type="text" id="name_th" class="form-control" />
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
                    <label class="form-label lable_show" for="id_cardname">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" id="id_cardname" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline size_shirt">
                    <label class="form-label lable_show" for="size">ขนาดเสื้อยืดโปโล</label>
                    <select class="form-select shirt_select" aria-label="Default select example">
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
                    <label class="form-label lable_show" for="birthday_day">วันเกิด</label>
                    <select class="form-select day_select birthday_day" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?PHP echo $i ?>"><?PHP echo $i ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="birthday_month">เดือน</label>
                    <select class="form-select day_select birthday_month" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
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
                    <label class="form-label lable_show" for="birthday_year">ปี</label>
                    <select class="form-select day_select birthday_year" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 0; $i <= 70; $i++) { ?>
                            <option value="<?PHP echo date("Y") - $i + 543 ?>"><?PHP echo date("Y") - $i + 543 ?></option>
                        <?PHP } ?>
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
                    <label class="form-label lable_show" for="address_no">เลขที่</label>
                    <input type="text" id="address_no" class="form-control" />
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
                    <select class="form-select day_select select2-single address_province" id="address_province" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_district">เขต/อำเภอ</label>
                    <select class="form-select day_selec address_district select2-single" id="address_district" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_subdistrict">ตำบล</label>
                    <select class="form-select day_select address_subdistrict select2-single" id="address_subdistrict" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="address_postcode">รหัสไปรษณีย์</label>
                    <div id="address_postcode_main"><input type="text" id="address_postcode" class="form-control" /></div>
                </div>
            </div>

            <div class="form_topic">โทรศัพท์</div>
            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_address">ที่ทำงาน</label>
                    <input type="text" id="work_address" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_mobile">มือถือ</label>
                    <input type="text" id="work_mobile" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_fax">โทรสาร</label>
                    <input type="text" id="work_fax" class="form-control" />
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg- col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_house">บ้านพัก</label>
                    <input type="text" id="work_house" class="form-control" />
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <div class="form-outline one-form-line">
                    <label class="form-label lable_show" for="work_email">E-mail</label>
                    <input type="text" id="work_email" class="form-control" />
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
                    <label class="form-label lable_show" for="work_no">เลขที่</label>
                    <input type="text" id="work_no" class="form-control" />
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
                    <select class="form-select day_select work_province" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_district">เขต/อำเภอ</label>
                    <select class="form-select day_select work_district" aria-label="Default select example">
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
                    <select class="form-select day_select work_subdistrict" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="work_postcode">รหัสไปรษณีย์</label>
                    <input type="text" id="work_postcode" class="form-control" />
                </div>
            </div>

            <div class="form_topic" for="mariage_status">สถานภาพสมรส</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline size_shirt">
                    <select class="form-select one-form-line marital_status" aria-label="Default select example">
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
                <label class="form-label lable_show" for="marital_job">อาชีพ/ตำแหน่ง</label>
                <input type="text" id="marital_job" class="form-control" />
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_day">วันเกิด</label>
                    <select class="form-select day_select marital_day" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?PHP echo $i ?>"><?PHP echo $i ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_month">เดือน</label>
                    <select class="form-select day_select marital_month" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
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
                    <label class="form-label lable_show" for="mariage_birth_year">ปี</label>
                    <select class="form-select day_select marital_year" aria-label="Default select example">
                        <option selected><span style="color: #E4E6EF">กรุณาเลือก</span></option>
                        <?PHP for ($i = 0; $i <= 70; $i++) { ?>
                            <option value="<?PHP echo date("Y") - $i + 543 ?>"><?PHP echo date("Y") - $i + 543 ?></option>
                        <?PHP } ?>
                    </select>
                </div>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="marital_ethnicity">เชื้อชาติ</label>
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
                    <label class="form-label lable_show" for="marital_nationality">ศาสนา</label>
                    <input type="text" id="marital_nationality" class="form-control" />
                </div>
            </div>
        </div>


        <div class="header_topic">๒. ข้อมูลการศึกษา</div>
        <div class="row mb-5">
            <div class="form_topic">ระดับมัธยมศึกษา</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="secondary_education_branch">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="secondary_education_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="secondary_education_academy">สถาบันการศึกษา</label>
                    <input type="text" id="secondary_education_academy" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="secondary_education_year">ปี พ.ศ.</label>
                    <input type="text" id="secondary_education_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาตรี</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelors_degree_branch">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="bachelors_degree_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelors_degree_academy">สถาบันการศึกษา</label>
                    <input type="text" id="bachelors_degree_academy" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="bachelors_degree_year">ปี พ.ศ.</label>
                    <input type="text" id="bachelors_degree_year" class="form-control" />
                </div>
            </div>

            <div class="form_topic">ระดับอุดมศึกษา ปริญญาโท</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="masters_degree_branch">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="masters_degree_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="masters_degree_branch">สถาบันการศึกษา</label>
                    <input type="text" id="masters_degree_branch" class="form-control" />
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
                    <label class="form-label lable_show" for="doctorate_branch">สาขาวิชาที่จบการศึกษา</label>
                    <input type="text" id="doctorate_branch" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-2">
                <div class="form-outline">
                    <label class="form-label lable_show" for="doctorate_academy">สถาบันการศึกษา</label>
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
            และปีที่เข้าเรียน)</div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
            <div class="form-outline w-100">
                <textarea type="text" id="training_course_information" class="form-control" style="height: 200px;"></textarea>
            </div>
        </div>


        <div class="header_topic">๔. ข้อมูลการทำงาน</div>
        <div class="row mb-2">
            <div class="form_topic">๑. ประวัติการทำงานที่สำคัญ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="workinfo_work _history" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>

            <div class="form_topic">๒. ตำแหน่งอื่นๆ ในปัจจุบัน</div>
            <div class="lable_show mt-2 mb-2">๓.๒.๑</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_work _history">ตำแหน่ง</label>
                    <input type="text" id="workinfo_work _history" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_companyname">ชื่อหน่วยงาน/องค์กร</label>
                    <input type="text" id="workinfo_companyname" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_jobtype">ลักษณะ/ประเภท</label>
                    <input type="text" id="workinfo_jobtype" class="form-control" />
                </div>
            </div>

            <div class="lable_show mt-2 mb-2">๓.๒.๒</div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_position_2">ตำแหน่ง</label>
                    <input type="text" id="workinfo_position_2" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_companyname_2">ชื่อหน่วยงาน/องค์กร</label>
                    <input type="text" id="workinfo_companyname_2" class="form-control" />
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="form-outline">
                    <label class="form-label lable_show" for="workinfo_jobtype_2">ลักษณะ/ประเภท</label>
                    <input type="text" id="workinfo_jobtype_2" class="form-control" />
                </div>
            </div>

            <div class="form_topic">๓. ลักษณะงาน/ประเภทธุรกิจของบริษัท</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="workinfo_workdetails" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>

            <div class="form_topic">๔. ความรับผิดชอบของท่านในปัจจุบัน</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="workinfo_workdetails" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="header_topic">๕. ผลงานหรือความรับผิดชอบของงานที่ผ่านมาที่ผู้สมัครมีความภาคภูมิใจ</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="achievements_job" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>


        <div class="row mb-2">
            <div class="header_topic">๖. ความสามารถเฉพาะด้านของท่านหรือสิ่งที่ท่านสามารถจะทำประโยชน์ให้กับหลักสูตรได้
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="abilities" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>



        <div class="row mb-2">
            <div class="header_topic">๗.
                ผู้สมัครมีความประสงค์อย่างไรที่จะเข้ามาศึกษาในหลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                <div class="form-outline w-100">
                    <textarea type="text" id="desire" class="form-control" style="height: 200px;"></textarea>
                </div>
            </div>
        </div>



        <div class="row mb-2">
            <div class="header_topic">๘. ผู้สมัครจะให้คำยืนยันอย่างไรต่อการเข้าเรียนในชั้นเรียนและร่วมกิจกรรม
                รวมทั้งปฏิบัติตามกฎระเบียบของหลักสูตรทุกประการ</div>
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
                        <label for="file_idcard" class="mb-3 lable_show">สำเนาบัตรประชาชน หรือ สำเนาบัตรข้าราชการ</label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="file_idcard" multiple>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="file_house_registration" class="mb-3 lable_show">สำเนาทะเบียนบ้าน</label>
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
                            นิ้ว</label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control file_select" type="file" id="file_photo" multiple>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <label for="file_certificate" class="mb-3 lable_show">สำเนาปริญญาบัตรวุฒิการศึกษาสูงสุด</label>
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
        <button type="submit" id="submit" class="btn btn_click btn-block mb-4 pt-2 pb-2 ps-5 pe-5">ลงทะเบียน</button>
    </div>
</section>

<script>
    var id_token = $("#id_token").val();
    $(function() {

        $(".select2-single").select2();
        $.ajax({
            url: "http://localhost/security-manage/api/Address/get_provinces",
            dataType: "json",
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            data: {
                show_province: 'show_province'
            },
            success: function(data) {
                console.log(data.data)
                $("#address_postcode").remove();
                    $("#address_postcode_main").append(' <input type="text" id="address_postcode" class="form-control" value="" disabled />')
                $.each(data.data, function(index, value) {
                    $("#address_province").append("<option value='" + index + "'> " + value + "</option>");
                });
            }
        });

        $("#address_province").change(function() {
            var province_id = $(this).val();
            console.log('province_id', province_id);
            $.ajax({
                url: "http://localhost/security-manage/api/Address/get_districts",
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
                    console.log('district', data.data);
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
            console.log('district_id', district_id);

            $.ajax({
                url: "http://localhost/security-manage/api/Address/get_sub_districts",
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
                    console.log('subdistrict', data.data);
                    $("#address_subdistrict").text("");
                    $("#address_postcode").remove();
                    $("#address_postcode_main").append(' <input type="text" id="address_postcode" class="form-control" value="" disabled />')
                    $.each(data.data, function(index, value) {

                        $("#address_subdistrict").append("<option value='" + index + "'> " + value + "</option>");

                    });
                }
            });

        });
        $("#address_subdistrict").change(function() {
            var subdistrict = $('#address_subdistrict').val();
            console.log('subdistrict', subdistrict);

            $.ajax({
                url: "http://localhost/security-manage/api/Address/get_zipcode",
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
                    console.log('zipcode', data.data[0]);
                    $("#address_postcode").remove();
                    $("#address_postcode_main").append(' <input type="text" id="address_postcode" class="form-control" value="' + data.data[0] + '" disabled />')
                }
            });

        });

    });
</script>