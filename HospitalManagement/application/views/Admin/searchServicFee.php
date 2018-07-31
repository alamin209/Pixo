

 <div id="search">

            <?php foreach ($getPaymentInfoById as $p) { ?>



                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input class="form-control"  id="firsname"   value="<?php echo $p->pat_first_name ?>"   name="firstname" placeholder="First Name" type="text">
                                                <input class="form-control"  type="hidden" value="<?php echo $p->patient_id  ?>" name="patname_patientid" type="text">

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input class="form-control"   id="lastname" name="lastname"  value="<?php echo $p->pat_last_name ?>" placeholder="Last Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input class="form-control"    name="phone"   value="<?php echo $p->pat_phone ?>"  placeholder="Phone No." type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-calendar"></i>
                                    </span>
                                                <input class="form-control"   name="enter_date"  value="<?php echo $p->enter_date ?>" name="admit_date" placeholder="Enter  Admit  date" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Age"    value="<?php echo  $p->age ?>" name="age" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Patient address" value="<?php echo $p->address  ?>" name="address" type="text">
                                            </div>
                                        </div>



                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Enter Your Email" value="<?php echo $p->email ?>" name="email" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick"   name="gender"  tabindex="-98">
                                                <option value="male" <?php echo ($p->gender=='male')?'selected="selected"':''; ?> >Male</option>
                                                <option value="female" <?php echo ($p->gender=='female')?'selected="selected"':''; ?> >Female</option>
                                            </select>
                                        </div>
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



                           <?php } ?>
     </div>
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

