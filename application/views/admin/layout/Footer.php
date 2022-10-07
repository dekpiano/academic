<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ระบบงานสารสนเทศโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <script src="<?=base_url();?>assets/plugins/jquery-3.4.1.min.js?v=2"></script>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url()?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>assets/js/main.js"></script>


 <!-- Modal -->
 <div class="modal fade" id="ShowStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">รายชื่อนักเรียน</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <table class="table table-hover" id="TB_showstudent">
                              <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">เลขประจำตัว</th>
                                      <th scope="col">ชื่อ - นามสกุล</th>
                                  </tr>
                              </thead>
                              <tbody>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>



<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js
"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script src="https://cdn.rawgit.com/crlcu/multiselect/v2.5.1/dist/js/multiselect.min.js"></script>

<script src="<?=base_url();?>assets/plugins/bootstrap-datepicker.js?v=2"></script>

<?php if($this->session->flashdata('msg') == 'YES'):?>
<script>
Swal.fire("แจ้งเตือน", "<?=$this->session->flashdata('messge');?>", "<?=$this->session->flashdata('status');?>");
</script>
<?php endif; $this->session->mark_as_temp('msg',20); ?>

<script> 
 $.datetimepicker.setLocale('th');
    $("#pers_britday").datetimepicker({
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
        lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
        onSelectDate:function(dp,$input){
            var yearT=new Date(dp).getFullYear()-0;  
            var yearTH=yearT+543;
            var fulldate=$input.val();
            var fulldateTH=fulldate.replace(yearT,yearTH);
            $input.val(fulldateTH);
        },
    });
     // กรณีใช้กับ input ต้องกำหนดส่วนนี้ด้วยเสมอ เพื่อปรับปีให้เป็น ค.ศ. ก่อนแสดงปฏิทิน
     $("#pers_britday").on("mouseenter mouseleave",function(e){
        var dateValue=$(this).val();
        if(dateValue!=""){
                var arr_date=dateValue.split("-"); // ถ้าใช้ตัวแบ่งรูปแบบอื่น ให้เปลี่ยนเป็นตามรูปแบบนั้น
                // ในที่นี้อยู่ในรูปแบบ 00-00-0000 เป็น d-m-Y  แบ่งด่วย - ดังนั้น ตัวแปรที่เป็นปี จะอยู่ใน array
                //  ตัวที่สอง arr_date[2] โดยเริ่มนับจาก 0 
                if(e.type=="mouseenter"){
                    var yearT=arr_date[2]-543;
                }       
                if(e.type=="mouseleave"){
                    var yearT=parseInt(arr_date[2])+543;
                }   
                dateValue=dateValue.replace(arr_date[2],yearT);
                $(this).val(dateValue);                                                 
        }       
    });
 

$('#multiselect').multiselect();

new SlimSelect({
    select: '#teacher'
})
new SlimSelect({
    select: '#classroom'
})

$('#example').DataTable({
    "responsive": true,
    "autoWidth": true,
    "ordering": false,
});

</script>

<script src="<?=base_url();?>assets/js/student/ExtraSubject_js.js?v=1"></script>
<script src="<?=base_url();?>assets/js/admin/Academic/AcadeStudent.js?v=4"></script>
<script src="<?=base_url();?>assets/js/admin/Academic/Academic.js?v=48"></script>

<?php if($this->uri->segment(3) ==="Registration"): ?>
<<<<<<< HEAD
    <script src="<?=base_url();?>assets/js/admin/Academic/AcadeRegisterSubject.js?v=8"></script>    
    <script src="<?=base_url();?>assets/js/admin/Academic/AcadeEnroll.js?v=12"></script>
=======
    <script src="<?=base_url();?>assets/js/admin/Academic/AcadeRegisterSubject.js?v=5"></script>    
    <script src="<?=base_url();?>assets/js/admin/Academic/AcadeEnroll.js?v=14"></script>
>>>>>>> ef1174cc75ec9f0ff7e1216e13d6e1e1d79d6904
<?php endif; ?>
<?php if($this->uri->segment(3) ==="Evaluate"): ?>
<script src="<?=base_url();?>assets/js/admin/Academic/AcadeSaveScore.js?v=2"></script>
<script src="<?=base_url();?>assets/js/admin/Academic/AcadeReport.js?v=10"></script>
<?php endif; ?>
<?php if($this->uri->segment(3) ==="Personnel"): ?>
<script src="<?=base_url();?>assets/js/admin/General/GeneralPersonnel.js?v=11"></script>
<?php endif; ?>

<?php if($this->uri->segment(2) ==="Affairs"): ?>
<script src="<?=base_url();?>assets/js/admin/AffairsHomeRoom.js?v=8"></script>
<?php endif; ?>

<script>
// window.addEventListener("load", function() {
//     const loader = document.querySelector(".loader");
//     loader.className += " hidden"; // class "loader hidden"
// });

$(".clickLoder").click(function(){
  $('.loader').show();
});

$(document).on('click', '.clickLoad-spin', function() {
    // disable button
    $(this).prop("disabled", true);
    // add spinner to button
    $(this).html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> loading...'
    );
});


</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()
</script>

</body>

</html>