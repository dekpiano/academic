<style>
.table tbody tr td {
    border: 1px solid;
}

.table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid;
}

.p-2 {
    padding-left: 150px;
}

.float-left {
    float: left;
}

.text-center {
    text-align: center;
    font-size: 28px;
}

.b {
    font-weight: bold;
}
</style>
<div class="text-center b">
    <img src="uploads/banner/LogoSKJ_2.png" style="width: 15%;" alt="" srcset="">
    <div>แบบบันทึกผลการพัฒนาคุณภาพผู้เรียนรายวิชา</div>
    <div>โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</div>
    <div>อำเภอเมืองนครสวรรค์ จังหวัดนครสวรรค์ สังกัดองค์การบริหารส่วนจังหวัดนครสวรรค์</div>
</div>

<table class="b" style="width: 100%;margin-top: 10px;">
    <tbody>
        <tr>
            <?php $sub_year = explode("/",$re_subjuct[0]->SubjectYear);?>
            <td style="width: 50%;text-align: right;padding-right: 10px;">ภาคเรียนที่ <?=$sub_year[0];?></td>
            <td style="padding-left: 10px;">ปีการศึกษา <?=$sub_year[1];?></td>
        </tr>
        <tr>
            <td style="width: 50%;text-align: right;padding-right: 10px;">ชั้นมัธยมศึกษาปีที่
                <?php $sub_room = explode(".",$re_room); echo $sub_room[1];?></td>
            <td style="padding-left: 10px;">
                ระดับมัธยมศึกษา<?php 
            $sub_level = explode("/",$sub_room[1]);
           echo $sub_level[0] >= 4?"ตอนปลาย":"ตอนต้น";
            ?>
            </td>
        </tr>
    </tbody>
</table>

<table class="b" style="width: 100%;margin-top: 30px;">
    <tbody>
        <tr>
            <td>กลุ่มสาระการเรียนรู้ <?php $FirstGroup = explode("/",$re_subjuct[0]->FirstGroup); echo $FirstGroup[1];?>
            </td>
            <td>สาระการเรียนรู้<?php $SubjectType = explode("/",$re_subjuct[0]->SubjectType); echo $SubjectType[1];?>
            </td>
        </tr>
        <tr>
            <td>รายวิชา <?=$re_subjuct[0]->SubjectName?></td>
            <td>รหัสวิชา <?=$re_subjuct[0]->SubjectCode?></td>
        </tr>
        <tr>
            <td>เวลาเรียน <?=$re_subjuct[0]->SubjectHour?> ชั่วโมงต่อภาคเรียน</td>
            <td>เวลาเรียน <?=($re_subjuct[0]->SubjectHour)/20?> ชั่วโมงต่อสัปดาห์</td>
        </tr>
    </tbody>
</table>

<table style="width: 100%;margin-top: 10px;">
    <tbody>
        <tr>
            <td style="width: 50px"> </td>
            <td style="width: 100px">ครูผู้สอน </td>
            <td><?=$this->session->userdata('fullname');?></td>
        </tr>
        <tr>
            <td> </td>
            <td>ครูที่ปรึกษา</td>
            <td>
                <?php if($re_teacher != ""):
                foreach ($re_teacher as $key => $v_re_teacher): 
                    echo $v_re_teacher->pers_prefix.$v_re_teacher->pers_firstname.' '.$v_re_teacher->pers_lastname?>
                  &nbsp;&nbsp;  
                <?php endforeach; endif; ?>
            </td>
        </tr>
    </tbody>
</table>


