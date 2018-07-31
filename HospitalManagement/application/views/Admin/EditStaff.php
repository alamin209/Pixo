
<?php  foreach  ($getstaffById as $s ) { ?>
<form class="form" method="post"  action="<?php echo base_url() ?>Admin/Staffword/editStaff/<?php echo $s->staff_id ?> " enctype="multipart/form-data" >

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <?php if ($this->session->flashdata('errorMessage')!=null){?>
                    <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                <?php }
                elseif($this->session->flashdata('successMessage')!=null){?>
                    <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                <?php }?>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"   placeholder="Give th first name" name="first_name"  value="<?php echo $s->first_name ?>" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" name="last_name"    placeholder="Give the last name" value="<?php echo $s->last_name ?>"  type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control"     name="phone"    placeholder="Give the Phone Number" value="<?php echo $s->phone ?>" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                <input class="form-control"   type="text"   name="Joiningdate" value="<?php echo  $s->joiningdate ?>"   readonly >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control"   placeholder="give the address"  value="<?php echo $s->address ?>"  name="address" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="number"    placeholder="Give ths age"    value="<?php echo $s->ages ?>"  name="age" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control"     value="<?php echo $s->staff_pass ?>"  name="staff_pass"  id="password" " type="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control"  onkeyup='check();'  value="<?php echo $s->staff_confirmpassword ?>"  name="confirm_password"   id="confirm_password" placeholder="Confirm Password" type="password">
                            </div>
                            <span id='message'></span>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control show-tick"    name="role"  tabindex="-98">
<!--                                    <option value="">- Staff -</option>-->
                                    <option value="nurse" <?php echo ($s->role=='nurse')?'selected="selected"':''; ?> >Nurse</option>
                                    <option value="wordboy" <?php echo ($s->role=='wordboy')?'selected="selected"':''; ?> >Wordboy</option>
                                    <option value="pion" <?php echo ($s->role=='pion')?'selected="selected"':''; ?> >Pion</option>
                                    <option value="cash" <?php echo ($s->role=='cash')?'selected="selected"':''; ?> > Cashier</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row clearfix">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <select class="form-control show-tick"   name="gender"  tabindex="-98">
<!--                                <option value="">- Gender -</option>-->
                                <option value="male" <?php echo ($s->gender=='male')?'selected="selected"':''; ?> >Male</option>
                                <option value="female" <?php echo ($s->gender=='female')?'selected="selected"':''; ?> >Female</option>
                                <option value="other" <?php echo ($s->gender=='other')?'selected="selected"':''; ?> >Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" placeholder="Edecationl qulification"   value="<?php echo $s->eduction ?>" name="eduction" type="text">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter Staff Email"   value="<?php echo $s->staff_email ?>" name="staff_email" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select class="form-control show-tick"   name="staff_status"  tabindex="-98">
<!--                                <option value="">- Staff satus -</option>-->
                                <option value="0" <?php echo ($s->staff_status=='0')?'selected="selected"':''; ?>>In-Active</option>
                                <option value="1"<?php echo ($s->staff_status=='1')?'selected="selected"':''; ?>>Active</option>
                                <!--                                                    <option value="female">Others</option>-->
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Staff  Previous  Image</label>
                        <div class="col-sm-6">
                            <img src="<?php echo $s->Staff_image ?>"  name=""   height="120px" width="120px">
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <!--                                        <div class="drag-icon-cph">Upload Photo </div>-->
                        <span>upload staff photo</span>

                        <input type="file" name="s_Photo" placeholder="Staff  Image"  class="form-control input-height" />

                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12">
        <div class="card">
<!--            <div class="header">-->
<!--                <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>-->
<!--            </div>-->
            <div class="row clearfix">
<!--                <div class="col-sm-6">-->
<!--                    <div class="form-group">-->
<!--                        <input class="form-control" placeholder="Ward No." type="text">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-6">-->
<!--                    <div class="input-group">-->
<!--                                    <span class="input-group-addon">-->
<!--                                        <i class="zmdi zmdi-calendar"></i>-->
<!--                                    </span>-->
<!--                        <input class="datetimepicker form-control" placeholder="Please choose date &amp; time..." data-dtp="dtp_8HDPR" type="text">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-sm-12">
                    <button type="submit"  id="submit" class="btn btn-primary btn-round">Submit</button>
                    <button type="button" class="btn btn-default btn-round btn-simple">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

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
</script>