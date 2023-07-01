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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer1.png'); ?>"
                            alt="lecturer">


                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name"> ฯพณฯ ชวน หลีกภัย</h4>
                            <p class="card-text lecturer_position">อดีตประธานรัฐสภา</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer2.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ.จรัล กุลละวณิชย์</h4>
                            <p class="card-text lecturer_position">
                                ประธานมูลนิธิการจัดการเพื่อความมั่นคง/<br>นายกสมาคมศิษย์เก่า มส.</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer3.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ศาสตราจารย์พิเศษ ดร.สุรเกียรติ์ เสถียรไทย</h4>
                            <p class="card-text lecturer_position">
                                อดีตรองนายกรัฐมนตรี <br>และรัฐมนตรีว่าการกระทรวงต่างประเทศ</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer4.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">รศ.ดร.สมภพ มานะรังสรรค์</h4>
                            <p class="card-text lecturer_position">
                                อธิการบดีสถาบันจัดการปัญญาภิวัฒน์</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer5.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นาย จิรายุส ทรัพย์ศรีโสภา</h4>
                            <p class="card-text lecturer_position">
                                ประธานเจ้าหน้าที่บริหาร บริษัท บิทคับ <br> แคปปิตอล กรุ๊ป โฮลดิ้งส์ จำกัด</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer6.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร.ไพจิตร วิบูลย์ธนสาร</h4>
                            <p class="card-text lecturer_position">
                                รองประธานและเลขาธิการหอการค้าไทยในจีน</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer7.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายวีระศักดิ์ โค้วสุรัตน์</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา,<br> อดีตรัฐมนตรีว่าการกระทรวงการท่องเที่ยว
                                <br>และกีฬา
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer8.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร. ปริญญา หอมเอนก</h4>
                            <p class="card-text lecturer_position">
                                ประธานและผู้ก่อตั้ง <br>บริษัท เอซิส โปรเฟสชั่นนัล เซ็นเตอร์ จำกัด
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer9.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer10.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">รศ.ดร. ปิติ ศรีแสงนาม</h4>
                            <p class="card-text lecturer_position">
                                ผู้จัดการใหญ่ ธนาคารทหารไทยธนชาต จำกัด (มหาชน)<br>
                                ประธานกรรมการและผู้มีอำนาจลงนาม <br>บริษัท ทหารไทยธนชาตโบรกเกอร์ จำกัด
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer11.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.ต. ดร.วรวุฒิ แสงทอง (ขุนศึกโต)</h4>
                            <p class="card-text lecturer_position">
                                รองผู้อำนวยการศูนย์ประสานการปฏิบัติที่ 1<br> กองอำนวยการรักษาความมั่นคงภายในราชอาณาจักร
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer12.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer13.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นางสาวพิยะดา สุดกังวาล</h4>
                            <p class="card-text lecturer_position">
                                ผู้อำนวยการกองยุทธศาสตร์และแผนงาน
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer14.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer15.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พลเรือเอก ไพโรจน์ แก่นสาร</h4>
                            <p class="card-text lecturer_position">
                                รองผู้อำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer16.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer17.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ดร. ตวง อันทะไชย</h4>
                            <p class="card-text lecturer_position">
                                ประธานคณะกรรมาธิการ <br> คณะกรรมาธิการการศึกษาและการกีฬาวุฒิสภา
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer18.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ. สมศักดิ์ รุ่งสิตา</h4>
                            <p class="card-text lecturer_position">
                                อดีตเลขาธิการสภาความมั่นคงแห่งชาติ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer19.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer20.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นพ. สุขุม กาญจนพิมาย</h4>
                            <p class="card-text lecturer_position">
                                ปลัดกระทรวงสาธารณสุข
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer21.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer22.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">รศ.นพ. สุริยเดว ทรีปาตี</h4>
                            <p class="card-text lecturer_position">
                                สมาชิกวุฒิสภา, อดีตปลัดกระทรวงการคลัง, <br>อดีตประธานกรรมการตลาดหลักทรัพย์แห่ง
                                ประเทศไทย
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer23.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">อ,ลัดดาวัลย์ ชูช่วย</h4>
                            <p class="card-text lecturer_position">
                                แชมป์สุดยอดอัจฉริยะนักจำระดับประเทศ
                                2 สมัย ,<br>
                                กรรมการผู้จัดการ บริษัท แอคคูเรซี่
                                โซลูชั่น จำกัด
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer24.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer25.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">พล.อ.อ. อภิสิทธิ์ จุลโมกข์</h4>
                            <p class="card-text lecturer_position">
                                ที่ปรึกษาหลักสูตร ฯ , กรรมการอำนวยการหลักสูตร ฯ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer26.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายไมตรี อินทสุต</h4>
                            <p class="card-text lecturer_position">
                                อดีตปลัดกระทรวงพัฒนาสังคมและความมั่นคงของมนุษย์
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer27.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer28.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ศาสตราจารย์กิตติคุณ นพ. สุทธิพร จิตต์มิตรภาพ</h4>
                            <p class="card-text lecturer_position">
                                ประธานคณะกรรมการส่งเสริมวิทยาศาสตร์ <br>วิจัยและนวัตกรรม นายกสภามหาวิทยาลัยกาฬสินธุ์
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer29.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">ม.ล. ดิศปนัดดา ดิศกุล</h4>
                            <p class="card-text lecturer_position">
                                ประธานเจ้าหน้าที่บริหาร มูลนิธิแม่ฟ้าหลวงในพระบรมราชูปถัมภ์,<br>
                                นายกสมาคมธุรกิจเพื่อสังคม (SE Thailand)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card card-custom bg-white border-white border-0 mb-3">
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer30.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer31.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer32.png'); ?>"
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
                        <img class="lecturer_picture" src="<?php echo base_url('/assets/img/lecturer33.png'); ?>"
                            alt="lecturer">

                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-text lecturer_name">นายเกียรติ สิทธีอมร</h4>
                            <p class="card-text lecturer_position">
                                รองประธานคณะกรรมาธิการการต่างประเทศ,<br> สภาผู้แทนราษฎร , รองประธานองค์กรเสรีนิยมสากล
                            </p>
                        </div>
                    </div>
                </div>










            </div>

        </div>
    </div>
</section>