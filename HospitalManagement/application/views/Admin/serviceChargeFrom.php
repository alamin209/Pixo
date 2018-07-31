<?php include("header.php")?>
<?php include("top.php")?>
<?php include("leftmenu.php")?>
    <!-- Right Sidebar -->
<?php include("rignt.php")?>
    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add  Service Charge
                        <small class="text-muted">Welcome to Pixo </small>
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


            <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Service/service_info" onsubmit="return promotypefync() " enctype="multipart/form-data" >

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php if ($this->session->flashdata('errorMessage')!=null){?>
                            <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                        <?php }
                        elseif($this->session->flashdata('successMessage')!=null){?>
                            <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                        <?php }?>
                        <div class="card">
                            <div class="header">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <strong>If patient Register then serach with their Id</strong>
                                            <div class="form-group">
                                                <input class="form-control" name="sample_search" id="sample_search" onkeyup="search_func(this.value);"  placeholder="Serach With patient ID" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>



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
                            <div id="search">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input class="form-control"  id="firsname"   name="firstname" placeholder="First Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input class="form-control"   id="lastname" name="lastname" placeholder="Last Name" type="text">
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
                                                <input class="form-control"   type="date" name="enter_date" placeholder="Enter  Admit  date" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="age"   name="age" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Patient address" name="address" type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Your Email" name="email" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick"   name="gender"  tabindex="-98">
                                                <option value="">- Gender -</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                                <select class="form-control input-height"  id="promotype" name="promotype" onchange="selectid4()">
                                                    <option value="">Select...</option>
                                                    <option value="pending">Pending </option>
                                                    <option value="complete">Complete</option>
                                                    <option value="partial">Partial</option>

                                                </select>

                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="row clearfix" id="pending"  style="display: none">
                                <div class="col-sm-6" >
                                    <div class="form-group"> Pending
                                        <input class="form-control"  placeholder="Give the amount " value="pending "   name="age" type="text">
                                    </div>
                                </div>


                            </div>

                            <div class="row clearfix" id="nondisplay"  style="display: none">
                                <div class="col-sm-6" >
                                    <div class="form-group"> Pay by cash
                                        <input class="form-control" placeholder="Give the amount "  id="amount" onkeyup="amount_func(this.value);"  name="age" type="text">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                        <button class="btn btn-primary btn-round">Pay for Paypal Payment  </button>
                                    </select>
                                </div>
                            </div>

<!--                            <div class="row clearfix" id="complete"  style="display: none">-->
<!--                                <div class="col-sm-6" >-->
<!--                                    <div class="form-group"> Pay by cash-->
<!--                                        <input class="form-control" placeholder="Give the amount "   name="age" type="text">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-sm-6">-->
<!--                                    <button>Pay for Paypal Payment  </button>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->


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
                                                <strong class="pull-right"><?php echo $c['subtotal'];?></strong>
                                            </td>
                                        </tr>
                                        <?php

                                        $subtotal = $subtotal + $c['subtotal'];
                                    } ?>
                                    </tbody>
                                </table>

                                <hr>

                                <table class="table table_summary" id="total_tables">
                                    <tbody>

                                    <tr>
                                        <td>
                                            Subtotal <span class="pull-right"><?php echo $subtotal?></span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="total" >
                                             Payment Amount <span class="pull-right" id="txtHint">
<!--                                            --><?php //echo $subtotal+$dfee+$vatt-$totaldis?>
<!--                                                $--><?php //echo $subtotal?>
                                        </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
<!--                                        <td class="total" id="txtHint">-->
                                            TOTAL <span class="pull-right" id="totals">
<!--                                            --><?php //echo $subtotal+$dfee+$vatt-$totaldis?>
                                                $<?php echo $subtotal?>
                                        </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <button type="submit"  id="submit" class="btn btn-primary btn-round">Submit</button>
                                <button type="button"  class="btn btn-default btn-round btn-simple"
                                        onclick="
                                                if (window.confirm('Ary you sure to  Cancel?'))
                                                location.href='<?php echo base_url();?>Admin/Patients/addPations'">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
        </div>
        </div>
    </div>
    </div>
<!--        <div id="txtHint"></div>-->

        <!--        <div id="search"></div>-->

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

        var searchRequest = null;

        $(function () {
            $("#sample_search").keyup(function () {
                var that = $(this).val();
                if (that.length ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = $.ajax({
                        type: "post",
                        url:"<?php echo base_url() ?>Admin/Service/getPatentforPaymentById/"+that,
                        data:{id:that},
                        success: function(data){
                            $('#search').html(data);



                        }
                    });
                }
            });
        });
        $(function () {
            $("#amount").keyup(function () {
                var that = $(this).val();
                if (that.length ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = $.ajax({
                        type: "post",
                        url:"<?php echo base_url() ?>Admin/Service/getPatentforamount/"+that,
                        data:{id:that},
                        success: function(data){
                            $('#total_tables').html(data);


                        }
                    });
                }
            });
        });

    </script>


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

    </script>
<script>
    function selectid4() {
    var x = document.getElementById('promotype').value;

    alert(x);
    if (x == "pending") {
        document.getElementById('pending').style.display ="block";

    document.getElementById('nondisplay').style.display = "none";
    document.getElementById('Item_price').style.display = "none";
    return false;
    }

        if (x == "partial"  || x == "complete" ) {

            document.getElementById('nondisplay').style.display = "block";
            document.getElementById('pending').style.display ="none";
            //        document.getElementById('Item_Status').style.display = "none";
            document.getElementById('add_remove_button').style.display = "block";
            return false;
        }

        // if (x == "complete") {
        //
        //     document.getElementById('nondisplay').style.display = "block";
        //     document.getElementById('pending').style.display ="none";
        //     //        document.getElementById('Item_Status').style.display = "none";
        //     document.getElementById('add_remove_button').style.display = "block";
        //     return false;
        // }



        else {
    document.getElementById('showattr').style.display = "none";
    document.getElementById('Item_price').style.display = "block";
    //        document.getElementById('Item_Status').style.display = "none";
    document.getElementById('add_remove_button').style.display = "none";
    return false;
    }

    // When the user clicks * of the modal, close it
    span.onclick = function () {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
    if (event.target == modal) {
    modal.style.display = "none";
    }
    }
    }
    </script>

<?php include("footer.php")?>