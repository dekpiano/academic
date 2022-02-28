<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <?php 
        if($keyroom == '1/1'){
            $lineClass = 'https://line.me/R/meeting/40c7a562881a408aab3e24b6870c38b6';
        }elseif($keyroom == '1/2'){
            $lineClass = 'https://line.me/R/meeting/48a33102950141f98f7c0847caf05526';
        }elseif($keyroom == '1/3'){
            $lineClass = 'https://line.me/R/meeting/2644ae40a0de4198a6035931d9ce94ef';
        }elseif($keyroom == '1/4'){
            $lineClass = 'https://line.me/R/meeting/6cc15501009d4f6ab2e1ef566426400b';
        }elseif($keyroom == '2/1'){
            $lineClass = 'https://line.me/R/meeting/eb5cf468255340d1a343ce545d26121a';
        }elseif($keyroom == '2/2'){
            $lineClass = 'https://line.me/R/meeting/9aab91c6f3114edd83868ce16ea7315b';
        }elseif($keyroom == '2/3'){
            $lineClass = 'https://line.me/R/meeting/2fa8e749659d4beabba16d22cce4787e';
        }elseif($keyroom == '2/4'){
            $lineClass = 'https://line.me/R/meeting/cef7f431fa2d49f7944bc2d1c33c1281';
        }elseif($keyroom == '3/1'){
            $lineClass = 'https://line.me/R/meeting/236923ef11e04da78aeb64535bb54841';
        }elseif($keyroom == '3/2'){
            $lineClass = 'https://line.me/R/meeting/338cb8d861fc4607a8d78eb2635fa50e';
        }elseif($keyroom == '3/3'){
            $lineClass = 'https://line.me/R/meeting/aa145fc0e08747c7aa085b7bc03902b7';
        }elseif($keyroom == '3/4'){
            $lineClass = 'https://line.me/R/meeting/93e8aea31a3f4e0ca9328178376b2406';
        }elseif($keyroom == '4/1'){
            $lineClass = 'https://line.me/R/meeting/4092cd73726440e3afb68d8364fe4a09';
        }elseif($keyroom == '4/2'){
            $lineClass = 'https://line.me/R/meeting/52e3630b7c274076b76a1ffb5589ae02';
        }elseif($keyroom == '4/3'){
            $lineClass = 'https://line.me/R/meeting/c83a2af09a4f4b65ac3e1ef10155e075';
        }elseif($keyroom == '4/4'){
            $lineClass = 'https://line.me/R/meeting/be83db4a537641e18adabeaade007e19';
        }elseif($keyroom == '5/1'){
            $lineClass = 'https://line.me/R/meeting/a8665100fc4f45e08b342361e129dfb1';
        }elseif($keyroom == '5/2'){
            $lineClass = 'https://line.me/R/meeting/bf5832214560483b96bfea0e8577e1a1';
        }elseif($keyroom == '5/3'){
            $lineClass = 'https://line.me/R/meeting/ed616656d7764129bd2df835079f6c45';
        }elseif($keyroom == '5/4'){
            $lineClass = 'https://line.me/R/meeting/e2a4a80f310246a287138d3a8a932352';
        }elseif($keyroom == '6/1'){
            $lineClass = 'https://line.me/R/meeting/aed679ff5d9b4c6f908fa072e0b80cc3';
        }elseif($keyroom == '6/2'){
            $lineClass = 'https://line.me/R/meeting/60ade7ccea0a46c7a68468178d8a7aef';
        }elseif($keyroom == '6/3'){
            $lineClass = 'https://line.me/R/meeting/1fe392459732466f83fd061304117649';
        }elseif($keyroom == '6/4'){
            $lineClass = 'https://line.me/R/meeting/7855a380fe564875b33c0057c36c6f71';
        }
        ?>

            <h3 class="text-center mt-3">ห้องเรียนออนไลน์</h3>

            <form class="row g-3 justify-content-center" action="<?=base_url('LearningOnline')?>" method="get">
                <div class="col-4">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="s">
                        <option value="">เลือกห้องเรียน</option>
                        <?php $ListRoom = $this->classroom->ListRoom();
                foreach ($ListRoom as $key => $v_ListRoom):
            ?>
                        <option <?=$keyroom==$v_ListRoom?'selected':''?> value="<?=$v_ListRoom;?>">ม.<?=$v_ListRoom;?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn-primary mb-3 btn-lg text-white">ค้นหาห้อง</button>
                </div>
            </form>

            <?php if(!empty($room)):?>
            <!-- รายวิชาพื้นฐาน -->
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    ลิงค์ห้องเรียนออนไลน์ รายวิชาพิ์นฐาน ของนักเรียน ม.<?=$keyroom;?> **(รายวิชาพื้นฐาน
                    จะใช้ลิ้งค์ห้องเรียนเดียวกันทั้งหมด)**
                </div>
                <div class="card-body">
                    <p>ลิ้งก์เข้าเรียน : <a href="<?=$lineClass;?>" target="_blank"
                            rel="noopener noreferrer"><?=$lineClass;?></a> </p>
                    <p><b>หรือ</b> scan qr-code:</p>
                    <p>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=<?=$lineClass;?>" alt=""
                            srcset="">

                    </p>

                    <div class="main-section categories-view1-full">
                        <div class="card ">
                          
                            <div class="card-body">

                                <table class="table table-hover display TB-roomonline" id="TB-roomonline" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="">ครูผู้สอน</th>
                                            <th scope="col">รหัสวิชา</th>
                                            <th scope="col">ชื่อวิชา</th>
                                            <th scope="col">ระดับชั้น</th>
                                            <th scope="col">ห้องส่งงาน</th>
                                            <th scope="col">ห้องเรียนออนไลน์</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($room as $key => $v_room) : ?>
                                        <?php $sub_cours = $v_room->roomon_coursecode;
                                            //echo $sub_cours[5];
                                            if($sub_cours[5] == 1):
                                            
                                            ?>
                                        <tr>
                                            <td>

                                                <img style="width:64px;"
                                                    src="https://skj.ac.th/uploads/personnel/<?=$v_room->pers_img?>"
                                                    alt=" <?=$v_room->pers_prefix.$v_room->pers_firstname.' '.$v_room->pers_lastname?>">
                                            </td>
                                            <td>
                                                <?=$v_room->pers_prefix.$v_room->pers_firstname.' '.$v_room->pers_lastname?><br>
                                                <?=$v_room->roomon_note?>
                                            </td>
                                            <th><?=$v_room->roomon_coursecode?></th>
                                            <th><?=$v_room->roomon_coursename?></th>

                                            <td><?=$v_room->roomon_classlevel?></td>
                                            <td>
                                                <?php $sub = explode("//",$v_room->roomon_linkroom);
                            $subb = explode('.',@$sub[1]);
                            ?>
                                                <span class="badge rounded-pill bg-success "> <a target="_blank"
                                                        href="<?=$v_room->roomon_linkroom;?>"><span
                                                            class="text-white"><?=$subb[0]?></span></a></span>
                                            </td>
                                            <td>
                                        <?php $sub = explode("//",$v_room->roomon_liveroom);
                            $subb = explode('.',@$sub[1]);
                            ?>
                                        <span class="badge rounded-pill bg-success "> <a target="_blank"
                                                href="<?=$v_room->roomon_liveroom;?>"><span
                                                    class="text-white"><?=$subb[0]?></span></a></span>
                                    </td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- รายวิชาเพิ่มเติม -->
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    ลิงค์ห้องเรียนออนไลน์ รายวิชาเพิ่มเติม ของนักเรียน ม.<?=$keyroom;?> **(รายวิชาเพิ่มเติม
                    จะใช้ลิ้งค์ห้องเรียนของครูผู้สอน)**
                </div>
                <div class="card-body">



                    <table class="table table-hover display TB-roomonline" id="TB-roomonline" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="">ครูผู้สอน</th>
                                <th scope="col">รหัสวิชา</th>
                                <th scope="col">ชื่อวิชา</th>
                                <th scope="col">ระดับชั้น</th>
                                <th scope="col">ห้องส่งงาน</th>
                                <th scope="col">ห้องเรียนออนไลน์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($room as $key => $v_room) : ?>
                            <?php $sub_cours = $v_room->roomon_coursecode;
                                            //echo $sub_cours[5];
                                            if($sub_cours[5] == 2):
                                            
                                            ?>
                            <tr>
                                <td>

                                    <img style="width:64px;"
                                        src="https://skj.ac.th/uploads/personnel/<?=$v_room->pers_img?>"
                                        alt=" <?=$v_room->pers_prefix.$v_room->pers_firstname.' '.$v_room->pers_lastname?>">
                                </td>
                                <td>
                                    <?=$v_room->pers_prefix.$v_room->pers_firstname.' '.$v_room->pers_lastname?><br>
                                    <?=$v_room->roomon_note?>
                                </td>
                                <th><?=$v_room->roomon_coursecode?></th>
                                <th><?=$v_room->roomon_coursename?></th>

                                <td><?=$v_room->roomon_classlevel?></td>
                                <td>
                                    <?php $sub = explode("//",$v_room->roomon_linkroom);
                            $subb = explode('.',@$sub[1]);
                            ?>
                                    <span class="badge rounded-pill bg-success "> <a target="_blank"
                                            href="<?=$v_room->roomon_linkroom;?>"><span
                                                class="text-white"><?=$subb[0]?></span></a></span>
                                </td>
                                <td>
                                        <?php $sub = explode("//",$v_room->roomon_liveroom);
                            $subb = explode('.',@$sub[1]);
                            ?>
                                        <span class="badge rounded-pill bg-success "> <a target="_blank"
                                                href="<?=$v_room->roomon_liveroom;?>"><span
                                                    class="text-white"><?=$subb[0]?></span></a></span>
                                    </td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>



            <?php endif; ?>
            <p class="text-center">
                <small>หมายเหตุ : ระบบได้อัพเดพเป็นเวอร์ชั่นใหม่
                    เพื่อให้นักเรียนสามารถเพิ่มหรือหาห้องเรียนของนักเรียนได้โดยตรง </small>
            </p>
        </div>
    </div>
</div>