<style>
    .card {
        width: 95%;
        /* Adjust the width as needed */
        margin: 20px auto;
        /* Center the card on the page horizontally */
    }

    .row {
        margin-top: 10px;
    }

    h1 {
        margin-left: 50px;
    }
</style>

<h1>Goods Received List</h1>
<div class="card card-outline card-success">
    <div class="card-header">
        <h2 class="text-dark">
            <a href="<?php echo site_url('main/goods_received'); ?>" class="btn btn-dark"><i class="fas fa-boxes"></i> To Be Received</a>
            <a href="<?php echo site_url('main/goods_received_list'); ?>" class="btn btn-dark"><i class="fas fa-list"></i> Goods Received List</a>
            <a href="<?php echo site_url('main/back_order'); ?>" class="btn btn-dark"><i class="fas fa-reply"></i> Back Order</a>
        </h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="user-datatables" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Purchase Order No.</th>
                        <th>Supplier</th>
                        <th>Date Created</th>
                        <th>Total Cost</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($gr as $grs) { ?>
                        <tr class="text-center">

                            <td><?= $grs->purchase_order_no ?></td>
                            <td><?= $grs->supplier_name ?></td>
                            <td><?= $grs->date_created ?></td>
                            <td>₱<?= $grs->total_cost ?></td>
                            <td>
                                <span class="badge bg-success"><?= ucfirst($grs->status) ?></span>
                            </td>
                            <td>
                                <a href="<?php echo site_url('main/view_goods_received/' . $grs->purchase_order_no_id); ?>" style="color: darkcyan; padding-left:6px;" title="Click here to view purchase order"><i class="fas fa-eye"></i></a>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        <?php if ($this->session->flashdata('success')) { ?>
            toastr.success('<?php echo $this->session->flashdata('success'); ?>');
        <?php } elseif ($this->session->flashdata('error')) { ?>
            toastr.error('<?php echo $this->session->flashdata('error'); ?>');
        <?php } ?>
    });
</script>