<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class composerinstall extends BaseService
{
    public function showInstalation()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Composer Instalation');
        $this->render('sidebar-pages/installation/composer-instalation', $data, 'data');
    }

    public function showRunningApp()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Running App');
        $this->render('sidebar-pages/installation/running-app', $data, 'data');
    }
}