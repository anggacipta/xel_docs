<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class utility extends BaseService
{
    public function showHelper()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Helper');
        $this->render('sidebar-pages/utility-class/helper', $data, 'data');
    }
}