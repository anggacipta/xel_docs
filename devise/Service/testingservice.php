<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class testingservice extends BaseService
{
    public function showDatabaseTesting()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Database Testing');
        $this->render('sidebar-pages/testing/database', $data, 'data');
    }

    public function showGenerateData()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Generate Data');
        $this->render('sidebar-pages/testing/generate-data', $data, 'data');
    }

}