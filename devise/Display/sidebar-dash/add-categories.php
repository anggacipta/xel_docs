<?php
include_once __DIR__ . '/../sidebar/sidebar-dash.php';
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Categories</div>
                <div class="card-body">
                    <form action="/xel-dash/insert/categories" method="POST">
                        <div class="form-group">
                            <label>Categories</label>
                            <input type="text" name="categories" id="title" placeholder="Enter the new categories" class="form-control mb-3" />
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
