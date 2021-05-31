<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="mb-4"><a href="<?php echo base_url('note') ?>"><i class="fas fa-arrow-left"></i></a> Back</div>
        <div class="card">
            <form action="#" method="POST">
                <div class="card-header">
                    <h4>Edit Data Note Here</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="tanggal">Date</label>
                        <input type="hidden" name="note_id" value="<?php echo $row->note_id ?>">
                        <input type="date" name="tanggal" value="<?php echo $this->input->post('tanggal') ?? $row->tanggal ?>" class="form-control">
                        <div class="invalid-feedback">
                            <?php echo form_error('tanggal') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Send To</label>
                        <input type="text" name="dikirim_ke" value="<?php echo $this->input->post('dikirim_ke') ?? $row->dikirim_ke ?>" class="form-control">
                        <div class="invalid-feedback">
                            <?php echo form_error('dikirim_ke') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" name="item" value="<?php echo $this->input->post('item') ?? $row->item ?>" class="form-control">
                        <div class="invalid-feedback">
                            <?php echo form_error('item') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" name="user" value="<?php echo $this->input->post('user') ?? $row->user ?>" class="form-control">
                        <div class="invalid-feedback">
                            <?php echo form_error('user') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Department</label>
                        <select name="department" class="form-control" value="<?php echo set_value('department') ?>">
                            <?php echo $department = $this->input->post('department') ? $this->input->post('department') : $row->department ?>
                            <option value="MIS ( Management Information System )">MIS (Management Information System)</option>
                            <option value="Maintenance" <?php echo $department == 'Maintenance' ? 'selected' : null ?>>Maintenance</option>
                            <option value="Electric" <?php echo $department == 'Electric' ? 'selected' : null ?>>Electric</option>
                            <option value="Wight and Bridge" <?php echo $department == 'Wight and Bridge' ? 'selected' : null ?>>Wight and Bridge</option>
                            <option value="Purchasing" <?php echo $department == 'Purchasing' ? 'selected' : null ?>>Purchasing</option>
                            <option value="Accounting " <?php echo $department == 'Accounting ' ? 'selected' : null ?>>Accounting </option>
                            <option value="EHS (Environment Health Safety)" <?php echo $department == 'EHS (Environment Health Safety)' ? 'selected' : null ?>>EHS (Environment Health Safety)</option>
                            <option value="Quality Control" <?php echo $department == 'Quality Control' ? 'selected' : null ?>>Quality Control</option>
                            <option value="Project" <?php echo $department == 'Project' ? 'selected' : null ?>>Project</option>
                            <option value="Shipping" <?php echo $department == 'Shipping' ? 'selected' : null ?>>Shipping</option>
                        </select>
                        <?php echo form_error('department') ?>
                    </div>

                    <div class="form-group">
                        <label>Unit</label>
                        <select name="unit" class="form-control" value="<?php echo set_value('unit') ?>">
                            <?php echo $unit = $this->input->post('unit') ? $this->input->post('unit') : $row->unit ?>
                            <option value="PT WINA(Wilmar Nabati)">PT WINA(Wilmar Nabati)</option>
                            <option value="PT WBI (Wilmar Bionergi Indonesia)" <?php echo $unit == 'PT WBI (Wilmar Bionergi Indonesia)' ? "selected" : null ?>>PT WBI (Wilmar Bionergi Indonesia)</option>
                            <option value="PT SADP (Sentana Adidaya Pratama)" <?php echo $unit == 'PT SADP (Sentana Adidaya Pratama)' ? "selected" : null ?>>PT SADP (Sentana Adidaya Pratama)</option>
                            <option value="PT WCI (Wilar Chemical Indonesia)" <?php echo $unit == 'PT WCI (Wilar Chemical Indonesia)' ? "selected" : null ?>>PT WCI (Wilar Chemical Indonesia)</option>
                            <option value="PT KID (Kawasan Industri Dumai)" <?php echo $unit == 'PT KID (Kawasan Industri Dumai)' ? "selected" : null ?>>PT KID (Kawasan Industri Dumai)</option>
                            <option value="PT PAN (Petro Andalan Nusantara)" <?php echo $unit == 'PT PAN (Petro Andalan Nusantara)' ? "selected" : null ?>>PT PAN (Petro Andalan Nusantara)</option>
                            <option value="PT MSS (Murni Samsam)" <?php echo $unit == 'PT MSS (Murni Samsam)' ? "selected" : null ?>>PT MSS (Murni Samsam)</option>
                            <option value="PT ABS (Antar Benua Sejati)" <?php echo $unit == 'PT ABS (Antar Benua Sejati)' ? "selected" : null ?>>PT ABS (Antar Benua Sejati)</option>
                            <option value="PT USJ (Usda Seroja Jaya)" <?php echo $unit == 'PT USJ (Usda Seroja Jaya)' ? "selected" : null ?>>PT USJ (Usda Seroja Jaya)</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('unit') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>S/N</label>
                        <input type="text" class="form-control" name="sn" value="<?php echo $this->input->post('sn') ?? $row->sn ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('sn') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Damage Item</label>
                        <textarea type="text" class="form-control" name="kerusakan"><?php echo $this->input->post('kerusakan') ?? $row->kerusakan ?></textarea>
                        <div class="invalid-feedback">
                            <?php echo form_error('kerusakan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <input type="text" class="form-control" name="remarks" value="<?php echo $this->input->post('remarks') ?? $row->remarks ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('remarks') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Number</label>
                        <input type="text" class="form-control" name="number" value="<?php echo $this->input->post('number') ?? $row->number ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('number') ?>
                        </div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-save"></i> Save</button>
                    <a href="<?php echo base_url('note') ?>" type="close" class="btn btn-icon icon-left btn-warning"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>