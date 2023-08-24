<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class routing extends BaseService
{
    public function showOverview()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Overview');
        $this->render('sidebar-pages/routing/overview', $data, 'data');
    }

    public function showRouterGemstone()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Router with Gemstone Implementation (V1 Alpha Concept)');
        $this->render('sidebar-pages/routing/router-gemstone', $data, 'data');
    }

    public function showMiddleware()
    {
        $data = $this->connect()->showByCondition('documentation', 'title', 'Middleware');
        $this->render('sidebar-pages/routing/middleware', $data, 'data');
    }
}