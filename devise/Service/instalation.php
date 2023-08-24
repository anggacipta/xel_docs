<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class instalation extends BaseService
{
    public function showAppServer()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'App Server');
        $this->render('sidebar-pages/installation/app-server', $data, 'data');
    }

    public function showApacheServer()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Apache Server');
        $this->render('sidebar-pages/installation/apache-server', $data, 'data');
    }

    public function showComposer()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Composer');
        $this->render('sidebar-pages/installation/composer', $data, 'data');
    }
}