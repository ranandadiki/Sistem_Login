<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $roleid['id']; ?>">
            <input type="text" class="form-control" id="role" name="role" value="<?= $roleid['role']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form> 