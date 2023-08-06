<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class security extends BaseService
{
    public function showAuth()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Auth');
        $this->render('sidebar-pages/security/auth', $data, 'data');
    }

    public function showEncrypt()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Encrypt');
        $this->render('sidebar-pages/security/encrypt', $data, 'data');
    }

    public function showHash()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Hash');
        $this->render('sidebar-pages/security/hash', $data, 'data');
    }

    public function showStonegem()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Stonegems');
        $this->render('sidebar-pages/security/stonegem', $data, 'data');
    }
}