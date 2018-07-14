

    <div class="form-group"  id="example"  >
        <select class="form-control show-tick"   id="example"   name="doctor" tabindex="-98">
            <option value="">- Select Doctor     -</option>
            <?php  foreach($categoryInfoBydoctor as $d) { ?>
                <option value="<?php echo $d->doc_id ?>"><?php echo $d->first_name ?><?php echo $d->last_name ?></option>
            <?php  } ?>
        </select>
</div>
