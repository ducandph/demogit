<?php
function pdo_get_connection(){
    $servername = "localhost:3307";
    $username = "anhnd";
    $password = "";
    try {
        $connection = new PDO("mysql:host=$servername;dbname=duanmot", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
function pdo_execute($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $connection=pdo_get_connection();
        $stmt=$connection->prepare($sql);
        $stmt->execute($sql_args);

    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connection);
    }
}
function pdo_execute_return_lastInsertId($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $connection=pdo_get_connection();
        $stmt=$connection->prepare($sql);
        $stmt->execute($sql_args);
        return $connection->lastInsertId();

    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connection);
    }
}
// truy vấn nhiều dữ liệu
function pdo_query($sql){
    $sql_args=array_slice(func_get_args(),1);

    try{
        $connection=pdo_get_connection();
        $stmt=$connection->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connection);
    }
}
// truy vấn  1 dữ liệu
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $connection=pdo_get_connection();
        $stmt=$connection->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
       
        // đọc và hiển thị giá trị trong danh sách trả về
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connection);
    }
}
pdo_get_connection();
?>