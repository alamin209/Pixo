
<?php foreach ($getWordById as $w) { ?>
<form class="form" method="post"  action="<?php echo base_url() ?>Admin/Staffword/update_word/<?php echo $w->word_id?>" enctype="multipart/form-data" >
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Word</strong> Information  </h2>

                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="Word Name"     value="<?php  echo $w->word_name ?>"  name="word_name" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick"   name="word_status"  tabindex="-98">
                                <option value="">- Word Status -</option>
                                <option value="1" <?php echo ($w->word_status=='1')?'selected="selected"':''; ?> > Not avilabel </option>
                                <option value="0" <?php echo ($w->word_status=='0')?'selected="selected"':''; ?>>avilable </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                        <button type="button" class="btn btn-default btn-round btn-simple"onclick="

                            if (window.confirm('Ary you sure to  Cancel?'))
                            location.href='<?php echo base_url();?>Admin/Staffword/allWord'">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<?php  } ?>