<table class="table" style="width: 100%;margin-top: 10px; border-collapse: collapse;border: 2px solid;">
    <tbody>
        <tr>
            <td rowspan="3" style="width: 16.7401%; text-align: center; vertical-align: middle;">
                <strong>จำนวนนักเรียนทั้งหมด</strong>
            </td>
            <td colspan="10" style="width: 73.6784%; text-align: center; vertical-align: middle;">
                <strong>สรุปผลการพัฒนาคุณภาพผู้เรียน</strong>
            </td>
            <td rowspan="3" style="width: 8.1773%; text-align: center; vertical-align: middle;">
                <strong>หมายเหตุ</strong>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 73.6784%; text-align: center; vertical-align: middle;">
                <strong>จำนวนนักเรียนที่ได้ระดับผลการเรียน</strong>
            </td>
        </tr>
        <tr>
            <td style="width: 7.1585%; text-align: center; vertical-align: middle;"><strong>4</strong></td>
            <td style="width: 7.1587%; text-align: center; vertical-align: middle;"><strong>3.5</strong></td>
            <td style="width: 7.0037%; text-align: center; vertical-align: middle;"><strong>3</strong></td>
            <td style="width: 7.0382%; text-align: center; vertical-align: middle;"><strong>2.5</strong></td>
            <td style="width: 8.0208%; text-align: center; vertical-align: middle;"><strong>2</strong></td>
            <td style="width: 8.6299%; text-align: center; vertical-align: middle;"><strong>1.5</strong></td>
            <td style="width: 7.439%; text-align: center; vertical-align: middle;"><strong>1</strong></td>
            <td style="width: 6.2672%; text-align: center; vertical-align: middle;"><strong>0</strong></td>
            <td style="width: 6.7525%; text-align: center; vertical-align: middle;"><strong>ร</strong></td>
            <td style="width: 6.1639%; text-align: center; vertical-align: middle;"><strong>มส</strong></td>
        </tr>
        <tr>
            <td style="width: 16.7401%; text-align: center; vertical-align: middle;"><strong>45</strong></td>
            <td style="width: 7.1585%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.1587%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.0037%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.0382%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 8.0208%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 8.6299%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.439%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 6.2672%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 6.7525%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 6.1639%; text-align: center; vertical-align: middle;"><strong>45</strong></td>
            <td style="width: 8.1773%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
        </tr>
        <tr>
            <td style="width: 16.7401%; text-align: center; vertical-align: middle;"><strong>คิดเป็นร้อยละ</strong></td>
            <td style="width: 7.1585%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.1587%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.0037%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.0382%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 8.0208%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 8.6299%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 7.439%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 6.2672%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 6.7525%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
            <td style="width: 6.1639%; text-align: center; vertical-align: middle;"><strong>100.00</strong></td>
            <td style="width: 8.1773%; text-align: center; vertical-align: middle;"><strong><br></strong></td>
        </tr>
        <tr>
            <td colspan="5" style="width: 45.2832%;"><strong>ร้อยละของนักเรียนที่ได้ผลการเรียนระดับดี(3)
                    ขึ้นไป&nbsp;</strong></td>
            <td style="width: 8.0208%; text-align: center; vertical-align: middle;"><strong>0.00</strong></td>
            <td colspan="5" style="width: 37.1541%;"><strong>ผลการเรียนเฉลี่ยของรายวิชา</strong></td>
            <td style="width: 8.1773%; text-align: center; vertical-align: middle;"><strong>0.00</strong></td>
        </tr>
        <tr>
            <td colspan="5" style="width: 45.2832%;"><strong>ร้อยละของนักเรียนที่ไม่ผ่านการประเมิน</strong></td>
            <td style="width: 8.0208%; text-align: center; vertical-align: middle;"><strong>100.00</strong></td>
            <td colspan="6" style="width: 46.6255%;"><strong>ส่วนเบี่ยงเบนมาตรฐาน</strong></td>
        </tr>
    </tbody>
</table>

<div class="text-center b" style="margin-top: 3rem;font-size: 24px;">
    <div>การอนุมัติผลการพัฒนาคุณภาพผู้เรียน</div>
</div>

<table class="" style="width: 100%;font-size: 18px;">
    <tbody>
        <tr>
            <td style="width: 55%;">ลงชื่อ..........................................ครูผู้สอน</td>
            <td>ลงชื่อ..........................................หัวหน้ากลุ่มสาระการเรียนรู้</td>
        </tr>
        <tr>
            <td>ลงชื่อ..........................................หัวหน้างานวัดผล</td>
            <td>ลงชื่อ..........................................หัวหน้าฝ่ายวิชาการ</td>
        </tr>
    </tbody>
</table>


<table class="table" style="width: 100%;font-size: 18px;">
    <tbody>
        <tr>
            <td>
                <div class="b">เรียนเสนอเพื่อโปรดพิจารณา</div>
                <div style="height: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;〇 เห็นควรอนุมัติ
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;〇 เห็นควรนำไปปรับปรุงแก้ไข</div>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ..........................................รองผู้อำนวยการสถานศึกษา
                </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    (นางวรรณา ประสมพงษ์)
                </p>
            </td>
            <td>
                <div class="b">การพิจารณา/สั่งการ</div>
                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;〇 เห็นควรอนุมัติ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;〇
                    ไม่อนุมัติ/ให้นำไปปรับปรุงแก้ไข</div>
                <br>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ..........................................ผู้อำนวยการสถานศึกษา
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    (นายอภิรักษ์ อุ่นใจ)
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ......../........../..........
                </p>
            </td>
        </tr>
    </tbody>
</table>