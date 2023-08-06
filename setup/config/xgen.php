<?php

namespace setup\config;

use setup\system\core\xgenconf;
use setup\interface\appXgen;
class xgen extends xgenconf implements appXgen{

    /**
     * @param string $table
     * @return mixed
     */
    public function show(string $table)
    {
        return  $this->selectAll($table);
        // TODO: Implement show() method.
    }


    public function showById(string $table, $id)
    {
        return $this->selectById($id, $table);
        // TODO: Implement showById() method.
    }

    public function showByCondition(string $table, string $condition, float|int|string $value)
    {
        return $this->selectByCondition($condition, $table, $value);
        // TODO: Implement showByCondition() method.
    }

    public function showInnerJoin(string $table1, string $table2, string $column1, string $column2)
    {
        return $this->selectInnerJoin($table1, $table2, $column1, $column2);
        // TODO: Implement showInnerJoin() method.
    }

    public function showCategories(string $table1, string $table2, string $column1, string $column2)
    {
        return $this->selectCategories($table1, $table2, $column1, $column2);
        // TODO: Implement showCategories() method.
    }

    public function showCategoriesId(string $table, $id)
    {
        return $this->selectByCategoryId($table, $id);
        // TODO: Implement showById() method.
    }

    /**
     * @param array $data
     * @param string $table
     * @param int $recordId
     * @return mixed
     */
    public function renew(array $data, string $table, $recordId)
    {
        return $this->update($data,$table,$recordId);
        // TODO: Implement renew() method.
    }

    /**
     * @param array $data
     * @param string $table
     * @param int $recordId
     * @return mixed
     */
    public function renewCategories(array $data, string $table, $recordId)
    {
        return $this->updateCategories($data,$table,$recordId);
        // TODO: Implement renewCategories() method.
    }

    /**
     * @param string $table
     * @param  $id
     * @return mixed
     */
    public function destroyCategories(string $table, $id)
    {
        return $this->deleteCategories($table,$id);
        // TODO: Implement destroy() method.
    }

    /**
     * @param string $table
     * @param  $id
     * @return mixed
     */
    public function destroy(string $table, $id)
    {
        return $this->delete($table,$id);
        // TODO: Implement destroy() method.
    }

    /**
     * @param array $data
     * @param string $table
     * @return mixed
     */
    public function insert(array $data, string $table)
    {
        return $this->insertdata($data,$table);
        // TODO: Implement insert() method.
    }
}