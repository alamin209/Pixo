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

            <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Patients/save_patient" onsubmit="return promotypefync() " enctype="multipart/form-data" >

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if ($this->session->flashdata('errorMessage')!=null){?>
                            <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                        <?php }
                        elseif($this->session->flashdata('successMessage')!=null){?>
                            <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                        <?php }?>
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
                                            <input class="form-control"  id="firsname"   name="firstname" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control"   id="lastname" name="lastname" placeholder="Last Name" type="text">
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
                                            <input class="form-control"   type="date" name="admit_date" placeholder="Enter  Admit  date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age"   name="age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Patient address" name="address" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Your Email" name="email" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="drag-icon-cph">Upload Photo </div>
                                        <input type="file" name="p_Photo" placeholder="Patient  Image"  class="form-control input-height" />
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick"   name="gender"  tabindex="-98">
                                            <option value="">- Gender -</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"    name="depertment"     tabindex="-98">
                                                <option value="">- Select Deparment  -</option>
                                                <?php  foreach($depertment as $d) { ?>
                                                    <option value="<?php echo $d->dep_id ?>"><?php echo $d->Dep_name ?></option>
                                                <?php  } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-6"   >
                                        <div class="form-group"  id="example" >
                                            <select class="form-control show-tick"   name="doctor" tabindex="-98">
                                                <option    value="">- Select Doctor     -</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
<!--                                <div class="row clearfix">-->
<!--                                    <div class="col-sm-6">-->
<!--                                        <div class="form-group">-->
<!--                                            <select class="form-control show-tick"    name="staff"    tabindex="-98">-->
<!--                                                <option value="">-  Staff On Duty  -</option>-->
<!--                                                --><?php // foreach($staff as $s) { ?>
<!--                                                    <option value="--><?php //echo $s->staff_id ?><!--">--><?php //echo $s->first_name ?><!-- --><?php //echo $s->last_name ?><!--</option>-->
<!--                                                --><?php // } ?>
<!--                                            </select>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--<!--                                    <div class="col-sm-6">-->
<!--<!--                                        <div class="form-group">-->
<!--<!--                                            <select class="form-control show-tick"       name="word"   onchange="registration1" id="promotype"    tabindex="-98">-->
<!--<!--                                                <option value="">-  Avilable Room  No      -</option>--
<!--<!--                                                --><?php //// foreach($word as $s) { ?>
<!--<!--                                                    <option value="--><?php ////echo $s->word_id ?><!--<!--"><?php ////echo $s->word_name ?><!--<!--</option>-->
<!--<!--                                                --><?php //// } ?>
<!--<!--                                            </select>-->
<!--
<!--<!--                                        </div>
<!--<!--                                    </div>
<!--                                </div>-->
                                <div class="row clearfix">
<!--                                    <div class="col-sm-6">
<!--                                        <div class="form-group">
<!--                                            <input class="form-control"    name="password"  id="password" placeholder="Password" type="password">
<!--                                        </div>
<!--                                    </di>
<!--                                    <div class="col-sm-6">-->
<!--                                        <div class="form-group">
<!--                                            <input class="form-control"  onkeyup='check();'  name="confirm_password"   id="confirm_password" placeholder="Confirm Password" type="password">
<!--                                        </div>-->
<!--                                        <span id='message'></span>
<!--                                    </div>-->
<!--                                </div>-->


                            </div>
                        </div>

                        <div class="row clearfix">

                            <div class="col-sm-12">
                                <button type="submit"  id="submit" class="btn btn-primary btn-round">Submit</button>
                                <button type="button"  class="btn btn-default btn-round btn-simple"
                                        onclick="

                                                if (window.confirm('Ary you sure to  Cancel?'))
                                                location.href='<?php echo base_url();?>Admin/Patients/addPations'">Cancel</button>
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
            $('select[name="depertment"]').on('change', function() {
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
        //$(document).ready(function() {
        //    $('select[name="depertment"]').on('change', function() {
        //        var stateID = $(this).val();
        //        if(stateID) {
        //            $.ajax({
        //                url:"<?php //echo base_url() ?>//Admin/Patients/addPatient/"+stateID,
        //                data:{id:stateID},
        //                type: "POST",
        //                success:function(data) {
        //                    $('#example').html(data);
        //                }
        //            });
        //        }
        //        $('#example').html(  '<div class="form-group">' + '<div class="form-group" >'+ '<select class="form-control show-tick"  '+ '<option value="">Select Deperment  first</option>'+'<div>');
        //        // $('#city').html('<option value="">Select state first</option>');
        //
        //    });
        //});



    </script>

<script>
//    function  registration1()
//    {
//        var stateID = document.getElementById('promotype').value;
//
//        $.ajax({
//            type:'POST',
//            url:"http://localhost/HospitalManagement/Admin/Patients/save_patients/"+stateID,
//            data:{id:stateID},
//            cache: false,
//            success:function(data) {
//
//
//                alert(data);
//
//                // $('#example').html(data);
//
//            }
//        });
//    }
//
//
//
//</script>
<?php include("footer.php")?>