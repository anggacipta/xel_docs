<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class database extends BaseService
{
    public function showConnectDatabase()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Connect Database');
        $this->render('sidebar-pages/databases/connect-database', $data, 'data');
    }

    public function showDatabaseConfig()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Database Config');
        $this->render('sidebar-pages/databases/database-config', $data, 'data');
    }

    public function showXgen()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Xgen');
        $this->render('sidebar-pages/databases/xgen', $data, 'data');
    }

}