<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="mb-4"><a href="<?php echo base_url('note') ?>"><i class="fas fa-arrow-left"></i></a> Back</div>
        <div class="card">
            <form action="#" method="POST">
                <div class="card-header">
                    <h4>Input Data Note Here</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="tanggal">Date</label>
                        <input type="date" class="form-control datepicker <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" name="tanggal" value="<?php echo set_value('tanggal') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('tanggal') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Send To</label>
                        <input type="text" class="form-control <?php echo form_error('dikirim_ke') ? 'is-invalid' : '' ?>" name=" dikirim_ke" value="<?php echo set_value('dikirim_ke') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('dikirim_ke') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" class="form-control <?php echo form_error('item') ? 'is-invalid' : '' ?>" name="item" value="<?php echo set_value('item') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('item') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <input type="text" class="form-control <?php echo form_error('user') ? 'is-invalid' : '' ?>" name="user" value="<?php echo set_value('user') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('user') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Department</label>
                        <select name="department" class="form-control <?php echo form_error('department') ? 'is-invalid' : '' ?>" value="<?php echo set_value('department') ?>">
                            <option value="">- Pilih -</option>
                            <option value="MIS (Management Information System)" <?php echo set_value('department') == 1 ? "selected" : null ?>>MIS (Management Information System) </option>
                            <option value="Maintenance" <?php echo set_value('department') == 2 ? "selected" : null ?>>Maintenance</option>
                            <option value="Electric" <?php echo set_value('department') == 3 ? "selected" : null ?>>Electric</option>
                            <option value="WB (Wight and Bridge)" <?php echo set_value('department') == 4 ? "selected" : null ?>>WB (Wight and Bridge)</option>
                            <option value="Purchasing" <?php echo set_value('department') == 5 ? "selected" : null ?>>Purchasing</option>
                            <option value="Accounting" <?php echo set_value('department') == 6 ? "selected" : null ?>>Accounting</option>
                            <option value="EHS ( Environment Health Safety )" <?php echo set_value('department') == 7 ? "selected" : null ?>>EHS ( Environment Health Safety )</option>
                            <option value="Quality Control" <?php echo set_value('department') == 8 ? "selected" : null ?>>Quality Control</option>
                            <option value="Project" <?php echo set_value('department') == 9 ? "selected" : null ?>>Project</option>
                            <option value="Shipping" <?php echo set_value('department') == 10 ? "selected" : null ?>>Shipping</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('department') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Unit</label>
                        <select name="unit" class="form-control <?php echo form_error('unit') ? 'is-invalid' : '' ?>" value="<?php echo set_value('unit') ?>">
                            <option value="">- Pilih -</option>
                            <option value="PT WINA(Wilmar Nabati )" <?php echo set_value('unit') == 1 ? "selected" : null ?>>PT WINA(Wilmar Nabati )</option>
                            <option value="PT WBI (Wilmar Bionergi Indonesia)" <?php echo set_value('unit') == 2 ? "selected" : null ?>>PT WBI (Wilmar Bionergi Indonesia)</option>
                            <option value="PT WCI (Wilar Chemical Indonesia)" <?php echo set_value('unit') == 3 ? "selected" : null ?>>PT WCI (Wilar Chemical Indonesia)</option>
                            <option value="PT WBI (Wilmar Bionergi Indonesia)" <?php echo set_value('unit') == 4 ? "selected" : null ?>>PT WBI (Wilmar Bionergi Indonesia)</option>
                            <option value="PT KID (Kawasan Industri Dumai)" <?php echo set_value('unit') == 5 ? "selected" : null ?>>PT KID (Kawasan Industri Dumai)</option>
                            <option value="PT PAN (Petro Andalan Nusantara)" <?php echo set_value('unit') == 6 ? "selected" : null ?>>PT PAN (Petro Andalan Nusantara)</option>
                            <option value="PT MSS (Murni Samsam)" <?php echo set_value('unit') == 7 ? "selected" : null ?>>PT MSS (Murni Samsam)</option>
                            <option value="PT ABS (Antar Benua Sejati)" <?php echo set_value('unit') == 8 ? "selected" : null ?>>PT ABS (Antar Benua Sejati)</option>
                            <option value="PT USJ (Usda Seroja Jaya)" <?php echo set_value('unit') == 9 ? "selected" : null ?>>PT USJ (Usda Seroja Jaya)</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('unit') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>S/N</label>
                        <input type="text" class="form-control <?php echo form_error('sn') ? 'is-invalid' : '' ?>" name="sn" value="<?php echo set_value('sn') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('sn') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Damage Item</label>
                        <textarea type="text" class="form-control <?php echo form_error('kerusakan') ? 'is-invalid' : '' ?>" name="kerusakan"><?php echo set_value('kerusakan') ?></textarea>
                        <div class="invalid-feedback">
                            <?php echo form_error('kerusakan') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <input type="text" class="form-control <?php echo form_error('remarks') ? 'is-invalid' : '' ?>" name="remarks" value="<?php echo set_value('remarks') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('remarks') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Number</label>
                        <input type="text" class="form-control <?php echo form_error('number') ? 'is-invalid' : '' ?>" name="number" value="<?php echo set_value('number') ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('number') ?>
                        </div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-save"></i> Save</button>
                    <button type="reset" class="btn btn-icon icon-left btn-warning"><i class="fas fa-undo"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>