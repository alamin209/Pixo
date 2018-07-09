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
                <h2>Add Payment
                <small class="text-muted">Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Payment</a></li>
                    <li class="breadcrumb-item active">Add Payment</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card">
                    <div class="header">
                        <h2><strong>Patients</strong> Information <small>Description text here...</small> </h2>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Payment Number" type="number">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Patient Name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Doctor Name" type="text">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Payment</strong> Information <small>Description text here...</small> </h2>
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
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Payment Date" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Total Amount" type="number">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Discount" type="number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle bs-placeholder btn-round btn-simple" data-toggle="dropdown" role="button" title="-- Payment Method --"><span class="filter-option pull-left">-- Payment Method --</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">-- Payment Method --</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cash</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cheque</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Credit Card</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Debit Card</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Netbanking</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Insurance</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" tabindex="-98">
                                    <option value="">-- Payment Method --</option>
                                    <option>Cash</option>
                                    <option>Cheque</option>
                                    <option>Credit Card</option>
                                    <option>Debit Card</option>
                                    <option>Netbanking</option>
                                    <option>Insurance</option>
                                </select></div>
                            </div>                            
                            <div class="col-sm-6">
                                <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle bs-placeholder btn-round btn-simple" data-toggle="dropdown" role="button" title="-- Payment Status --"><span class="filter-option pull-left">-- Payment Status --</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">-- Payment Status --</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Select Status</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Complete</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pending</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Partial</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" tabindex="-98">
                                    <option value="">-- Payment Status --</option>
                                    <option>Select Status</option>
                                    <option>Complete</option>
                                    <option>Pending</option>
                                    <option>Partial</option>
                                </select></div>
                            </div>
                            <div class="col-sm-12 m-t-30">
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
<?php include("myinc/footer.php")?>