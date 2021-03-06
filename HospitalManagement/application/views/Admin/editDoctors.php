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
                        <small class="text-muted">Welcome to Oreo</small>
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
        <form class="form" method="post"  action="<?php echo base_url() ?>Admin/Doctors/save_doctors" enctype="multipart/form-data" >
            <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                                <ul class="header-dropdown">
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="First Name" name="firstname" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Last Name" name="lastname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"   name="gender"  tabindex="-98">
                                                <option value="">- Gender -</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control show-tick"    name="speciality" tabindex="-98">
                                                <option value="">- Select Doctor speciality  -</option>
                                                <?php  foreach($depertment as $d) { ?>
                                                    <option value="<?php echo $d->dep_id ?>"><?php echo $d->Dep_name ?></option>
                                                <?php  } ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" type="date" placeholder="Date of Birth"  name="birth_date" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone" name="phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Enter Your Email" name="email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Website URL"   name="url"  type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="drag-icon-cph">Upload Photo </div>
                                        <input type="file" name="d_Photo" placeholder="Doctor Image"  class="form-control input-height" />


                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Doctor Degree" name="degree[]" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Instituted Name " name="insti[]" type="text">
                                        </div>
                                    </div>
                                    <div id="Item_price"> </div>
                                    <div class="control-group">
                                        <label class="control-label" for="userfile">If you want to add More Degree</label>
                                        <div class="controls">
                                            <input class="btn btn-success" type="button" name = 'add' value='Add'  onclick="selectid2()">
                                        </div>
                                    </div>

                                    <div id="showattr" style="display: none">
                                        <!--                                <div class="col-sm-6">-->

                                        <div id='TextBoxesGroup'>
                                            <div id="TextBoxDiv1">

                                                <div class="form-group">
                                                    <label class="col-md-6"> Degree Name : </label>
                                                    <div class="controls">
                                                        <input class="form-control input-height" id="degree1"  placeholder="Add your optional  description 1" name="degree[]" >
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="userfile">Institute name  </label>

                                                    <div class="controls">
                                                        <input class="form-control input-height"   type='insti' id='inst1' name="insti[]" >                                        </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="add_remove_button" class="form-group" style="margin-left: 230px">
                                            <input class="btn btn-success" type='button' value='Add More' id='addButton'>
                                            <input class="btn btn-danger" type='button' value='Remove' id='removeButton'>
                                        </div>

                                        <!--                                </div>-->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2><strong>Doctor's</strong> Account Information <small>Description text here...</small> </h2>
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
                                                            <input class="form-control"  name="username"  placeholder="User Name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control"    name="password"  id="password" placeholder="Password" type="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control"  onkeyup='check();'  name="confirm_password"   id="confirm_password" placeholder="Confirm Password" type="password">
                                                        </div>
                                                        <span id='message'></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2><strong>Doctor</strong> Social Media Info <small>Description text here...</small> </h2>
                                                    <ul class="header-dropdown">
                                                        <li class="remove">
                                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="body">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="zmdi zmdi-facebook"></i></span>
                                                                <input class="form-control"  name="facebook" placeholder="Facebook" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="zmdi zmdi-twitter"></i></span>
                                                                <input class="form-control"     name="tweet" placeholder="Twitter" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="zmdi zmdi-google-plus"></i></span>
                                                                <input class="form-control"   name="google_plus" placeholder="Google Plus" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="zmdi zmdi-instagram"></i></span>
                                                                <input class="form-control"   name="instragram" placeholder="Google Plus" type="text">
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="zmdi zmdi-linkedin"></i></span>
                                                                <input class="form-control"  name="linkdin" placeholder="LinkedIN" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control show-tick"   name="status"  tabindex="-98">
                                                                    <option value="">- Doctor Activation Status-</option>
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-round" id="submit" >Submit</button>
                                                <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
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
    </section>
    <script>
        function selectid2() {
            document.getElementById('showattr').style.display = "block";
            document.getElementById('Item_price').style.display = "none";
            //        document.getElementById('Item_Status').style.display = "none";
            document.getElementById('add_remove_button').style.display = "block";
            return false;
        }
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var counter = 2;
            $("#addButton").click(function () {
                if(counter>10){
                    alert("Only 10 textboxes allow");
                    return false;
                }
                var newTextBoxDiv = $(document.createElement('div'))
                    .attr("id", 'TextBoxDiv' + counter);
                newTextBoxDiv.after().html('<div class="form-group">'+
                    '<label class="control-label">Degree Name'+ counter + ' : </label>'+
                    '<div class="controls">'+
                    '<input class="form-control input-height"  placeholder="Add your optional  description  "  type="textbox" id="degree" name="degree[]" >'+
                    '</div>'+
                    '</div>'+'<div class="form-group">'+
                    '<label class="control-label">Institute Name'+ counter + ' : </label>'+ '<div class="controls">'+
                    '<input class="form-control input-height"  placeholder="Add your optional  description  "  type="textbox" id="inst" name="insti[]" >'+
                    '</div>'

                );
                newTextBoxDiv.appendTo("#TextBoxesGroup");
                counter++;
            });
            $("#removeButton").click(function () {
                if(counter==2){
                    alert(" textbox to remove");
                    document.getElementById('Item_price').style.display = "block";
//                    document.getElementById('Item_Status').style.display = "block";
                    document.getElementById('add_remove_button').style.display = "none";
                    document.getElementById('showattr').style.display = "none";
                    return false;
                }
                counter--;
                $("#TextBoxDiv" + counter).remove();
            });
        });
    </script>
<?php include("footer.php")?>
<?php include("Js.php")?>

