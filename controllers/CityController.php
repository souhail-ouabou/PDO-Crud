<?php
class CityController{
    public function getAllCitys(){
        $citys = City::getAll();
        return $citys;
    }
    public function addCity(){
        if(isset($_POST['submit'])){   
        $data = array(
        'city_name' => $_POST['city_name'],
        'country_id' => $_POST['country_id'],
        );
            $result = City::add($data);    
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }
            else{
                echo $result;
            }
    }        
    }
    public function updateCity(){
        if(isset($_POST['submit'])){   
        $data = array(
        'id' => $_POST['id'],
        'city_name' => $_POST['city_name'],
        'country_id' => $_POST['country_id'],
        );
            $result = City::update($data);    
            if($result === 'ok'){
                header('location:'.BASE_URL);
            }
            else{
                echo $result;
            }
    }        
    }
    public function getOneCity(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$city = City::getCity($data);
			return $city;
		}
	}
    public function deleteCity(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = City::delete($data);
			if($result === 'ok'){
				header('location:'.BASE_URL);
			}else{
				echo $result;
			}
		}
	}
}
?>