<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class helpers extends BaseService
{
    public function showArrayHelper()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Array Helpers');
        $this->render('sidebar-pages/utility-class/array-helper', $data, 'data');
    }

}