<?php
include_once __DIR__ . '/../sidebar/sidebar-dash.php';
?>

<?php
session_start();
if (isset($_SESSION['userid'])) {
?>

    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Categories</div>
                    <div class="card-body">
                        <form action="/xel-dash/update/categories/<?=$value['category_id'];?>" method="POST">
                            <div class="form-group">
                                <label>Categories</label>
                                <input type="text" name="categories" id="title" value="<?= $value['name']?>" placeholder="Enter the new categories" class="form-control mb-3" />
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php
} else {
    header('Location:/xel/admin/login');
}
echo $_SESSION['userid'];
?>


