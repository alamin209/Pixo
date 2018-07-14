<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
    <!-- Right Sidebar -->
<?php include("rignt.php")?>
    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add Patient
                        <small class="text-muted">Welcome to Oreo</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Patient</a></li>
                        <li class="breadcrumb-item active">Add Patient</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Patients/save_patient" enctype="multipart/form-data" >

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                            <li><a href="javascript:void(0);">Edit</a></li>
                                            <li><a href="javascript:void(0);">Delete</a></li>
                                            <li><a href="javascript:void(0);">Report</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control"  name="firstname" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="lastname" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control"    name="phone"  placeholder="Phone No." type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                            <input class="form-control"   type="date" name="date" placeholder="Enter date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="form-control show-tick"   name="gender"  tabindex="-98">
                                                <option value="">- Gender -</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Your Email" name="email" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <!--                            <div class="col-sm-6">-->
                                    <!--                                <div class="form-group">-->
                                    <!--                                    <input class="form-control" placeholder="Website URL"   name="url"  type="text">-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <div class="col-sm-6">
                                        <div class="drag-icon-cph">Upload Photo </div>
                                        <input type="file" name="P_Photo" placeholder="Patient  Image"  class="form-control input-height" />


                                    </div>
                                </div>
                                <!--                        <div class="row clearfix">-
                                <!--                            <div class="col-sm-12">
                                <!--                                <div class="form-group">
                                <!--                                    <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                <!--                                </div>
                                <!--                            </div>-->
                                <!--<!--                           <div class="col-sm-12">
                                <!--<!--                                <button type="submit" class="btn btn-primary btn-round">Submit</button>-->
                                <!--<!--                                <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                <!--<!--                            </div>-->
                                <!--                        </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>

                                <!--                        <ul class="header-dropdown">-->
                                <!--                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>-->
                                <!--                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">-->
                                <!--                                    <li><a href="javascript:void(0);">Edit</a></li>-->
                                <!--                                    <li><a href="javascript:void(0);">Delete</a></li>-->
                                <!--                                    <li><a href="javascript:void(0);">Report</a></li>-->
                                <!--                                </ul>-->
                                <!--                            </li>-->
                                <!--                            <li class="remove">-->
                                <!--                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"    name="categoryid"     tabindex="-98">
                                                <option value="">- Select Deparment  -</option>
                                                <?php  foreach($depertment as $d) { ?>
                                                    <option value="<?php echo $d->dep_id ?>"><?php echo $d->Dep_name ?></option>
                                                <?php  } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6"   >
                                        <div class="form-group"  id="example" >
                                            <select class="form-control show-tick"   name="speciality" tabindex="-98">
                                                <option   id="selection" value="">- Select Doctor     -</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"      tabindex="-98">
                                                <option value="">-  Staff On Duty  -</option>
                                                <?php  foreach($staff as $s) { ?>
                                                    <option value="<?php echo $s->staff_id ?>"><?php echo $s->staff_name ?></option>
                                                <?php  } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"      tabindex="-98">
                                                <option value="">-  Avilkable Room  On Duty  -</option>
                                                <?php  foreach($staff as $s) { ?>
                                                    <option value="<?php echo $s->staff_id ?>"><?php echo $s->staff_name ?></option>
                                                <?php  } ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <!--                        <div class="row clearfix">-->
                                <!--                            <div class="col-sm-6">-->
                                <!--                                <div class="form-group">-->
                                <!--                                    <input class="form-control" placeholder="Doctor Name" type="text">-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="col-sm-6">-->
                                <!--                                <div class="form-group">-->
                                <!--                                    <input class="form-control" placeholder="Staff on Duty" type="text">-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                        </div>-->
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Doctor Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Staff on Duty" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Ward No." type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                            <input class="datetimepicker form-control" placeholder="Please choose date &amp; time..." data-dtp="dtp_8HDPR" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                        <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="categoryid"]').on('change', function() {
                var stateID = $(this).val();
                if(stateID) {
                    $.ajax({
                        url:"<?php echo base_url() ?>Admin/Patients/addPatient/"+stateID,
                        data:{id:stateID},
                        type: "POST",
                        success:function(data) {
                            $('#example').html(data);
                        }
                    });
                }
                $('#example').html(  '<div class="form-group">' + '<div class="form-group" >'+ '<select class="form-control show-tick"  '+ '<option value="">Select Deperment  first</option>'+'<div>');
                // $('#city').html('<option value="">Select state first</option>');

            });
        });
    </script>
<?php include("footer.php")?>