<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->

<head>

  <style>
    body {
      font-family: "sarabun";
    }

    @font-face {
      font-family: 'sarabun';
      src: url('assets/fonts/THSarabunNew.ttf') format("truetype");
    }

    h1 {
      font-size: 26px;
      font-weight: bold;
    }

    h2 {
      font-size: 24px;
      font-weight: bold;
      padding: 0;
      margin: 0;
    }

    p {
      font-size: 24px;
    }

    span {
      font-size: 20px;
    }

    .table_bordered {
      border: 1px solid #000;
      margin-bottom: 10px;
      font-size: 20px;
    }

    .table_bordered td {
      border: 0.5px solid #000;
      padding: 5px;

    }
  </style>
</head>

<body>
  <table width="100%" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="2" style="text-align: center;"><img src="<?php echo base_url('assets/img/LOGO-Main.png') ?>" alt="LOGO-Main" style="width: 120px;"></td>
      <td colspan="1" style="text-align: center;font-size:24px;font-weight: bold;">
        เลขที่ รับสมัคร
        <br>
        <br>
        <hr>
      </td>
    </tr>
  </table>
  <h1 style="text-align: center;">ใบสมัครผู้เข้ารับการอบรม <br>หลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง รุ่นที่ ๑๖</h1>
  <table width="100%" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="2" style="text-align: center;"><img src="<?php echo base_url('assets/img/img_avatar.png') ?>" alt="LOGO-Main" style="width: 150px;"></td>
      <td colspan="1" style="text-align: left;font-size:24px;font-weight: bold;">
        สำหรับเจ้าหน้าที่
        <br>
        วันที่ ................./..................../ ๒๕๖๖
        <br>
         ศิษย์เก่า
        <br>
         ข้าราชการ
        <br>
         รัฐวิสาหกิจ
        <br>
         บุคคลทั่วไป

      </td>
    </tr>
  </table>
  <h2>๑.ข้อมูลส่วนบุคคล</h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;">ยศ – ชื่อ นามสกุล </td>
      <td colspan="2"><?php echo $user->name_th ?></td>
      <td colspan="1">ชื่อเล่น : <?php echo $user->nickname ?> </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ชื่อ-สกุล (ภาษาอังกฤษ)</td>
      <td colspan="3"><?php echo $user->name_en ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">เลขประจำตัวประชาชน</td>
      <td colspan="1"><?php echo $user->id_cardname ?></td>
      <td colspan="2">ขนาดเสื้อยืดโปโล : <?php echo $user->shirt_select ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">วัน เดือน ปีเกิด</td>
      <td colspan="3"><?php echo $user->birthday_day ?> <?php echo $user->birthday_month ?> <?php echo $user->birthday_year ?> </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">เชื้อชาติ : <?php echo $user->ethnicity ?></td>
      <td colspan="1">สัญชาติ : <?php echo $user->nationality ?></td>
      <td colspan="1">ศาสนา : <?php echo $user->religion ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ตำแหน่งปัจจุบัน</td>
      <td colspan="3"><?php echo $user->current_position ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ที่อยู่ปัจจุบัน</td>
      <td colspan="1">เลขที่ <?php echo $user->address_no ?></td>
      <td colspan="1">ซอย <?php echo $user->address_alley ?></td>
      <td colspan="1">ถนน <?php echo $user->address_road ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">แขวง/ตำล
        <?php
        if (isset($sub_districts_user)) {
          echo $sub_districts_user->sub_districts;
        }
        ?>
      </td>
      <td colspan="2">เขต/อำเภอ
        <?php
        if (isset($districts_user)) {
          echo $districts_user->districts;
        }
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">จังหวัด
        <?php
        if (isset($provinces_user)) {
          echo $provinces_user->provinces;
        }
        ?>
      </td>
      <td colspan="2">รหัสไปรษณีย์ <?php echo $user->address_postcode ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">E-mail</td>
      <td colspan="3"><?php echo $user->work_email ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">หน่วยงาน (ที่ทำงาน)</td>
      <td colspan="3"><?php echo $user->work_name ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">เลขที่ <?php echo $user->work_no ?></td>
      <td colspan="1">ซอย <?php echo $user->work_alley ?></td>
      <td colspan="1">ถนน <?php echo $user->work_road ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">แขวง/ตำล
        <?php
        if (isset($sub_districts_work)) {
          echo $sub_districts_work->sub_districts;
        }
        ?>

      </td>
      <td colspan="2">เขต/อำเภอ
        <?php
        if (isset($districts_work)) {
          echo $districts_work->districts;
        }
        ?>

      </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">จังหวัด
        <?php
        if (isset($provinces_work)) {
          echo $provinces_work->provinces;
        }
        ?>
      </td>
      <td colspan="2">รหัสไปรษณีย์ <?php echo $user->work_postcode ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">สถานภาพการสมรส</td>
      <td colspan="3"> สมรส  โสด  หย่า </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ชื่อคู่สมรส</td>
      <td colspan="3"><?php echo $user->marital_name ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">อาชีพ/ตำแหน่ง</td>
      <td colspan="3"><?php echo $user->marital_job ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">วัน เดือน ปีเกิด </td>
      <td colspan="3">
        <?php if (!empty($user->marital_day)) { ?>
          <?php echo $user->marital_day ?> <?php echo $user->marital_month ?> <?php echo $user->marital_year ?>
        <?php } ?>
      </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">เชื้อชาติ <?php echo $user->marital_ethnicity ?></td>
      <td colspan="1">สัญชาติ <?php echo $user->marital_ethnicity ?></td>
      <td colspan="1">ศาสนา <?php echo $user->marital_ethnicity ?></td>
    </tr>
  </table>
  <h2>๒.ข้อมูลการศึกษา </h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;"></td>
      <td colspan="1">สาขาวิชาที่จบการศึกษา</td>
      <td colspan="1">สถาบันการศึกษา</td>
      <td colspan="1">ปี พ.ศ.</td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ระดับมัธยม</td>
      <td colspan="1"><?php echo $user->secondary_education_branch ?></td>
      <td colspan="1"><?php echo $user->secondary_education_academy ?></td>
      <td colspan="1"><?php echo $user->secondary_education_year ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ปริญญาตรี</td>
      <td colspan="1"><?php echo $user->bachelors_degree_branch ?></td>
      <td colspan="1"><?php echo $user->bachelors_degree_academy ?></td>
      <td colspan="1"><?php echo $user->bachelors_degree_year ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ปริญญาโท</td>
      <td colspan="1"><?php echo $user->masters_degree_branch ?></td>
      <td colspan="1"><?php echo $user->masters_degree_academy ?></td>
      <td colspan="1"><?php echo $user->masters_degree_year ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">ปริญญาเอก</td>
      <td colspan="1"><?php echo $user->doctorate_branch ?></td>
      <td colspan="1" style="width: 30%;"><?php echo $user->doctorate_academy ?></td>
      <td colspan="1"><?php echo $user->doctorate_year ?></td>
    </tr>

  </table>
  <h2>๓.ข้อมูลหลักสูตรที่ผ่านการอบรม (โปรดระบุชื่อหลักสูตรเต็ม ชื่อย่อ รุ่น และปีที่เข้าเรียน) </h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;">หลักสูตร</td>
      <td colspan="3"><?php echo $user->training_course_information ?></td>
    </tr>
  </table>
  <h2>๔.ข้อมูลการทำงาน </h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;">๑.ประวัติการทำงานที่สำคัญ</td>
      <td colspan="3"><?php echo $user->workinfo_work_history ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">๒.ตำแหน่งอื่นๆในปัจจุบัน</td>
      <td colspan="3">
        ๓.๒.๑ ต่ำแหน่ง : <?php echo $user->workinfo_position ?> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;ชื่อหน่วยงาน/องค์กร : <?php echo $user->workinfo_companyname ?><br>
        &nbsp;&nbsp;&nbsp;&nbsp;ลักษณะ/ประเภท : <?php echo $user->workinfo_jobtype ?><br>
        ๓.๒.๒ ต่ำแหน่ง : <?php echo $user->workinfo_position_2 ?> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;ชื่อหน่วยงาน/องค์กร : <?php echo $user->workinfo_companyname_2 ?><br>
        &nbsp;&nbsp;&nbsp;&nbsp;ลักษณะ/ประเภท : <?php echo $user->workinfo_jobtype_2 ?><br>
      </td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">๓.ลักษณะงาน/ประเภทธุรกิจ </br>ของบริษัท</td>
      <td colspan="3"><?php echo $user->workinfo_workdetails ?></td>
    </tr>
    <tr>
      <td colspan="1" style="width: 25%;">๔.ความรับผิดชอบของท่านในปัจจุบัน</td>
      <td colspan="3"><?php echo $user->workinfo_responsibility ?></td>
    </tr>
  </table>
  <br>
  <h2>๕.ผลงานหรือความรับผิดชอบของงานที่ผ่านมาที่ผู้สมัครมีความภาคภูมิใจ </h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;height:60px"><?php echo $user->achievements_job ?></td>
    </tr>
  </table>
  <h2>๖.ความสามารถเฉพาะด้านของท่านหรือสิ่งที่ท่านสามารถจะทำประโยชน์ให้กับหลักสูตรได้ </h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;height:60px"><?php echo $user->abilities ?></td>
    </tr>
  </table>
  <h2>๗.ผู้สมัครมีความประสงค์อย่างไรที่จะเข้ามาศึกษาในหลักสูตรการบริหารจัดการด้านความมั่นคงขั้นสูง </h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;height:60px"><?php echo $user->desire ?></td>
    </tr>
  </table>
  <h2>๘.ผู้สมัครจะให้คำยืนยันอย่างไรต่อการเข้าเรียนในชั้นเรียนและร่วมกิจกรรม รวมทั้งปฏิบัติตามกฎระเบียบของ หลักสูตรทุกประการ</h2>
  <table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="1" style="width: 25%;height:60px"><?php echo $user->course_regulations ?></td>
    </tr>
  </table>
  <table width="100%" border="0" cellpadding="2" cellspacing="0" style="margin-top: 20px;">
    <tr>
      <td colspan="1" style="width: 25%;height:60px"></td>
      <td colspan="2"></td>
      <td colspan="1" style="text-align: center;font-size: 20px;">
        ลงชื่อ................................................................................ <br>
        (...............................................................................) <br>
        วันที่ ................../........................../...................
      </td>
    </tr>
    <tr>
      <td colspan="4" style="font-size: 18px;">
        หมายเหตุ : เพื่อความสมบูรณ์ในการดำเนินการทางด้านธุรการที่ถูกต้อง กรุณากรอกข้อมูลให้ครบทุกช่อง <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** : สำหรับข้าราชการและบุคคลทั่วไป เมื่อยื่นใบสมัครแล้ว สำนักงานฯ จะนัดสัมภาษณ์ เพื่อพบปะแลกเปลี่ยนทัศนะคติในเบื้อต้น ณ สำนักงานอำนวยการหลักสูตรฯ <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ขณะเข้ารบัญการอบรมหลักสูตรฯ ห้ามมิให้ศกึ ษาหลักสูตรอื่นในห้วงเวลาเดียวกัน

      </td>
    </tr>
  </table>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->

</html>