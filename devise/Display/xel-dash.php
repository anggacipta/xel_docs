<?php
include_once __DIR__ . '/sidebar/sidebar-dash.php';
?>

<?php
session_start();
if (isset($_SESSION['userid'])) {
?>
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="card-header text-light">
                        Table of Content Xel Documentation
                    </div>
                    <div class="card-body text-light">
                        <a href="/xel-dash/create" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered text-center table-dark table-responsive-md display" id="myTable">
                            <thead>
                            <tr>
                                <th scope="col">NO.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                            <?php foreach ($data as $id => $item): ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?= $item['title'];?></td>
                                    <td><?= substr_replace($item['content'], "...", 200);?></td>
                                    <td><?= $item['name'];?></td>
                                    <td class="text-center">
                                        <form action="/xel-dash/delete/<?= htmlspecialchars($item['id']); ?>" method="post">
                                            <!-- Use a button or link to trigger the form submission -->
                                            <a href="/xel-dash/edit/<?=$item['id'];?>" class="btn btn-sm btn-warning my-1">EDIT</a>
                                            <button type="submit" class="btn btn-sm btn-danger my-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
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
?>

<!-- Page Content -->
