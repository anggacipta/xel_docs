<?php

namespace devise\Service;

use setup\baseclass\BaseService;

class xeldocs extends BaseService
{
    public function xeltest() {
        $this->render('xel');
    }

    public function xeldash() {
        $data = $this->connect()->showInnerJoin('documentation', 'categories', 'category_id', 'category_id');
        $this->render('xel-dash', $data, 'data');
    }

    public function createXel() {
        $data = $this->connect()->showCategories('documentation', 'categories', 'category_id', 'category_id');
        $this->render('sidebar-dash/add-xel', $data, 'data');
    }

    public function insertXel() {
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'category_id' => $_POST['category_id'],
        ];

        $this->connect()->insert($data, 'documentation');
        header('Location:/xel-dash');
    }

    public function editXel($variables){
        $data2 = $this->connect()->showById('documentation', $variables);
        $this->render('sidebar-dash/edit-xel', $data2, 'data');
    }

    public function updateXel($variables){
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'category_id' => $_POST['category_id']
        ];

        $this->connect()->renew($data, 'documentation', $variables);
        header('Location:/xel-dash');
    }

    public function deleteXel($variables) {
        $this->connect()->destroy('documentation', $variables);
        header('Location:/xel-dash');
    }

    public function showCategories() {
        $data = $this->connect()->show('categories');
        $this->render('sidebar-dash/categories', $data, 'data');
    }

    public function createCategories() {
        $this->render('sidebar-dash/add-categories');
    }

    public function insertCategories() {
        $data = [
            'name' => $_POST['categories'],
        ];

        $this->connect()->insert($data, 'categories');
        header('Location:/xel-dash/categories');
    }

    public function editCategories($variables){
        $data2 = $this->connect()->showCategoriesId('categories', $variables);
        $this->render('sidebar-dash/edit-categories', $data2, 'data');
    }

    public function updateCategories($variables){
        $data = [
            'name' => $_POST['categories'],
        ];

        $this->connect()->renewCategories($data, 'categories', $variables);
        header('Location:/xel-dash/categories');
    }

    public function deleteCategories($variables) {
        $this->connect()->destroyCategories('categories', $variables);
        header('Location:/xel-dash/categories');
    }
}