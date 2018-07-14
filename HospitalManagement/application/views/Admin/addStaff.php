
            <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Patients/save_patient" enctype="multipart/form-data" >

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

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
                                            <input class="form-control"   type="date" name="date" placeholder="Enter Joining  date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Age" type="text">
                                        </div>
                                    </div><div class="col-sm-3">
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
                                                <option value="female">Others</option>
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

                                        <div class="drag-icon-cph">Upload Photo </div>
                                        <input type="file" name="P_Photo" placeholder="Patient  Image"  class="form-control input-height" />


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>
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
            </form>

