<?php
class DB {
    public static function connect(){
        $host = 'localhost';
        $user = 'root';
        $pass='';
        $dbname='sakila';
        //set DSN
        $dsn = 'mysql:host='. $host . ';dbname=' . $dbname; 
        //Create a pdo instance
        $db = new PDO($dsn, $user, $pass);
      //  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $db;
    }
}
?>