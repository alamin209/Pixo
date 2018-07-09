<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>H.P</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>User</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4><?php echo  $this->session->userdata('admin_name') ?></h4>
                                <small><?php echo  $this->session->userdata('Designetion')?></small>
                            </div>
                            <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>                            
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li class="active open"> <a href="/"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a> </li>
                    <li class=""> <a href="<?php echo base_url() ?>Admin/Appointment"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span></a> </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                        <ul class="ml-menu">
                            <li><a href="<?php echo base_url() ?>Admin/Doctors">All Doctors</a></li>
                            <li><a href="<?php echo base_url()?>Admin/Doctors/addDoctor">Add Doctor</a></li>
                            <li><a href="doctorprofile">Doctor Profile</a></li>
                            <li><a href="doctorshedule">Doctor Shedule</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="<?php echo base_url() ?>Admin/Patients ">All Patients</a></li>
                            <li> <a href="<?php echo base_url() ?>Admin/Patients/addPations">Add Patient</a></li>
                            <li> <a href="patientprofile">Patient Profile</a></li>
                            <li> <a href="invoice">Invoice</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Staff & Word </span> </a>
                        <ul class="ml-menu">
                            <li> <a href="<?php echo base_url() ?>Admin/Patients ">All Staff</a></li>
                            <li> <a href="<?php echo base_url() ?>Admin/Patients/addPations">Add  Staff</a></li>
                            <li> <a href="patientprofile"> Staff Profile</a></li>
                            <li> <a href="<?php echo base_url() ?>Admin/Patients "> Add Word</a></li>
                            <li> <a href="<?php echo base_url() ?>Admin/Patients/addPations">All Word</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="payments">Payments</a> </li>                    
                            <li> <a href="addpayments">Add Payments</a> </li>                    
                            <li> <a href="invoice">Invoice</a> </li>
                        </ul>
                    </li>
					<li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggled"><i class="zmdi zmdi-label-alt"></i><span>Departments</span> </a>
                        <ul class="ml-menu" style="display: block;">
                            <li><a href="adddepartments" class=" waves-effect waves-block">Add</a></li>
                            <li><a href="/alldepartments" class=" waves-effect waves-block">All Departments</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Cardiology</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Pulmonology</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Gynecology</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Neurology</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Urology</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Gastrology</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Pediatrician</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Laboratory</a></li>
                        </ul>
                    </li>
					<li> <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block toggled"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                        <ul class="ml-menu" style="display: block;">
                            <li><a href="signin" class=" waves-effect waves-block">Sign In</a> </li>
                            <li><a href="signup" class=" waves-effect waves-block">Sign Up</a> </li>
                            <li><a href="locked" class=" waves-effect waves-block">Locked Screen</a> </li>
                        </ul>
                    </li>
                    <li class="header">EXTRA COMPONENTS</li>
                    <li><a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="blogdashboard" class=" waves-effect waves-block">Blog Dashboard</a></li>
                            <li><a href="blogpost" class=" waves-effect waves-block">New Post</a></li>
                            <li><a href="bloglist" class=" waves-effect waves-block">Blog List</a></li>
                        </ul>
                    </li>
                   
                    <li> <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu" style="display: none;">
                            <li><a href="mail-inbox.html" class=" waves-effect waves-block">Inbox</a></li>
                            <li><a href="chat.html" class=" waves-effect waves-block">Chat</a></li>                                                        
                            <li><a href="contact.html" class=" waves-effect waves-block">Contact list</a></li>                            
                        </ul>
                    </li>                    
                    <li> <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                        <ul class="ml-menu" style="display: none;">
                            <li><a href="ui_kit.html" class=" waves-effect waves-block">UI KIT</a></li>
                            <li><a href="alerts.html" class=" waves-effect waves-block">Alerts</a></li>
                            <li><a href="collapse.html" class=" waves-effect waves-block">Collapse</a></li>
                            <li><a href="colors.html" class=" waves-effect waves-block">Colors</a></li>
                            <li><a href="dialogs.html" class=" waves-effect waves-block">Dialogs</a></li>
                            <li><a href="icons.html" class=" waves-effect waves-block">Icons</a></li>
                            <li><a href="list-group.html" class=" waves-effect waves-block">List Group</a></li>
                            <li><a href="media-object.html" class=" waves-effect waves-block">Media Object</a></li>
                            <li><a href="modals.html" class=" waves-effect waves-block">Modals</a></li>
                            <li><a href="notifications.html" class=" waves-effect waves-block">Notifications</a></li>                    
                            <li><a href="progressbars.html" class=" waves-effect waves-block">Progress Bars</a></li>
                            <li><a href="range-sliders.html" class=" waves-effect waves-block">Range Sliders</a></li>
                            <li><a href="sortable-nestable.html" class=" waves-effect waves-block">Sortable &amp; Nestable</a></li>
                            <li><a href="tabs.html" class=" waves-effect waves-block">Tabs</a></li>
                            <li><a href="waves.html" class=" waves-effect waves-block">Waves</a></li>
                        </ul>
                    </li>
                    <li class="header">Extra</li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Traffic this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Server Load</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4>Michael</h4>
                                <small>UI UX Designer</small>                        
                            </div>
                            <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="m-b-5">852</h5>
                                    <small>Following</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">13k</h5>
                                    <small>Followers</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">234</h5>
                                    <small>Post</small>
                                </div>                            
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Email address: </small>
                        <p>michael@gmail.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Wordpress</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML 5</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Angular</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                        </ul>                        
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</aside>
