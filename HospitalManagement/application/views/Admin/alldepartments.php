<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
<!-- Right Sidebar -->
<?php include("rignt.php")?>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>All Departments
                <small>Welcome to Pixo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Departments</a></li>
                    <li class="breadcrumb-item active">Alle</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <?php foreach ($depertment as $d ) {  ?>

                <div class="col-lg-4 col-md-6 col-sm-12">

                <div class="card project_widget">

                    <div class="pw_img">
                        <img class="img-fluid" src="<?php echo $d->dep_image ?>" alt="About the image">
                    </div>
                    <div class="pw_content">
                        <div class="pw_header">
                            <h6><?php echo $d->dep_name ?></h6>
                    <ul class="list-unstyled team-info margin-0 p-t-15">
                                <li class="m-r-15"><small>Team</small></li>
                        <?php foreach ($doctors  as $doc ) { ?>
                            <?php  if($d->dep_id ==$doc->doc_depid) { ?>
                                <li><img src="<?php echo $doc->doc_image ?>" alt="Avatar"></li>
                    <?php }  } ?>

                    <!--                                <li><img src="assets/images/xs/avatar10.jpg" alt="Avatar"></li>-->
                                <li><a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a></li>
                            </ul>
                        </div>
                        <div class="pw_meta">
                            <a href="<?php echo base_url() ?>Admin/Depertment/getDepertmentDetailsByid/<?php echo $d->dep_id ?>"><button class="btn btn-primary btn-simple btn-round">More</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php    }   ?>




<!--            <div class="col-lg-4 col-md-6 col-sm-12">-->
<!--                <div class="card project_widget">-->
<!--                    <div class="pw_img">-->
<!--                        <img class="img-fluid" src="assets/images/image1.jpg" alt="About the image">-->
<!--                    </div>-->
<!--                    <div class="pw_content">-->
<!--                        <div class="pw_header">-->
<!--                            <h6>Laboratory</h6>-->
<!--                            <ul class="list-unstyled team-info margin-0 p-t-15">-->
<!--                                <li class="m-r-15"><small>Team</small></li>-->
<!--                                <li><img src="assets/images/xs/avatar5.jpg" alt="Avatar"></li>-->
<!--                                <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>-->
<!--                                <li><a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="pw_meta">-->
<!--                            <p>Who chooses to enjoy a pleasure that has consquences, or one who avoids a pain.[...]</p>-->
<!--                            <button class="btn btn-primary btn-simple btn-round">More</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6 col-sm-12">-->
<!--                <div class="card project_widget">-->
<!--                    <div class="pw_img">-->
<!--                        <img class="img-fluid" src="assets/images/image8.jpg" alt="About the image">-->
<!--                    </div>-->
<!--                    <div class="pw_content">-->
<!--                        <div class="pw_header">-->
<!--                            <h6>Gastrology</h6>-->
<!--                            <ul class="list-unstyled team-info margin-0 p-t-15">-->
<!--                                <li class="m-r-15"><small>Team</small></li>-->
<!--                                <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>-->
<!--                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>-->
<!--                                <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>                                -->
<!--                                <li><img src="assets/images/xs/avatar10.jpg" alt="Avatar"></li>-->
<!--                                <li><a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="pw_meta">-->
<!--                            <p>Take a trivial example, which of ever undertake laborous physically exercise some[...]</p>-->
<!--                            <button class="btn btn-primary btn-simple btn-round">More</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>
<?php include("footer.php")?>