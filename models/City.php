<?php
require_once "DB/DB.php";
class City{
     static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM city');
        $stmt->execute();
         return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
}}
?>
