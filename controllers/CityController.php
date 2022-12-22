<?php
require_once "models/City.php";
class CityController{
    public function getAllCitys(){
        $citys = City::getAll();
        return $citys;
    }

}


?>