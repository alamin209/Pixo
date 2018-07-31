
            <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Staffword/save_staff" enctype="multipart/form-data" >

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control"  name="first_name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="last_name" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control"    name="phone"  placeholder="Phone No." type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                            <input class="form-control"   type="date" name="Joiningdate" placeholder="Enter Joining  date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Address" name="address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">

                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="number" placeholder="Give age " name="age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control"    name="staff_pass"  id="password" placeholder="Password" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control"  onkeyup='check();'  name="confirm_password"   id="confirm_password" placeholder="Confirm Password" type="password">
                                        </div>
                                        <span id='message'></span>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"   name="role"  tabindex="-98">
                                                <option value="">- Staff -</option>
                                                <option value="nurse">Nurse</option>
                                                <option value="wordboy">wordboy</option>
                                                <option value="pion">pion</option>
                                                <option value="cash"> Cashier</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>

                            </div>
                            <div class="row clearfix">

                               <div class="col-sm-6">
                                            <div class="form-group">
                                            <select class="form-control show-tick"   name="gender"  tabindex="-98">
                                                <option value="">- Gender -</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="female">Others</option>
                                            </select>
                                        </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Edecationl qulification" name="eduction" type="text">
                                </div>
                                </div>
                            </div>
                                    <div class="row clearfix">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Staff Email" name="staff_email" type="text">
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control show-tick"   name="staff_status"  tabindex="-98">
                                                    <option value="">- Staff satus -</option>
                                                    <option value="0">In-Active</option>
                                                    <option value="">Active</option>
<!--                                                    <option value="female">Others</option>-->
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-sm-6">

<!--                                        <div class="drag-icon-cph">Upload Photo </div>-->
                                        <span>upload staff photo</span>
                                        <input type="file" name="s_Photo" placeholder="Patient  Image"  class="form-control input-height" />

                                    </div>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="card">
<!--                            <div class="header">-->
<!--                                <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>-->
<!--                            </div>-->
<!--                                <div class="row clearfix">-->
<!--                                    <div class="col-sm-6">-->
<!--                                        <div class="form-group">-->
<!--                                            <input class="form-control" placeholder="Ward No." type="text">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-6">-->
<!--                                        <div class="input-group">-->
<!--                                    <span class="input-group-addon">-->
<!--                                        <i class="zmdi zmdi-calendar"></i>-->
<!--                                    </span>-->
<!--                                            <input class="datetimepicker form-control" placeholder="Please choose date &amp; time..." data-dtp="dtp_8HDPR" type="text">-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="col-sm-12">
                                        <button type="submit"  id="submit" class="btn btn-primary btn-round">Submit</button>
                                        <button type="button" class="btn btn-default btn-round btn-simple">Cancel</button>
                                    </div>
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
    </script>