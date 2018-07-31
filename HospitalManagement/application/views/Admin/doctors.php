<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
    <!-- Right Sidebar -->
<?php include("rignt.php")?>
    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <?php if ($this->session->flashdata('errorMessage')!=null){?>
                <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
            <?php }
            elseif($this->session->flashdata('successMessage')!=null){?>
                <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
            <?php }?>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>All Doctors
                        <small>Welcome to Pixo</small>
                    </h2>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                    <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Doctors</a></li>
                        <li class="breadcrumb-item active">All Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs padding-0">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Permanent</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Consultant</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content m-t-10">
                        <div class="tab-pane active" id="Permanent">
                            <div class="row clearfix">

                                <?php foreach($doctors  as $d) { ?>
<!--                                   --><?php // $color = array( "" ,"blue", "khaki","parpl","pink","seagreen");
//                                   $clength = count($color);
//                                     for($x = 1; $x < $clength; $x++) {  ?>
<!--                                    --><?php //if ($d->doc_depid==$x ) {  ?>
                                   <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-blue member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="<?php echo $d->doc_image ?>" class="img-fluid" alt="profile-image-Dameeeeee">
                                            </div>
                                            <div class="detail">
                                                <h4 class="m-b-0"><?php echo $d->first_name ?> <?php echo  $d->last_name ?></h4>
                                                <p class="text-muted"><?php echo $d->Designation ?></p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="<?php echo $d->facebook ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="<?php echo $d->tweet ?>"><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="<?php echo $d->instragram ?>"><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted"><?php echo $d->City?> <?php echo $d->address ?></p>
                                                <a href="<?php echo base_url() ?>Admin/Doctors/doctorsProfile/<?php echo $d->doc_id ?>" class="btn btn-default btn-round btn-simple">View Profile</a>
                                                <a href="<?php echo base_url() ?>Admin/Doctors/editDoctor/<?php echo $d->doc_id ?>" class="btn btn-default btn-round btn-simple">Edit Profile</a>
                                                <a href="<?php echo base_url() ?>Admin/Doctors/doctorsProfile/<?php echo $d->doc_id ?>" class="btn btn-default btn-round btn-simple">Remove Profile</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                   <?php  }  ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="Consultant">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-khaki member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/doctors/member1.png" class="img-fluid" alt="profile-image">
                                            </div>
                                            <div class="detail">
                                                <h4 class="m-b-0">Dr. Amelia</h4>
                                                <p class="text-muted">Gynecologist</p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                                <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-blue member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/doctors/member1.png" class="img-fluid" alt="profile-image">
                                            </div>
                                            <div class="detail">
                                                <h4 class="m-b-0">Dr. Jack </h4>
                                                <p class="text-muted">Dentist</p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                                <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-pink member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/doctors/member1.png" class="img-fluid" alt="profile-image">
                                            </div>
                                            <div class="detail">
                                                <h4 class="m-b-0">Dr. Joseph </h4>
                                                <p class="text-muted">Audiology</p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                                <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card xl-seagreen member-card doctor">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="images/doctors/member1.png" class="img-fluid" alt="profile-image">
                                            </div>
                                            <div class="detail">
                                                <h4 class="m-b-0">Dr. Charlie </h4>
                                                <p class="text-muted">Physical Therapy</p>
                                                <ul class="social-links list-inline m-t-20">
                                                    <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                                    <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                                    <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                                </ul>
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                                <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("footer.php")?>
<?php //include("Js.php")?>

