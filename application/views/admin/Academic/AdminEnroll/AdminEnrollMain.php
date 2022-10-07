<style>
.border-left-primary {
    border-left: .25rem solid #5BC3D5 !important;
}
</style>

<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <div class="col-auto">
            <div class="pagetitle">
                <h1>จัดการข้อมูล<?=$title;?></h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Components</li>
                        <li class="breadcrumb-item active">Alerts</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-auto">
            <a class="btn btn-secondary" href="<?=base_url('Admin/Acade/Registration/Enroll/Add')?>">
                ลงทะเบียนเรียน
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive  p-3">
                <table class="table app-table-hover mb-0 text-left" id="tbErollSubject">
                    <thead>
                        <tr>
                            <th class="cell">ปีการศึกษา</th>
                            <th class="cell">รหัสวิชา</th>
                            <th class="cell">ชื่อวิชา</th>
                            <th class="cell">กลุ่มสาระ</th>
                            <th class="cell">ชั้น</th>
                            <th class="cell">ครูผู้สอน</th>
                            <th class="cell">นักเรียน</th>
                            <th class="cell">คำสั่ง</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!--//table-responsive-->
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ShowSubjectName" id="staticBackdropLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="tb_ShowEnroll">
                    <thead>
                        <tr>
                            <th scope="col">ห้อง</th>
                            <th scope="col">เลขที่</th>
                            <th scope="col">เลขประจำตัว</th>
                            <th scope="col">ชื่อ - นามสกุล</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>

            </div>
        </div>
    </div>
</div>