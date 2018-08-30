

    <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Staffword/save_staff" enctype="multipart/form-data" >
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" name="firstname" type="text" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" name="lastname" type="text" >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <!--                                    <select class="form-control" id="sel1">-->
                                        <select class="form-control show-tick"   name="gender"  tabindex="-98" >
                                            <option value="">- Gender -</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <!--                                        </select>-->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control show-tick"   name="adminpanel"  tabindex="-98" >
                                        <option value=""> Adminpanel member   -</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        <!--                                        </select>-->
                                    </select>
                                </div>
                                </div>

                            </div>
                            <div class="row clearfix">

                                <div class="col-sm-6">
                                    <span>Data of Birth</span>
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="Date of Birth"   name="birth_date" type="text">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                    <span>Joining date</span>
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="Date of Birth"  name="Join_date" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" name="phone" type="text" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter Your Email" name="email" type="text" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control show-tick"   name="status"  tabindex="-98" required>
                                            <option value="">-Staff  Activation Status-</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="drag-icon-cph">Upload Photo </div>
                                    <input type="file" name="s_Photo" placeholder="Staff Image"  class="form-control input-height" />

                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control"  name="address"     placeholder="Give the address " type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control"  name="city"  placeholder="city" type="text" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Staff Degination " name="designetion" type="text" >
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Staff Education  Qualification " name="staff_eduction" type="text" >
                                    </div>
                                </div>

                                <input class="form-control"   name="employee" value="employee" type="hidden">


                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2><strong>Staff</strong> Account Information <small>Description text here...</small> </h2>
                                            <ul class="header-dropdown">
                                                <li class="remove">
                                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input class="form-control"  name="admin_name"  placeholder="User Name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control"    name="password"  id="password" placeholder="Password" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control"  onkeyup='check();'  name="confirm_password"   id="confirm_password" placeholder="Confirm Password" type="password">
                                                    </div>
                                                    <span id='message'></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-round" id="submit" >Submit</button>
                                            <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </form>


    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value)

            {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
                document.getElementById('submit').disabled = true;
            }
        }
    </script>