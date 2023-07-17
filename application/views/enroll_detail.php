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

        .topic_accordion {
            color: #116DB6;
            font-size: 20px;
            background-color: white;
        }

        .box {
            border: solid 1px #E6E6E6;
            border-radius: 8px;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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

    <section class="head mb-5" style=" position: relative;">

        <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
        <div class="topic_header">สมัครเรียน</div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-12">
                    <h3 style="font-weight: 400; text-align: center;">การบริหารจัดการด้านความมั่นคงขั้นสูง รุ่นที่ 16<br>(Advanced Security Management Program: ASMP)</h3>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                            การอบรมและกิจกรรมของ
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show " aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body text-truncate box ps-2">
                            <span class="ps-3">ร่วมการสานสัมพันธ์ก่อนเข้ารับการอบรม <span style="color: #ff0000;">วันที่ 10-11 พ.ย. 2566 (ภาคบังคับ)</span></span>
                            <ul>
                                <li>การอบรมทุกบ่ายวันเสาร์ (13.00 – 18.00 น.)<br><span style="color: #ff0000;">ระหว่างวันที่ 18 พ.ย. 2566 – 24 พ.ค. 2567</span><br>ณ โรงแรมเซ็นทรา ศูนย์ราชการ แจ้งวัฒนะ กทม.</li>
                                <li>รับประทานอาหารเย็นร่วมกัน และนันทนาการ (18.00 – 21.00 น.)</li>
                                <li>การถกแถลง/สัมมนา เพื่อนำเสนอผลงานของผู้เข้ารับการอบรม</li>
                                <li> การศึกษาดูงานภายในประเทศ</li>
                                <li> การแลกเปลี่ยนความรู้และประสบการณ์</li>
                                <li> เสริมสร้างความสัมพันธ์ระหว่างกัน</li>
                                <li>กิจกรรม CSR/SE/SD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingTwo">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            เปิดรับสมัคร
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body box">
                            สมัครด้วยตนเองที่สำนักงานหลักสูตร หรือสมัครผ่านทางออนไลน์<br>เว็บไซต์ www.asmp-f.com<br>ระหว่างวันที่ 3 ก.ค. 2566 – 31 ส.ค. 2566 วันจันทร์ – ศุกร์ ในเวลาราชการ
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingThree">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            วิธีการคัดเลือก
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body box">
                            - การสัมภาษณ์ ในวันที่ 20 ก.ค. 2566 – 15 ก.ย. 2566<br>- ประกาศผลการคัดเลือก 20 ก.ย. 2566 ที่ www.asmp-f.com
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingFour">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            คุณสมบัติ
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body box ps-2">
                            <ol>
                                <li>การศึกษาระดับปริญญาตรีขึ้นไป</li>
                                <li>ศิษย์เก่า วปอ. </li>
                                <li>บุคคลทั่วไป อายุ 35 ปี ขึ้นไป นับถึงวันที่เปิดการอบรม (เกิดก่อน ธ.ค.2531) </li>
                                <li>เป็นข้าราชการ หรือเป็นพนักงานระดับผู้บริหารรัฐวิสาหกิจ หรือเป็นผู้บริหารระดับสูงในภาคเอกชน หรือองค์การสาธารณะ หรือเป็นผู้ที่คณะกรรมการอำนวยการหลักสูตรฯ เห็นควร ให้เข้ารับการฝึกอบรม</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingFive">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            หลักฐานการสมัคร
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body box ps-2">
                            <ol>
                                <li>ใบสมัคร</li>
                                <li>สำเนาบัตรประชาชน หรือ สำเนาบัตรข้าราชการ 1 ชุด หรือ หนังสือเดินทาง</li>
                                <li>สำเนาทะเบียนบ้าน 1 ชุด</li>
                                <li>รูปถ่ายหน้าตรง ถ่ายไม่เกิน 6 เดือนขนาด 2 นิ้ว จำนวน 2 รูป</li>
                                <li>สำเนาปริญญาบัตร (วุฒิการศึกษาสูงสุด) 1 ฉบับ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingSix">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                            รายงานตัวและชำระเงิน
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body box">
                            ผู้ได้รับการคัดเลือกรายงานตัว<br>ณ สำนักงานหลักสูตร เวลา 09.00-15.00 น.<br>วันที่ 25 ก.ย. - 6 ต.ค. 2566
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingSeven">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                            ค่าใช้จ่าย
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body box ps-2">
                            <span class="ps-3">ค่าใช้จ่ายในอัตราต่อไปนี้</span>
                            <ul>
                                <li>ศิษย์เก่า 35,000 บาท</li>
                                <li>ข้าราชการ/พนักงานระดับสูงรัฐวิสาหกิจ ค่าใช้จ่าย 50,000 บาท</li>
                                <li>บุคคลในภาคเอกชน องค์การอิสระ หรือ องค์การสาธารณะ ค่าใช้จ่าย 65,000 บาท</li>
                                <li>การดูงานต่างประเทศเป็นกิจกรรมของรุ่นมีค่าใช้จ่ายเพิ่มเติมเป็นรายบุคคลโดยรุ่นเป็นผู้จัดการเอง</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingEight">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                            สถานที่สมัคร/สอบถามรายละเอียดเพิ่มเติม
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body box">
                            สำนักงานอำนวยการหลักสูตรฯ มูลนิธิการจัดการเพื่อความมั่นคง
                            <br>ติดกับสำนักงานสรรพากร นนทบุรี 2
                            <br>เลขที่ 144/4 หมู่ที่ 4 ถ.รัตนาธิเบศร์ ต.บางรักพัฒนา อ.บางบัวทอง จ.
                            <br>หรือทาง www.asmp-f.com
                            <br>โทร 02-926-6767 ,02-926-6895
                            <br>พล.อ.ต.หญิง ดร.พัชรี พิพิธสุขสันต์ (ผู้ช่วยผู้อำนวยการหลักสูตรฯ) เบอร์มือถือ 081-444-0099
                            <br>คุณวัลลี กลิ่นสอน 085-356-0575 / คุณวัลภา วรรณสัมผัส 085-915-0951/
                            <br>คุณศิราณี มาลีวงศ์ 063-941-4195
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="panelsStayOpen-headingNine">
                        <button class="accordion-button topic_accordion" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                            การสำเร็จการศึกษา
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body box ps-2">
                            <ul>
                                <li>ผู้สำเร็จการศึกษา ตามหลักเกณฑ์ที่กำหนด</li>
                                <li>ได้รับวุฒิบัตรมูลนิธิการจัดการเพื่อความมั่นคง</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5 mb-5 ">
                <div class="col-12 text-center">
                    <a href="<?php echo base_url('Enroll') ?>"> <button type="submit" class="btn btn_click">สมัครเรียน มส.16</button></a>
                </div>
            </div>
        </div>
    </section>