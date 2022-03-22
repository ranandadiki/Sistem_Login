<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-900"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <font color="black">
                            <?= $user['name']; ?>
                        </font>
                    </h5>
                    <p class="card-text">
                        <font color="black">
                            <?= $user['email']; ?>
                        </font>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">
                            <font color="black">
                                Member since <?= date('A G:i:s, d F Y', $user['date_created']); ?>
                            </font>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->