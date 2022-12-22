<?php 
	if(isset($_POST['id'])){
      //  echo ($_POST['id']);
		$exitCity = new CityController();
		$city = $exitCity->getOneCity();
	}
	if(isset($_POST['submit'])){
      //  echo ($_POST['id']);
		$exitCity = new CityController();
	    $exitCity->updateCity();
	}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Update City </div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2" >
                        <i class="fa fa-home"></i>
                    </a>
                <form method="post">
                    <div class="from-group">
                        <label for="city">City Name *</label>
                        <input type="text"  placeholder="City Name" name="city_name" class="form-control" value="<?php echo $city->city ;?>">
                        <input type="hidden" name="id" value="<?php echo $city->city_id;?>">

                    </div>
                    <div class="from-group">
                        <label for="contry">Country Id </label>
                        <input  type="text"  placeholder="Country ID" name="country_id" class="form-control" value="<?php echo $city->country_id ;?>">
                    </div>   
                    <div class="from-group">
                        <label for="contry">Country Name *</label>
                        <input disabled type="text"  placeholder="Country Name" name="country_name" class="form-control" value="<?php echo $city->country ;?>">
                    </div>   
                    <div class="form-group my-2">
                         <button type= "submit" class= "btn btn-primary" name="submit">Valider</button>                       
                     </div>
                </form>
                </div>
            </div>
     
        </div>
    </div>
</div>