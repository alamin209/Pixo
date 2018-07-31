<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
<!-- Right Sidebar -->
<?php include("rignt.php") ?>
<!-- Main Content -->
<section class="content">
    <?php foreach ($depertment_details as $d) { ?>

    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">

                <h2><?php echo $d->dep_name ?>
                <small>Welcome to Pixo</small>
                </h2>

            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="all-Departments.html">Departments</a></li>
                    <li class="breadcrumb-item active">More</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">


        <div class="row clearfix">

                <div class="col-lg-4 col-md-12 profile-page">
<!--                    <div class="btn-group">-->
<!--                        <button id="addRow" onclick="selectid1(this)" class="btn btn-info" style="z-index: inherit">-->
<!--                            Add New Service  <i class="fa fa-plus"></i>-->
<!--                        </button>-->
<!--                    </div>-->
                <div class="card profile-header">
                    <?php if ($this->session->flashdata('successMessage')!=null){?>
                        <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                    <?php }
                    elseif($this->session->flashdata('errorMessage')!=null){?>
                        <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                    <?php }?>
                    <div class="body text-center">
                        <div class="profile-image"> <img src="<?php echo $d->dep_image ?>" alt=""> <div></div></div>
                        <div>
                            <h4 class="m-b-0"><strong><?php echo $d->dep_name ?></strong></h4>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-round">Follow</button>
                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                        </div>
                        <p class="social-icon m-t-5 m-b-0">
                            <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                            <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                        </p>
                    </div>                    
                </div>

                    <div class="card">
                    <div class="body">
<!--                        <div class="workingtime">-->
<!--                            <h6>Working Time</h6>-->
                        <div id="cart_box" >
                            <h3>Pateint total Cost <i class="icon_cart_alt pull-right"></i></h3>
                            <table id="cart_table" class="table table_summary">
                                <tbody>
                                <?php	$subtotal = 0 ;foreach ($this->cart->contents() as $c) {


                                    ?>
                                    <tr>
                                        <td>
                                            <input type="button"  class="btn btn-default" style="background:#ec008c; text-align: center; width:19px; color: #fff; font-weight: bold; padding:6px 0px;  border-radius:0px; float: left" data-panel-id="<?= $c['rowid'] ?>" onclick="minus(this)" value="-"/>
                                            <input type="text"  name="qty" id="<?php echo $c['rowid']?>" class="form-control" style="text-align: center; border-right:none; border-left:none; border-radius:0px; width: 20px; padding:6px 2px; height:auto; float: left" value="<?php echo $c['qty']?>"/>
                                            <input type="button" class="btn btn-default"data-panel-id="<?= $c['rowid'] ?>" onclick="plus(this)"  style="background:#ec008c; font-weight: bold; color: #fff; text-align: center; border-radius:0px; width: 19px; padding: 6px 0px; float: left" value="+">
                                        </td>
                                        <td><?php echo htmlspecialchars($c['name'])?>

                                        </td>
                                        <td>

<!--                                            --><?php // if ($c['options']['Size'] == "defualt"){}else
//                                            {echo $c['options']['Size'];}?>

                                        </td>
                                        <td>
                                            <strong class="pull-right"><?php echo $c['subtotal'];?></strong>
                                        </td>
                                    </tr>
                                    <?php

                                    $subtotal = $subtotal + $c['subtotal'];
                                } ?>
                                </tbody>
                            </table>

<!--                            --><?php //if ($this->session->userdata('userType') == "cus" || $this->session->userdata('userType') == null  ) { ?>
                                <hr>
                                <div class="row" id="options_2">
<!--                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">-->
<!--                                        <a style="cursor: pointer" onclick="takeaway()">	<img style="width: 40px; margin-left: 16px" src="--><?php //echo base_url()?><!--public/img/takeaway.jpg"><br>Take Away</a>-->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">-->
<!--                                        <a style="cursor: pointer" onclick="homedelivary()"> <img style="width: 40px; margin-left: 16px" src="--><?php //echo base_url()?><!--public/img/homedeli.png"><br>Home Deliver</a>-->
<!--                                    </div>-->
                                </div>
<!--                            --><?php //} ?>


                            <hr>
<!--                            --><?php //if ($this->session->userdata('userType') != "cus" && $this->session->userdata('userType') != null  ) { ?>
<!--                                <div class="row" id="options_2">-->
<!--                                    <div class="col-lg-6">-->
<!--<!--                                        <label>Membership ID :</label>-->-->
<!---->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <input id="memberid" type="textbox" value="" style="   margin-left: -50px" name="option_2"  onfocusout="membershipid()" >-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} else if ($this->session->userdata('userType') == null) { ?>
<!--                                <div class="row" id="options_2">-->
<!---->
<!--                                    <label class="col-md-5">Promo Code :</label>-->
<!---->
<!--                                    <input class="col-md-6" style="margin-left: 10px" id="promocode" type="textbox" value=""  name="option_2"  onfocusout="discount()" >-->
<!---->
<!--                                </div>-->
<!--                            --><?php //} else { ?>
<!--                                <div class="row" id="options_2">-->
<!---->
<!--                                    <label class="col-md-5">Promo Code :</label>-->
<!---->
<!--                                    <input class="col-md-6"  id="promocode" type="textbox" value=""  name="option_2"  onfocusout="discount()" >-->
<!---->
<!--                                </div>-->
                                <!-- Edn options 2 -->
<!--                            --><?php //} ?>
                            <hr>
                            <table class="table table_summary" id="total_table">
                                <tbody>
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        Oder Type <span class="pull-right">--><?php //echo $this->session->userdata('orderType') ?><!--</span>-->
<!--                                    </td>-->
<!--                                </tr>-->
                                <tr>
                                    <td>
                                        Subtotal <span class="pull-right"><?php echo $subtotal?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Discount <span  id="total" class="pull-right">
<!--                                --><?php //if ( $this->session->userdata('discount') == null)
                                            //							{ echo 0.00;} else{
                                            //									echo $this->session->userdata('discount');
                                            //								} ?><!-- </span>-->
                                            <?php $totaldis = 0 ;foreach ($this->cart->contents() as $c){
//                                                $totaldis= ((float)$c['coupon'])+ ((float)$totaldis);
                                            } echo $totaldis;?>
                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
<!--                                        Delivery fee <span class="pull-right">-->
<!--								--><?php //$dfee = 0; $vat = 0;
//                                if ($this->session->userdata('orderType') == "home"){
//                                    foreach ($charges as $char){
//                                        $dfee = $char->deliveryfee;
//                                    } } else?>
<!--                                --><?php //echo $dfee ; ?><!--</span>-->
                                    </td>
                                </tr>

                                <tr>
<!--                                    <td>-->
<!--                                        --><?php //foreach ($charges as $char){
//                                            $vat = $char->vat;
//                                        }?>
<!--                                        Vat(--><?php //echo $vat."%"?><!--) <span class="pull-right">--><?php //echo  $vatt =round((($subtotal-$totaldis)*$vat)/100, 2)?><!--</span>-->
<!--                                        --><?php
//                                        $data = array(
//                                            'vat' => $vatt,
//
//                                        );
//                                        $this->session->set_userdata($data);
//                                        ?>
<!--                                    </td>-->
                                </tr>
                                <tr>
                                    <td class="total" >
                                        TOTAL <span   id="total" class="pull-right">
<!--                                            --><?php //echo $subtotal+$dfee+$vatt-$totaldis?>
                                            $<?php echo $subtotal?>
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div id="ordertypediv">
<!--                                --><?php //if($this->session->userdata('orderType') != null ){ ?>
                                    <a class="btn_full btn btn-info"    href="<?php echo base_url()?>Admin/Service/cart"> payment</a>
<!--                                <div class="btn-group">-->
<!--                                    <button id="addRow" class="btn btn-info" style="z-index: inherit">-->
<!--                                  = <i class="fa fa-plus"><a class="btn_full"    " href="--><?php //echo base_url()?><!--Admin/Service/cart">Go payment</a></i>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                --><?php //}  ?>

<!--                                else { ?>-->
<!--                                    <a class="btn_full" style="cursor: pointer" onclick="orderwarning()">Order now</a>-->
<!--                                --><?php //} ?>
                            </div>
                        </div>


<!--                        <div class="reviews">-->
<!--                            <h6>Reviews</h6>-->
<!--                            <small class="text-muted">Staff</small>-->
<!--                            <p>-->
<!--                                <i class="zmdi zmdi-star"></i>-->
<!--                                <i class="zmdi zmdi-star"></i>-->
<!--                                <i class="zmdi zmdi-star"></i>-->
<!--                                <i class="zmdi zmdi-star-outline"></i>-->
<!--                                <i class="zmdi zmdi-star-outline"></i>-->
<!--                            </p>-->
<!--                            <hr>-->
<!--                            <small class="text-muted">Punctuality</small>-->

                    </div>
                </div>
            </div>

<!--            ///////////////////////main content of depertment //////////////////////////////-->


            <div class="col-lg-8">
                <div class="card">
                    <div class="body">
                        <div id="demo2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo2" data-slide-to="0" class="active"></li>
                                <li data-target="#demo2" data-slide-to="1" class=""></li>
                                <li data-target="#demo2" data-slide-to="2" class=""></li>
                            </ul>
            
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../images/image-gallery/5.jpg" class="img-fluid" alt="">
                                    <div class="carousel-caption">
                                    <h3>Chicago</h3>
                                    <p>Thank you, Chicago!</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/image-gallery/6.jpg" class="img-fluid" alt="">
                                    <div class="carousel-caption">
                                    <h3>New York</h3>
                                    <p>We love the Big Apple!</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/image-gallery/12.jpg" class="img-fluid" alt="">
                                    <div class="carousel-caption">
                                    <h3>Los Angeles</h3>
                                    <p>We had such a great time in LA!</p>
                                    </div>
                                </div>
                            </div>
            
                            <!-- Controls -->
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo2" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <p><strong>About the depertment </strong></p>
                        <p> <?php echo $d->depertment_description  ?></p>
                                            <div class="btn-group">
                                                <button id="addRow" onclick="selectid1(this)" class="btn btn-info" style="z-index: inherit">
                                                    Add New Service  <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                </div>





                    <div class="row">

                     <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">



                                <h2><strong>Investigation</strong></h2>
                                <ul class="header-dropdown m-r--5">                                    
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <tbody>
                                        <?php foreach ($all_service as $service) { ?>



                                            <?php if($service->service_type=='Investigation' &&  $service->deperment_name== $d->dep_name) { ?>

                                        <tr>
                                                <td><?php echo $service->service_name ?></td>
                                                <td>$<?php echo $service->service_price ?></td>
                                            <td><a href="#0"> <i class="icon_plus_alt2"  data-panel-id="<?= $service->id ?>" onclick="addcart(this)">Add Charge</i></a></td>

                                        </tr>
                                        <?php } } } ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Treatments</strong></h2>
                                <ul class="header-dropdown m-r--5">                                    
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <tbody>
                                        <?php foreach ($all_service as $service ) { ?>

                                            <?php if($service->service_type=='Treatments' && $service->deperment_name== $d->dep_name) { ?>

                                                <tr>
                                                    <td><?php echo $service->service_name ?></td>
                                                    <td><?php echo $service->service_price ?></td>
                                                    <td><a href="#0"> <i class="icon_plus_alt2"  data-panel-id="<?= $service->id ?>" onclick="addcart(this)">Add Charge</i></a></td>

                                                </tr>
                                            <?php } } ?>

                                        </tbody>
                                    </table>
                                </div>                                
                            </div>
                        </div>   
                    </div>
                </div>

            </div>

                <div id="myModal" class="modal">
                    <br/><br/><br/>
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span    class="close"  style="text-align: right" >×</span>

                        <div id="txtHint"></div>

                    </div>

                </div>

                <div class="clearfix"> </div>

        <div></div></div>
    </div>
<div></div></section>
<script>

    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];

    function selectid1(x)
    {

        var  name ='<?php echo $d->dep_name ?>';
        btn = <?php echo $d->dep_id ?>

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin/Depertment/add__depertmaent" )?>',
            data:{btn:btn,name:name},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
        modal.style.display = "block";
    }


    function addcart(x) {
        //alert("hellasdasdado");
        btn = $(x).data('panel-id');



        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin/Service/insertCart/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {

                 alert(data);

                 $('#cart_table').load(document.URL +  ' #cart_table');
                 $('#total_table').load(document.URL +  ' #total_table');
            }

        });
    }


    // When the user clicks * of the modal, close it
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function minus(x) {

        var btn = $(x).data('panel-id');


        var x = parseInt(document.getElementById(btn).value);
        var newx= x-1;
        document.getElementById(btn).value = newx;

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Admin/Service/updateCart/")?>'+btn,
            data: {'id':btn, 'amount':newx },
            cache: false,
            success: function (data) {
                // $('#txt').html(data);

                $('#cart_table').load(document.URL +  ' #cart_table');
                $('#total_table').load(document.URL +  ' #total_table');
            }

        });

    }

    function plus(x) {

        var btn = $(x).data('panel-id');
        var x = parseInt(document.getElementById(btn).value);
        var newx= x+1;

        document.getElementById(btn).value = newx;

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Admin/Service/updateCart/")?>' + btn,
            data: {'id':btn, 'amount':newx },
            cache: false,
            success: function (data) {
                // $('#txt').html(data);
                $('#cart_table').load(document.URL +  ' #cart_table');
                $('#total_table').load(document.URL +  ' #total_table');

            }

        });


    }

    var check = function() {
        if (document.getElementById('password').value ="")

        {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
            document.getElementById('submit').disabled = true;
        } else {

            return true;
        }
    }







        // function myFunction() {
        //     var checkBox = document.getElementById("myCheck");
        //     var text = document.getElementById("text");
        //     if (checkBox.checked == true){
        //         text.style.display = "block";
        //     } else {
        //         text.style.display = "none";
        //     }
        // }

</script>


<?php include("footer.php")?>
<?php include("Js.php")?>

