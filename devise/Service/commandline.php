<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class commandline extends BaseService
{
    public function showCommandLine()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Command Line Usage');
        $this->render('sidebar-pages/cli', $data, 'data');
    }
}