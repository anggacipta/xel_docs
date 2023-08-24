<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class database extends BaseService
{
    public function showSetupDatabase()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Setup Database');
        $this->render('sidebar-pages/databases/setup-database', $data, 'data');
    }

    public function showFutureDBMS()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Future DBMS');
        $this->render('sidebar-pages/databases/future-dbms', $data, 'data');
    }

    public function showXgenQuery()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Xgen Query Builder');
        $this->render('sidebar-pages/databases/xgen-builder', $data, 'data');
    }

}