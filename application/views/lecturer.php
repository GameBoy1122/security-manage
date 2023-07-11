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
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_1.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พระพรหมบัณฑิต (ประยูร ธมฺมจิตฺโต), ศ.ดร.</h4>
                            <p class="card-text lecturer_position">
                                กรรมการมหาเถรสมาคม <br>เจ้าอาวาสวัดประยุรวงศาวาสวรวิหาร<br>
                                อุปนายกสภามหาวิทยาลัยมหาจุฬาลงกรณราชวิทยาลัย
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_2.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พระอาจารย์ ธวัชชัย ธัมมทีโป</h4>
                            <p class="card-text lecturer_position">
                                ประธานศูนย์พัฒนาจิตเฉลิมพระเกียรติบ้านวังเมือง
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_3.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ฯพณฯ ชวน หลีกภัย</h4>
                            <p class="card-text lecturer_position">
                                อดีตประธานรัฐสภา
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_4.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ.จรัล กุลละวณิชย์</h4>
                            <p class="card-text lecturer_position">
                                ประธานมูลนิธิการจัดการเพื่อความมั่นคง/<br>
                                นายกสมาคมศิษย์เก่า มส.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_5.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ศาสตราจารย์พิเศษ ดร.สุรเกียรติ์ เสถียรไทย</h4>
                            <p class="card-text lecturer_position">
                                อดีตรองนายกรัฐมนตรี <br>และรัฐมนตรีว่าการกระทรวงต่างประเทศ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_6.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">รศ.ดร.สมภพ มานะรังสรรค์</h4>
                            <p class="card-text lecturer_position">
                                อธิการบดีสถาบันการจัดการปัญญาภิวัฒน์
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_7.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายวีระศักดิ์ โควสุรัตน์</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา,<br>
                                อดีตรัฐมนตรีว่าการกระทรวงการท่องเที่ยวและกีฬา
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_8.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.ไพจิตร วิบูลย์ธนสาร</h4>
                            <p class="card-text lecturer_position">
                                รองประธานและเลขาธิการหอการค้าไทยในจีน
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_9.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">รศ.ดร. ปิติ ศรีแสงนาม</h4>
                            <p class="card-text lecturer_position">
                                ผู้อำนวยการศูนย์เศรษฐกิจระหว่างประเทศ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_10.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ผศ.ดร.สุรัตน์ โหราชัยกุล</h4>
                            <p class="card-text lecturer_position">
                                ผู้อำนวยการศูนย์อินเดียศึกษา คณะรัฐศาสตร์จุฬาฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_11.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ.สมศักดิ์ รุ่งสิตา</h4>
                            <p class="card-text lecturer_position">
                                อดีตเลขาธิการสภาความมั่นคงแห่งชาติ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_12.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ.สุรศักดิ์ กาญจนรัตน์</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา, <br> ประธานคณะกรรมาธิการทรัพยากรธรรมชาติ
                                และสิ่งแวดล้อม
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_13.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.ต.ดร.วรวุฒิ แสงทอง (ขุนศึกโต)</h4>
                            <p class="card-text lecturer_position">
                                รองผู้อำนวยการศูนย์ประสานการปฏิบัติที่ 1 <br>
                                กองอำนวยการรักษาความมั่นคงภายในราชอาณาจักร
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_14.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ศาสตราภิชาน นพ. พินิจ กุลละวณิชย์</h4>
                            <p class="card-text lecturer_position">
                                ผู้ช่วยเลขาธิการสภากาชาดไทย
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_15.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายไมตรี อินทุสุต</h4>
                            <p class="card-text lecturer_position">
                                อดีตปลัดกระทรวงพัฒนาสังคมและความมั่นคงของมนุษย์
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_16.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายสนั่น อังอุบลกุล</h4>
                            <p class="card-text lecturer_position">
                                ประธานกรรมการหอการค้าไทย <br>และสภาหอการค้าแห่งประเทศไทย
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_17.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">รศ.นพ. สุริยเดว ทรีปาตี</h4>
                            <p class="card-text lecturer_position">
                                ผู้อำนวยการศูนย์คุณธรรม (องค์การมหาชน)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_18.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ศาสตราจารย์กิตติคุณ นพ. สุทธิพร จิตต์มิตรภาพ</h4>
                            <p class="card-text lecturer_position">
                                ประธานคณะกรรมการส่งเสริมวิทยาศาสตร์ วิจัยและนวัตกรรม <br>นายกสภามหาวิทยาลัยกาฬสินธุ์
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_19.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นพ. สุขุม กาญจนพิมาย</h4>
                            <p class="card-text lecturer_position">
                                อดีตปลัดกระทรวงสาธารณสุข
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_20.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.ตวง อันทะไชย</h4>
                            <p class="card-text lecturer_position">
                                ประธานคณะกรรมาธิการ <br>คณะกรรมาธิการการศึกษาและการกีฬา วุฒิสภา
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_21.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.ไพรินทร์ ชูโชติถาวร</h4>
                            <p class="card-text lecturer_position">
                                นายกสภาสถาบันวิทยสิริเมธี
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_22.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.ปริญญา หอมเอนก</h4>
                            <p class="card-text lecturer_position">
                                ประธานและผู้ก่อตั้ง <br>บริษัท เอซิส โปรเฟสชั่นนัล เซ็นเตอร์ จำกัด
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_23.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร. สถิตย์ ลิ่มพงศ์พันธุ์</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา, <br>อดีตปลัดกระทรวงการคลัง,
                                <br>อดีตประธานกรรมการตลาดหลักทรัพย์แห่งประเทศไทย
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_24.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายเฉลิมพล ปุณโณทก</h4>
                            <p class="card-text lecturer_position">
                                ประธานเจ้าหน้าที่บริหาร บริษัท ซีที เอเชีย โรโบติกส์ จำกัด
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_25.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายเกียรติ สิทธีอมร</h4>
                            <p class="card-text lecturer_position">
                                รองประธานคณะกรรมาธิการการต่างประเทศ,<br> สภาผู้แทนราษฎร, <br>รองประธานองค์กรเสรีนิยมสากล
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_26.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายชาญศิลป์ ตรีนุชกร</h4>
                            <p class="card-text lecturer_position">
                                กรรมการ (กรรมการที่มิใช่ผู้บริหาร) <br>และกรรมการกำกับดูแลกิจการและการพัฒนาอย่างยั่งยืน
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_27.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.เวทางค์ พ่วงทรัพย์</h4>
                            <p class="card-text lecturer_position">
                                รองปลัดกระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคม MDES
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_28.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นพ.อำพล จินดาวัฒนะ</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา <br>ผู้ทรงคุณวุฒิด้านสุขภาพและสังคมนักการ<br>
                                สาธารณสุขดีเด่น ประเภทบริหาร <br>รางวัลชัยนาทนเรนทร พ.ศ.๒๕๕๙
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_29.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นพ.รุ่งเรือง กิจผาติ</h4>
                            <p class="card-text lecturer_position">
                                หัวหน้าที่ปรึกษา กระทรวงสาธารณสุขระดับ ๑๑,<br> โฆษกกระทรวงสาธารณสุข
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_30.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายสุพันธุ์ มงคลสุธี</h4>
                            <p class="card-text lecturer_position">
                                ประธานสภาอุตสาหกรรมแห่งประเทศไทย,<br> ประธานกรรมการ บมจ.ซินเน็ค (ประเทศไทย)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_31.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายสุรชัย เลี้ยงบุญเลิศชัย</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา,<br> อดีตรองประธานวุฒิสภาคนที่ ๑
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_32.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.ร.อ.ไพโรจน์ แก่นสาร</h4>
                            <p class="card-text lecturer_position">
                                รองผู้อำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_33.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.ท.ดร. กฤษฎา สุทธานินทร์</h4>
                            <p class="card-text lecturer_position">
                                รองผู้อำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_34.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ.อ. อภิสิทธิ์ จุลโมกข์</h4>
                            <p class="card-text lecturer_position">
                                ที่ปรึกษาหลักสูตร ฯ,<br> กรรมการอำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_35.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ผศ.ดร.มานวิภา อินทรทัต</h4>
                            <p class="card-text lecturer_position">
                                ที่ปรึกษาหลักสูตร ฯ,<br> กรรมการอำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_36.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.ต.ต.ดร.ภาดล ประภานนท์</h4>
                            <p class="card-text lecturer_position">
                                กรรมการอำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_37.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.วรวุฒิ ไชยศร</h4>
                            <p class="card-text lecturer_position">
                                กรรมการอำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer_38.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">อ.ลัดดาวัลย์ ชูช่วย</h4>
                            <p class="card-text lecturer_position">
                            กรรมการอำนวยการหลักสูตร ฯ,<br> แชมป์สุดยอดอัจฉริยะนักจำระดับประเทศ 2 สมัย
                            </p>
                        </div>
                    </div>
                </div>














            </div>

        </div>
    </div>
</section>