<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class unittesting extends BaseService
{
    public function showUnitTesting()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'PHPUnit Test Integration');
        $this->render('sidebar-pages/testing/unit-test' , $data, 'data');
    }
}