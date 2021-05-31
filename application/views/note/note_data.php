<div class="row">
    <div class="col-12">
        <?php $this->load->view('messages') ?>
        <div class="card">
            <div class="card-header">
                <h4>Data Service Book</h4>
                <div class="card-header-action">
                    <a href="<?php echo base_url('note/add'); ?>" class="btn btn-outline-primary">
                        <i class="fas fa-plus"></i> Add Data
                    </a> &nbsp;
                    <a href="<?php echo base_url('note/excel'); ?>" class="btn btn-outline-success">
                        <i class="fas fa-file-excel"></i> Export Excel
                    </a> &nbsp;
                    <a href="<?php echo base_url('note/print'); ?>" class="btn btn-outline-danger">
                        <i class="fas fa-print"></i> Print Data
                    </a>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-sm">
                    <div id="table-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="text-small">No</th>
                                            <th class="text-small">Date</th>
                                            <th class="text-small">Sent To</th>
                                            <th class="text-small">Item</th>
                                            <th class="text-small">User</th>
                                            <th class="text-small">Department</th>
                                            <th class="text-small">Unit</th>
                                            <th class="text-small">S/N</th>
                                            <th class="text-small">Damage</th>
                                            <th class="text-small">Remarks</th>
                                            <th class="text-small">Number</th>
                                            <th class="text-small">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($note->result() as $data) { ?>
                                            <tr>
                                                <td class="text-small"><?php echo $no++; ?></td>
                                                <td>
                                                    <small><mark><?php echo $data->tanggal ?></mark></small>
                                                </td>
                                                <td class="text-small"><?php echo $data->dikirim_ke ?></td>
                                                <td class="text-small"><?php echo $data->item ?></td>
                                                <td class="text-small"><?php echo $data->user ?></td>
                                                <td class="text-small"><?php echo $data->department ?></td>
                                                <td class="text-small"><?php echo $data->unit ?></td>
                                                <td class="text-small"><?php echo $data->sn ?></td>
                                                <td class="text-small"><?php echo $data->kerusakan ?></td>
                                                <td class="text-small"><?php echo $data->remarks ?></td>
                                                <td class="text-small"><?php echo $data->number ?></td>
                                                <td>
                                                    <form action="<?php echo site_url('note/del') ?>" method="post">
                                                        <a href="<?php echo site_url('note/edit/' . $data->note_id) ?>" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                                        <input type="hidden" name="note_id" value="<?php echo $data->note_id ?>">
                                                        <button onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>