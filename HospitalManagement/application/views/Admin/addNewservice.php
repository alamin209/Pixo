
<form class="form" method="post"  action="<?php echo base_url() ?>Admin/Depertment/save_service/<?php echo  $id  ?>" enctype="multipart/form-data" >

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control"  name="service_name" placeholder="Service Name" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="service_price" placeholder="Service Fee" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control show-tick"   name="service_type"  tabindex="-98">
                                    <option value="">- Service Type -</option>
                                    <option value="Investigation">Investigation</option>
                                    <option value="Treatments">Treatments</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control show-tick"   name="service_status"  tabindex="-98">
                                    <option value="">- Service satus -</option>
                                    <option value="0">In-Active</option>
                                    <option value="">Active</option>
                                    <!--                                                    <option value="female">Others</option>-->
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div>


                </div>

                <div class="row clearfix">


                    <div class="col-sm-6">
                        <input type="hidden" name="deperment_name"  value="<?php echo  $name  ?>"  class="form-control input-height" />


                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="col-sm-12">
                <button type="submit"  id="submit" class="btn btn-primary btn-round">Submit</button>
                <button type="button" class="btn btn-default btn-round btn-simple">Cancel</button>
            </div>
        </div>
    </div>
    </div>
    </div>
</form>

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
</script>