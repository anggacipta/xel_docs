<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class routing extends BaseService
{
    public function showAddRoute()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Add Route');
        $this->render('sidebar-pages/routing/add-route', $data, 'data');
    }

    public function showRequestClass()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Request Class');
        $this->render('sidebar-pages/routing/request-class', $data, 'data');
    }
}