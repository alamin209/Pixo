<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
<!-- Right Sidebar -->
<?php include("rignt.php") ?>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Book Appointment
                <small>Welcome to Pixo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="../index.html"><i class="zmdi zmdi-home"></i> Pixo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Appointment</a></li>
                    <li class="breadcrumb-item active">Book Appointment</li>
                </ul>
            </div>
        </div>
    </div>    
    <div class="container-fluid">        
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2><strong>Book</strong> Appointment<small>Description text </small> </h2>
						<ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
					</div>
                    <?php if ($this->session->flashdata('errorMessage')!=null){?>
                        <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                    <?php }
                    elseif($this->session->flashdata('successMessage')!=null){?>
                        <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                    <?php }?>

<!--                    <form action="--><?php //echo base_url() ?><!--Admin/Appointment/save_appointmet ?>">-->
                    <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Appointment/save_appointmet">

					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"   name="firstname" placeholder="First Name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control"   name="lastname" placeholder="Last Name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Date of Birth"  name="birth_date" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle bs-placeholder btn-round btn-simple" data-toggle="dropdown" role="button" title="- Gender -"><span class="filter-option pull-left">- Gender -</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">- Gender -</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Male</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Female</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div>
                                    <select class="form-control show-tick"  name="gender" tabindex="-98">
                                    <option value="">- Gender -</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle bs-placeholder btn-round btn-simple" data-toggle="dropdown" role="button" title="- Service -"><span class="filter-option pull-left">- Service -</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">- Service -</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Select Service</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dental Checkup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Full Body Checkup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">ENT Checkup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Heart Checkup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div>

                                        <select class="form-control show-tick"   name="depertment" tabindex="-98">
                                            <option value="">- Select Service   -</option>
                                            <?php  foreach($depertment as $d) { ?>
                                            <option value="<?php echo $d->dep_id ?>"><?php echo $d->Dep_name ?></option>
                                            <?php  } ?>

                                        </select>

                                      </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                    <input class="form-control datetimepicker" placeholder="Please choose date &amp; time..." data-dtp="dtp_1hJG0" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control"    name="email" placeholder="Enter Your Email" type="text">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" name="Phone" type="text">
                                </div>
                            </div>
                            <h3 style="color: red"> After checking the schudul i will give this number other wise it will not apper</h3>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Serial number "  name="serial_no" type="text">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize"  name="opinion" placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                <button type="button" class="btn btn-default btn-round btn-simple" onclick="

                                        if (window.confirm('Really Cancel?'))
                                        location.href='<?php echo base_url();?>Admin/Appointment'">Cancel</button>
                            </div>
                        </div>
                    </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
</section>
<?php include("footer.php")?>