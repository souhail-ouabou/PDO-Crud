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
        $query = 'SELECT * FROM city WHERE city_id=:id';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $city = $stmt->fetch(PDO::FETCH_OBJ);
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
}

?>
