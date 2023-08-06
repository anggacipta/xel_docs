<?php
include_once __DIR__ . '/../sidebar/sidebar-dash.php';
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Content</div>
                <div class="card-body">
                    <form action="/xel-dash/update/<?=$value['id'];?>" method="POST">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" value="<?= $value['title']?>" placeholder="Enter the new title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="elm1" name="content"><?=$value['content'];?></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Category</label>
                            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                                <option value="<?= $value['category_id']?>"><?= $value['category_id']?></option>
                            </select>
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
