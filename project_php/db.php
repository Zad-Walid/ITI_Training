<?php

class db{

private $host="localhost";
private $dbname="web";
private $username="root";
private $password="";
private $connection="";


function __construct(){
    $this->connection =  new pdo("mysql:host=$this->host;dbname=$this->dbname","$this->username","$this->password");

}

function get_connection(){
    return $this->connection;
}

function get_data($table_name , $condition = 1){

    return $this->connection->query("select * from $table_name where $condition");
    
}


function delete_data($table_name , $condition = 1){

    return $this->connection->query("delete from $table_name where $condition");
    
}


function insert_data($table_name , $col_name ,$col_value){

    return $this->connection->query("insert into $table_name
    ($col_name) values ($col_value)
    ");    
}


function update_data($table_name , $columns ,$condition) {
    if (isset($_POST['update'])){

      return $this->connection->query("update $table_name set $columns
       where $condition
    "); 

    }
}




}





?>