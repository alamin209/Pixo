<?php include("myinc/header.php")?>
<?php include("myinc/top.php")?>
<?php include("myinc/leftmenu.php")?>
<!-- Right Sidebar -->
<?php include("myinc/rignt.php")?>
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
                                    <input class="form-control" placeholder="First Name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone No." type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                    <input class="form-control" placeholder="Enter date" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Age" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle bs-placeholder btn-round btn-simple" data-toggle="dropdown" role="button" title="- Gender -"><span class="filter-option pull-left">- Gender -</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">- Gender -</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Male</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Female</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" tabindex="-98">
                                    <option value="">- Gender -</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                </select></div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Email" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="/" id="frmFileUpload" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Description"></textarea>
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
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Registration</strong> Information <small>Description text here...</small> </h2>
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
    </div>
</section>
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



<?php include("myinc/footer.php")?>