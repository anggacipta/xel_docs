<?php
include_once __DIR__ . '/../sidebar/sidebar-dash.php';
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Content</div>
                <div class="card-body">
                    <form action="/xel-dash/insert" method="POST">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" placeholder="Enter the new title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="elm1" name="content"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Category</label>
                            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                                <?php foreach ($data as $id => $value): ?>
                                    <option value="<?= $value['category_id']?>"><?= $value['name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">CREATE</button>
                        <button type="reset" class="btn btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
