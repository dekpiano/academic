<main id="main" class="main">


    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center"> <img
                            src="https://skj.ac.th/uploads/personnel/<?=$this->session->userdata('img');?>" alt="Profile" class="rounded-circle">
                        <h2><?=$this->session->userdata('fullname');?></h2>
                        <h3><?=$this->session->userdata('CheckrloesAcademic');?></h3>                      
                    </div>
                </div>
            </div>
         
        </div>
    </section>

</main><!-- End #main -->