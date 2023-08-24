<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class bsd extends BaseService
{
    public function showBasedata()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Basedata');
        $this->render('sidebar-pages/bsd/basedata', $data, 'data');
    }

    public function showService()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Service');
        $this->render('sidebar-pages/bsd/basedata', $data, 'data');
    }

    public function showDisplay()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Display');
        $this->render('sidebar-pages/bsd/basedata', $data, 'data');
    }
}