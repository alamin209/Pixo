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
                    <input class="form-control" placeholder="Age"   name="age" type="text">
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