<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$title?> | ระบบงานสารสนเทศโรงเรียน</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="ระบบงานสารสนเทศโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์">
    <meta name="author" content="Dekpiano">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Favicons -->
    <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>assets/css/style.css?v=1" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="<?=base_url();?>assets/css/datepicker.css?v=1">

    <style>
    .placeholder {
        background-color: transparent;
        cursor: pointer;
        opacity: 1;
    }

    .ss-main {
        color: #000;
    }

    .btn-group-xs>.btn,
    .btn-xs {
        line-height: 1.5;
    }

    .toggle.ios,
    .toggle-on.ios,
    .toggle-off.ios {
        border-radius: 20rem;
    }

    .toggle.ios .toggle-handle {
        border-radius: 20rem;
    }

    .loader {
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader>img {
        width: 100px;
    }

    .loader.hidden {
        animation: fadeOut 0.1s;
        animation-fill-mode: forwards;
    }

    @keyframes fadeOut {
        100% {
            opacity: 0;
            visibility: hidden;
        }
    }
    </style>
</head>

<div class="loader" style="display:none;">
    <img src="https://boychawin.com/irms/images/VAyR.gif" alt="Loading..." />
    อาจใช้เวลาในการโหลดข้อมูล 1 - 2 นาที กรุณรอ...
</div>

<body style="font-family: 'Sarabun', sans-serif;">


    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?=base_url('Admin/Home');?>" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">ระบบงานสารสนเทศ</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="https://skj.ac.th/uploads/personnel/<?=$this->session->userdata('img');?>"
                            alt="Profile" class="rounded-circle">
                        <span
                            class="d-none d-md-block dropdown-toggle ps-2"><?=$this->session->userdata('fullname');?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?=$this->session->userdata('fullname');?></h6>
                            <span><?=$this->session->userdata('CheckrloesAcademic');?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>โปรไฟล์</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?=base_url('LogoutTeacher');?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>ออกจากระบบ</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link <?=$this->uri->segment('2')=="Home" ? "" :"collapsed"?>"
                    href="<?=base_url('Admin/Home');?>">
                    <i class="bi bi-grid"></i>
                    <span>หน้าแรก</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">งานวิชาการ</li>

            <li class="nav-item">
                <a class="nav-link  <?=$this->uri->segment('3')=="Registration" ? "" :"collapsed"?>"
                    data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>งานทะเบียน</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav"
                    class="nav-content collapse <?=$this->uri->segment('3')=="Registration" ? "show" :""?>"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="<?=$this->uri->segment('4')=="Enroll" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/Enroll');?>"><i class="bi bi-circle"></i>
                            ลงทะเบียนเรียน</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="RegisterSubject" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/RegisterSubject');?>"><i
                                class="bi bi-circle"></i> จัดการวิชาเรียน</a>
                    </li>
                    <li>
                        <a <?=$this->uri->segment('4')=="ExamSchedule" ? "active" :""?>
                            href="<?=base_url('Admin/Acade/Registration/ExamSchedule');?>"><i class="bi bi-circle"></i>
                            จัดการตารางสอบ</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="ClassRoom" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/ClassRoom');?>"><i class="bi bi-circle"></i>
                            จัดการห้องเรียน /
                            ที่ปรึกษา</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="Students" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/Students');?>"><i class="bi bi-circle"></i>
                            จัดการนักเรียน</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="ExamSchedule" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/ExamSchedule');?>"><i class="bi bi-circle"></i>
                            จัดการตารางสอบ</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="ClassSchedule" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/ClassSchedule');?>"><i class="bi bi-circle"></i>
                            จัดการตารางเรียน</a>
                    </li>
                    <li>
                        <a class=" <?=$this->uri->segment('4')=="ExtraSubject" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/RoomOnline');?>"><i class="bi bi-circle"></i>
                            จัดการห้องเรียนออนไลน์</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="ExtraSubject" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/AdminRoles');?>"><i class="bi bi-circle"></i>
                            จัดการบทบาทในวิชาการ</a>
                    </li>
                    <li>
                        <a class="<?=$this->uri->segment('4')=="AcademicResult" ? "active" :""?>"
                            href="<?=base_url('Admin/Acade/Registration/AcademicResult');?>"><i
                                class="bi bi-circle"></i> จัดการผลการเรียน</a>
                    </li>

                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-heading">งานบริหารทั่วไป</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Remix Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Boxicons</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

        </ul>

    </aside><!-- End Sidebar-->