<?php

namespace setup\interface;

interface appXgen {
    /*
        This is an interface function witch used for integrate indirectly
        between xgen core system with service layer and basedata.
    */
    public function show(string $table);
    public function showById(string $table, int $id);
    public function showByCondition(string $table, string $condition, int|float|string $value);
    public function showInnerJoin(string $table1, string $table2, string $column1, string $column2);
    public function showCategories(string $table1, string $table2, string $column1, string $column2);
    public function showCategoriesId(string $table, int $id);
    public function insert(array $data, string $table);
    public function renew(array $data, string $table, int $recordId);
    public function renewCategories(array $data, string $table, $recordId);
    public function destroy(string $table, int $id);
    public function destroyCategories(string $table, int $id);
}