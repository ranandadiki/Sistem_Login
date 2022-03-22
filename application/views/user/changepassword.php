<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-900"><?= $title; ?></h1>
</div>
<!-- /.container-fluid -->

<div class="row ml-3">
    <div class="col-lg-6">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('user/changepassword'); ?>" method="post">
            <div class="form-group">
                <label for="current_password">
                    <font color="black">
                        Current Password
                    </font>
                </label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="newpassword1">
                    <font color="black">
                        New Password
                    </font>
                </label>
                <input type="password" class="form-control" id="newpassword1" name="newpassword1">
                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="newpassword2">
                    <font color="black">
                        Repeat Password
                    </font>
                </label>
                <input type="password" class="form-control" id="newpassword2" name="newpassword2">
                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>

        </form>
    </div>
</div>

</div>
<!-- End of Main Content -->