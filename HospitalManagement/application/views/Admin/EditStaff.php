

<?php  foreach  ($getstaffById as $s ) { ?>

    <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Staffword/editStaff/<?php echo $s->admin_id ?>" enctype="multipart/form-data" >
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone"  value="<?php echo $s->first_name  ?>" name="phone" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone"  value="<?php echo $s->last_name  ?>" name="phone" type="text" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <!--                                    <select class="form-control" id="sel1">-->
                                        <select class="form-control show-tick"     name="gender"  tabindex="-98" required>

                                            <option value="male" <?php echo ($s->gender=='male')?'selected="selected"':''; ?> > Male </option>
                                            <option value="female" <?php echo ($s->gender=='female')?'selected="selected"':''; ?>>Female </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">

                                <div class="col-sm-6">
                                    <span>Data of Birth</span>
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="Date of Birth"  value="<?php echo $s->date_of_Birth ?>"  required  name="birth_date" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <span>Joining date</span>
                                    <div class="form-group">
                                        <input class="form-control" type="date" placeholder="Date of Birth"  value="<?php echo $s->join_date ?> " required name="Join_date" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone"  value="<?php echo $s->phone  ?>" name="phone" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter Your Email" name="email" value="<?php echo  $s->admin_email ?>" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control show-tick"   name="status"  tabindex="-98" required>

                                            <option value="1" <?php echo ($s->user_activation_status=='1')?'selected="selected"':''; ?> > Male </option>
                                            <option value="0" <?php echo ($s->user_activation_status=='0')?'selected="selected"':''; ?>>Female </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="drag-icon-cph">Upload Photo </div>
                                    <input type="file" name="s_Photo" placeholder="Staff Image"   required class="form-control input-height" />

                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control"  name="address"   value="<?php echo $s->address ?>"  required  placeholder="Give the address" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control"  name="city"  placeholder="city" value="<?php echo $s->city  ?>"  type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Staff Degination "    value="<?php echo $s->designetion ?>"  name="designetion" type="text" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Staff Education  Qualification"  value="<?php echo $s->staff_eduction ?>" name="staff_eduction" type="text" required>
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
                                                        <input class="form-control"  name="admin_name"   value="<?php echo $s->admin_name ?>" placeholder="User Name" type="text">
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
    </script></form>

<?php } ?>

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
