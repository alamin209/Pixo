<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
<!-- Right Sidebar -->
<?php include("rignt.php")?>
<!-- Main Content -->
<section class="content" xmlns="http://www.w3.org/1999/html">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add Doctors
                    <small class="text-muted">Welcome to Pixo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="../index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Doctors</a></li>
                    <li class="breadcrumb-item active">Add Doctors</li>
                </ul>
            </div>
        </div>

    </div>

    <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Depertment/save_depertment" enctype="multipart/form-data" >
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                            <?php if ($this->session->flashdata('errorMessage')!=null){?>
                                <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                            <?php }
                            elseif($this->session->flashdata('successMessage')!=null){?>
                                <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                            <?php }?>
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
                                        <input class="form-control" placeholder="Enter depertment  Name" name="dep_name" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Enter depertment Description" name="dep_des" type="text"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="btn-group bootstrap-select form-control show-tick"><div class="dropdown-menu" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">- Gender -</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Male</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Female</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick"   name="dep_status"  tabindex="-98">
                                            <option value="">- Status -</option>
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
                                        </select>
                                </div>

                            </div>

                           </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="col-sm-12">
                                            <div class="drag-icon-cph">Depertmant  Photo </div>
                                            <input type="file" name="d_Photo" placeholder="Doctor Image"  class="form-control input-height" />


                                        </div>
                                    </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-round" id="submit" >Submit</button>
                                            <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                                        </div>
                                    </div>
                                </div>


    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
</section>

<?php include("footer.php")?>
<?php include("Js.php")?>

