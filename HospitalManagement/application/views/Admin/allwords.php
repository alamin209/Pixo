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
                <h2>All Staff
                    <small class="text-muted">Welcome to Pixo</small>
                </h2>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Pixo </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Patients</a></li>
                    <li class="breadcrumb-item active">All Staff</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card patients-list">
                    <div class="header">
                        <h2><strong>Word</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="btn-group">
                                <button id="addRow" onclick="selectid1(this)" class="btn btn-info" style="z-index: inherit">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="tab-content m-t-10">
                            <?php if ($this->session->flashdata('successMessage')!=null){?>
                                <div class="alert alert-success" align="center"><strong><?php echo $this->session->flashdata('successMessage');?></strong></div>
                            <?php }
                            elseif($this->session->flashdata('errorMessage')!=null){?>
                                <div class="alert alert-danger" align="center"><strong><?php echo $this->session->flashdata('errorMessage');?></strong></div>
                            <?php }?>
                            <div class="tab-pane table-responsive active" id="All">
                                <table class="table m-b-0 table-hover">
                                    <thead>
                                    <tr>

                                        <th>Sr No.</th>
                                        <th> Word_Id </th>
                                        <th>Word  No.</th>
                                        <th>Word  Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php   $i=1; foreach($word  as $w) { ?>

                                        <tr>


                                            <td><span class="list-name"><?php echo $i ?></span></td>
<!--                                            <td>--><?php //echo $s->first_name ?><!-- --><?php //echo $s->last_name ?><!--  </td>-->
                                            <td><?php echo $w->word_id; ?></td>
                                            <td><?php echo $w->word_name ?></td>
                                            <td><?php if($w->word_status=="1")
                                                echo " Not avilabel ";

                                            else
                                            {
                                                echo "avilable ";

                                            }

                                                ?>


                                            </td>

                                            <td class="center">
                                                <button      data-panel-id="<?php echo $w->word_id; ?>" onclick="selectid2(this)">
                                                    <i class="fa fa-pencil ">Edit </i>
                                                </button>

                                                <button    data-panel-id="<?php echo $w->word_id; ?>" onclick="selectid3(this)">
                                                    <i class="fa fa-pencil ">Delete </i>
                                                </button>
                                            </td>
                                        </tr>

                                    <?php  $i++; }  ?>
                                    </tbody>
                                </table>


                            </div>

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
</section>



<?php include("footer.php") ?>
<?php include("Js.php")?>
<script>

    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];

    function selectid1(x)
    {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin/Staffword/add_word" )?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
        modal.style.display = "block";
    }

    function selectid2(x)
    {

        btn = $(x).data('panel-id');
        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin/Staffword/getWordId")?>',
            data:{id:btn},
            cache: false,
            success:function(data) {


                $('#txtHint').html(data);

            }
        });
        modal.style.display = "block";

    }

    function selectid3(x)
    {

        if (confirm("are you sure delete this Word ?"))
        {

            btn = $(x).data('panel-id');
            $.ajax({
                type: 'POST',
                url:'<?php echo base_url("Admin/Staffword/deleteWordById")?>',
                data: {id: btn},
                cache: false,
                success: function (data) {
                    // alert(' Staff deleted Successfully');
                    location.reload();
                }

            });
        }
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


</script>


<?php include("footer.php")?>
<?php include("Js.php")?>

