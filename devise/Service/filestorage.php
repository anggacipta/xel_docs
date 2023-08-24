<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class filestorage extends BaseService
{
    public function showFileStorage()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Files Storage Processing (Available on 0.9 Alpa Version)');
        $this->render('sidebar-pages/file-storage/file-storage-processing', $data, 'data');
    }
}