<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class helpers extends BaseService
{
    public function showArrayHelper()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Array Helpers');
        $this->render('sidebar-pages/helpers/array-helper', $data, 'data');
    }

    public function showCookieHelper()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Cookie Helpers');
        $this->render('sidebar-pages/helpers/cookie-helper', $data, 'data');
    }
}