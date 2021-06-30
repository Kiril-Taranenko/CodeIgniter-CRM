<article class="content">
    <div class="card card-block">
        <div id="notify" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>

            <div class="message"></div>
        </div>
        <div class="grid_3 grid_4 table-responsive animated fadeInRight">
            <h5 class="title"><?php echo $this->lang->line('Payment Gateways') ?>
            </h5>

            <hr>
            <table id="catgtable" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $this->lang->line('Name') ?></th>
                    <th><?php echo $this->lang->line('Status') ?> On</th>
                    <th><?php echo $this->lang->line('Test Mode') ?></th>
                    <th><?php echo $this->lang->line('Action') ?></th>


                </tr>
                </thead>
                <tbody>
                <?php $i = 1;
                foreach ($gateway as $row) {
                    $cid = $row['id'];
                    $title = $row['name'];
                    $enable = $row['enable'];
                    $dev_mode = $row['dev_mode'];

                    echo "<tr>
                    <td>$i</td>
                    <td>$title</td>
                    <td>$enable</td>
                    <td>$dev_mode</td>
                  
                    <td><a href='" . base_url("paymentgateways/edit?id=$cid") . "' class='btn btn-cyan btn-xs'><i class='icon-pencil'></i>" . $this->lang->line('Edit') . "</a></td></tr>";
                    $i++;
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th><?php echo $this->lang->line('Name') ?></th>
                    <th><?php echo $this->lang->line('Status') ?> On</th>
                    <th><?php echo $this->lang->line('Test Mode') ?></th>
                    <th><?php echo $this->lang->line('Action') ?></th>

                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</article>
<script type="text/javascript">
    $(document).ready(function () {

        //datatables
        $('#catgtable').DataTable({});

    });
</script>
