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

        .btn_click {
            background-color: #116DB6;
            width: 28%;
            height: 110%;
            font-size: 30px;
            color: white;  
        }

        @media only screen and (max-width: 900px) {
            .btn_click {
                background-color: #116DB6;
                width: 50%;
                color: white;
                font-size: 20px;
            }
        }

    </style>

    <section class="head mb-5" style=" position: relative;">

        <img src="<?php echo base_url('/assets/img/topic_pic.png'); ?>" alt="topic_pic" style="width:100%;">
        <div class="topic_header">สมัครเรียน</div>
    </section>

    <section>
        <div class="container">
            <div class="row pt-3 mb-5" style="text-align: center; color: #116DB6;">
                <h2>ลงทะเบียนสำเร็จ</h2>
            </div>

            <div class="row  mb-4">
                <div class="row mb-3">
                    <h5 style="color: #116DB6;">สถานที่วันสัมภาษณ์</h5>
                </div>
                <div class="col-12">
                    สำนักงานอำนวยการหลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง<br><br>เลขที่ 144/4 หมู่ที่ 4 ต.บางรักพัฒนา อ.บางบัวทอง จ.นนทบุรี 11110
                </div>
            </div>

            <div class="row mb-4">
                <div class="row mb-3">
                    <h5 style="color: #116DB6;">เอกสารประกอบ ในวันสัมภาษณ์</h5>
                </div>
                <div class="col-12">
                    ๑. สำเนาบัตรประชาชน หรือ สำเนาบัตรข้าราชการ <b>๑ ชุด</b>
                </div>
                <div class="col-12">
                    ๒. สำเนาทะเบียนบ้าน <b>๑ ชุด</b>
                </div>
                <div class="col-12">
                    ๓. รูปถ่ายหน้าตรง ไม่สวมแว่น ไม่สวมหมวก ขนาด ๑ ๑/๒x ๒ นิ้ว <b>๒ รูป</b>
                </div>
                <div class="col-12">
                    ๔. สำเนาปริญญาบัตรวุฒิการศึกษาสูงสุด <b>๑ ฉบับ</b>
                </div>
            </div>

            <div class="row mb-4">
                <div class="row mb-3">
                    <h5 style="color: #116DB6;">กรณีนักธุรกิจ เอกสารประกอบ เพิ่มเติม</h5>
                </div>
                <div class="col-12">
                    ๑. หนังสือรับรองการจัดตั้งบริษัทฯ ห้างร้านฯ หรือ <b>๑ ชุด</b> หนังสือแต่งตั้งการเป็นตัวแทนธุรกิจนั้นๆ (ออกให้โดยกระทรวงพาณิชย์)
                </div>
                <div class="col-12">
                    ๒. หนังสือบริคณห์สนธิ <b>๑ ชุด</b>
                </div>
                <div class="col-12">
                    ๓. หนังสือรับรองสถานะทางการเงิน(รายงานผลประกอบการประจำปี) <b>๑ ชุด</b>
                </div>
                <div class="col-12">
                    ๔. เอกสารบรรยายประกอบความสัมพันธ์ระหว่างกิจการของท่าน กับหน่วยงานราชการ หรือ เกี่ยวพันกับความมั่นคงของชาติ ตลอดระยะเวลาที่ผ่านมา (เขียนไม่เกิน 1 หน้ากระดาษ A4) <b>๑ ฉบับ</b>
                </div>
                <div class="col-12">
                    ๕. ให้นำใบปริญญาตัวจริงมาแสดงด้วย (ถ้าไม่มี ให้นำหนังสือรับรองการจบปริญญา ลงนามโดยผู้มีอำนาจลงนาม ของสถาบันการศึกษานั้นๆมาแสดง)
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-10 col-sm-6" style="text-align: center;">
                    <h5><span style="color: #E00707;">*** หมายเหตุ เอกสารทุกฉบับ ต้องเซ็นรับรองสำเนาถูกต้องทุกฉบับ มิฉะนั้นจะถือว่าเอกสารการรับสมัครไม่สมบูรณ์ ขาดคุณสมบัติในการพิจารณา </span></h5>
                </div>
            </div>

            
                <div class="d-flex justify-content-center mb-5 mt-5">
                    <button type="submit" class="btn btn_click">กลับไปหน้าสมัครเรียน</button>
                </div>
            


        </div>
    </section>