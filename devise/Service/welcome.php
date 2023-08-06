<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class welcome extends BaseService
{
    public function showCredit()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Credit');
        $this->render('sidebar-pages/welcome/credit', $data, 'data');
    }

    public function showServerReq()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Server Requirement');
        $this->render('sidebar-pages/welcome/server-req', $data, 'data');
    }

    public function showWelcome()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Alpha 0.5');
        $this->render('sidebar-pages/welcome/welcome', $data, 'data');
    }
}