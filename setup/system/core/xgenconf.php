<?php

namespace setup\system\core;
use setup\config\BaseConn;
use PDO;

class xgenconf{
    public function connection():PDO {
        $instance = new BaseConn();
        return $instance->getPDO();
    }

    // select all
    protected function selectAll(string $table) {

        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM ".$table);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "query error :" . $exception->getMessage();
        }
    }
    // select by id
    protected function selectById($id,string $table) {
        try {
            $get = $id['id'];
            $data = intval($get);
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM ".$table." where id = :id");
            $stmt->bindValue(':id', $data, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "query error :" . $exception->getMessage();
        }
    }

    protected function selectByCondition(string $condition, string $table, int|float|string $value){
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $stmt = $conn->prepare("SELECT * FROM ".$table." where $condition = :value");
            $stmt->bindValue(':value', $value);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "querry error :" . $exception->getMessage();
        }
    }

    protected function selectInnerJoin(string $table1, string $table2, string $column1, string $column2){
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $stmt = $conn->prepare("SELECT * FROM ".$table1." INNER JOIN ".$table2." ON ".$table1.".".$column1." = ".$table2.".".$column2." GROUP BY documentation.id");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "querry error :" . $exception->getMessage();
        }
    }

    protected function selectCategories(string $table1, string $table2, string $column1, string $column2){
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $stmt = $conn->prepare("SELECT * FROM ".$table1." RIGHT JOIN ".$table2." ON ".$table1.".".$column1." = ".$table2.".".$column2." GROUP BY ".$table2.".".$column2);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "querry error :" . $exception->getMessage();
        }
    }

    protected function selectByCategoryId(string $table, $id){
        try {
            $get = $id['id'];
            $data = intval($get);
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM ".$table." where category_id = :id");
            $stmt->bindValue(':id', $data, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $exception) {
            echo "query error :" . $exception->getMessage();
        }
    }

    // insert
    protected function insertdata(string $table, array $data) {
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Set PDO attribute to use unbuffered queries
            $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

            $fields = array_keys($data);
            $placeholders = ":" . implode(", :", $fields);

            $sql = "INSERT INTO $table (" . implode(", ", $fields) . ") VALUES (" . $placeholders . ")";
            $stmt = $conn->prepare($sql);

            // Bind each value from the $data array to the corresponding placeholder in the SQL statement
            foreach ($data as $field => $value) {
                $stmt->bindValue(":$field", $value);
            }
            $stmt->execute();
            echo "query success";
        } catch (\PDOException $exception) {
            echo "query error: " . $exception->getMessage();
        }
    }

    // update
    public function update(array $data, string $table, $recordId)
    {
        try {
            $get = $recordId['id'];

            $item = intval($get);

            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Build the SET part of the UPDATE statement with column=value pairs
            $setValues = [];
            foreach ($data as $field => $value) {
                $setValues[] = "$field = :$field";
            }
            $setClause = implode(", ", $setValues);

            $sql = "UPDATE $table SET $setClause WHERE id = :record_id";
            $stmt = $conn->prepare($sql);

            // Bind each value from the $data array to the corresponding placeholder in the SQL statement
            foreach ($data as $field => $value) {
                $stmt->bindValue(":$field", $value);
            }

            // Bind the recordId to the placeholder :record_id
            $stmt->bindValue(":record_id", $item, PDO::PARAM_INT);

            $stmt->execute();
            echo "Query successful";
        } catch (\PDOException $exception) {
            echo "Query error: " . $exception->getMessage();
        }
    }

    protected function updateCategories(array $data, string $table, $recordId) {
        try {
            $get = $recordId['id'];

            $item = intval($get);

            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Build the SET part of the UPDATE statement with column=value pairs
            $setValues = [];
            foreach ($data as $field => $value) {
                $setValues[] = "$field = :$field";
            }
            $setClause = implode(", ", $setValues);

            $sql = "UPDATE $table SET $setClause WHERE category_id = :record_id";
            $stmt = $conn->prepare($sql);

            // Bind each value from the $data array to the corresponding placeholder in the SQL statement
            foreach ($data as $field => $value) {
                $stmt->bindValue(":$field", $value);
            }

            // Bind the recordId to the placeholder :record_id
            $stmt->bindValue(":record_id", $item, PDO::PARAM_INT);

            $stmt->execute();
            echo "Query successful";
        } catch (\PDOException $exception) {
            echo "Query error: " . $exception->getMessage();
        }
    }

    // delete
    protected function delete(string $table, $id) {
        try {
            $get = $id['id'];
            $data = intval($get);
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("DELETE FROM ".$table." where id = :id");
            $stmt->bindParam(':id', $data, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo "Query error: " . $exception->getMessage();
        }
    }

    protected function deleteCategories(string $table, $id) {
        try {
            $get = $id['id'];
            $data = intval($get);
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("DELETE FROM ".$table." where category_id = :id");
            $stmt->bindParam(':id', $data, PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo "Query error: " . $exception->getMessage();
        }
    }

    protected function createNewUser(array $data){
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Set PDO attribute to use unbuffered queries
            $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

            $fields = array_keys($data);
            $placeholders = ":" . implode(", :", $fields);

            $sql = "INSERT INTO users (" . implode(", ", $fields) . ") VALUES (" . $placeholders . ")";
            $stmt = $conn->prepare($sql);

            // Bind each value from the $data array to the corresponding placeholder in the SQL statement
            foreach ($data as $field => $value) {
                $stmt->bindValue(":$field", $value);
            }
            $stmt->execute();
            echo "query success";
        } catch (\PDOException $exception) {
            echo "query error: " . $exception->getMessage();
        }
    }

    protected function checkUser($username)
    {
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $stmt = $conn->prepare("SELECT * FROM users where username = :value");
            $stmt->bindValue(':value', $username);
            $stmt->execute();

            $resultCheck = '';
            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            }
            else {
                $resultCheck = true;
            }

            return $resultCheck;
        } catch (\PDOException $exception) {
            echo "querry error :" . $exception->getMessage();
        }
    }

    protected function loginUser($username, $password)
    {
        try {
            $conn = $this->connection();
            $conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $stmt = $conn->prepare("SELECT password FROM users where username = :value");
            $stmt->bindValue(':value', $username);
            $stmt->execute();

           if ($stmt->rowCount() == 0)
           {
               $stmt = null;
               header('Location:/xel/admin/login?error=usernotfound');
               exit();
           }

           $hashpwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
           $check_password = password_verify($password, $hashpwd[0]['password']);

           if ($check_password == false)
           {
               $stmt = null;
               header('Location:/xel/admin/login?error=wrongpassword');
               exit();
           } elseif ($check_password == true) {
               $conn = $this->connection();
               $conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
               $stmt = $conn->prepare("SELECT * FROM users where username = :value");
               $stmt->bindValue(':value', $username);
               $stmt->execute();

//               if ($stmt->rowCount() == 0)
//               {
//                   $stmt = null;
//                   header('Location:/xel/admin/login?error=usernotfound');
//                   exit();
//               }

               $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

               $stmt = null;
           }
           $stmt = null;

        } catch (\PDOException $exception) {
            echo "querry error :" . $exception->getMessage();
        }
    }

}