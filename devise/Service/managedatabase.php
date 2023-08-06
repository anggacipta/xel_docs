<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class managedatabase extends BaseService
{
    public function showDatabaseCommand()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Database Command');
        $this->render('sidebar-pages/manage-database/database-command', $data, 'data');
    }

    public function showDatabaseMigration()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Database Migrate');
        $this->render('sidebar-pages/manage-database/database-migrate', $data, 'data');
    }

    public function showDatabaseSeed()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Database Seed');
        $this->render('sidebar-pages/manage-database/database-seed', $data, 'data');
    }
}