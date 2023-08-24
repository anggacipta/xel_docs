<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class security extends BaseService
{
    public function showGemstoneCSRF()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Gemstone Mechanism (CSRF) Protection');
        $this->render('sidebar-pages/security/gemstone-csrf', $data, 'data');
    }

    public function showGemstoneXSS()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Gemstone Request Handler (XSS protection Build-in)');
        $this->render('sidebar-pages/security/gemstone-xss', $data, 'data');
    }

}