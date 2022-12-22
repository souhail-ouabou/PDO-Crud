<?php
class City{
     static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM city');
        $stmt->execute();
         return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
}

static public function getCity($data){
    $id = $data['id'];
    try{
      
        $query = 'SELECT * FROM city,country WHERE city.country_id = country.country_id AND city_id=:id';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $city = $stmt->fetch(PDO::FETCH_OBJ);
      //  print_r($city);
        return $city;
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}


static public function add($data){
$sql = 'INSERT INTO city(city,country_id) VALUES (:city,:country_id)';
 $stmt = DB::connect()->prepare($sql);
 $stmt->bindParam(':city',$data['city_name']);
 $stmt->bindParam(':country_id',$data['country_id']);
// $stmt->execute(['city' => $city, 'country_id' => $country_id]);
    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error';
    }
    $stmt->close();
    $stmt = null;
    }
static public function update($data){
$sql = 'UPDATE city SET city =:city ,country_id =:country_id WHERE city_id= :id';
 $stmt = DB::connect()->prepare($sql);
 $stmt->bindParam(':id',$data['id']);
 $stmt->bindParam(':city',$data['city_name']);
 $stmt->bindParam(':country_id',$data['country_id']);
// $stmt->execute(['city' => $city, 'country_id' => $country_id]);
    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error';
    }
    $stmt->close();
    $stmt = null;
    }
    static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM city WHERE city_id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
}

?>
