
<?php	$subtotal = 0 ;foreach ($this->cart->contents() as $c) {  ?>

    <?php   $subtotal = $subtotal + $c['subtotal'];   ?>


   <?php  }  ?>
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
                <?php echo $id ?>
                        </span>
        </td>
    </tr>

    <tr>
        <td>
            <!--                                        <td class="total" id="txtHint">-->
            TOTAL <span class="pull-right" id="totals">
                $<?php echo $subtotal - $id ?>
                                        </span>
        </td>
    </tr>
    </tbody>
</table>