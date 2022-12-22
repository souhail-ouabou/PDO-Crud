<?php 
	if(isset($_POST['id'])){
		$exitCity = new CityController();
		$exitCity->deleteCity();
	}
?>