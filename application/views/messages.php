<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show hide-it" role="alert">
        <strong><i class="far fa-check-circle"></i></strong> <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php } ?>