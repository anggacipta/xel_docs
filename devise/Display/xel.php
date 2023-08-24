<?php
include_once __DIR__ . '/sidebar/sidebar.php';
?>

<!-- Page Content -->
<div id="content" class="p-4 p-md-5 pt-5">
    <?php foreach ($data as $id => $item): ?>
        <h2 class="mb-4"><?= $item['title'] ?></h2>
        <p><?= $item['content'] ?></p>
    <?php endforeach; ?>
</div>
</div>
