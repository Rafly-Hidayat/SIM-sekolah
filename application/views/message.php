<?php if ($this->session->has_userdata('success')) : ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button class="close" data-dismiss="alert">&times;</button>
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>