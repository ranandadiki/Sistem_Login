<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-900"><?= $title; ?></h1>
    <form action="" method="post">
        <div class="modal-body">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $submenuid['id']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" value="<?= $submenuid['title']; ?>">
            </div>
            <div class="form-group">
                <select name="menu_id" id="menu_id" class="form-control">
                    <option value="<?= $submenuid['menu_id']; ?>">Select Menu</option>
                    <?php foreach ($menu as $m) : ?>
                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="url" name="url" value="<?= $submenuid['url']; ?>">
            </div>
            <div class=" form-group">
                <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenuid['icon']; ?>">
            </div>
            <div class=" form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                    <label class="form-check-label" for="is_active">
                        Active?
                    </label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>