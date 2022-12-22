<?php 
	if(isset($_POST['submit'])){
		$newCity = new CityController();
		$newCity->addCity();
	}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Add City </div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2" >
                        <i class="fa fa-home"></i>
                    </a>
                <form method="post">
                    <div class="from-group">
                        <label for="city">City Name *</label>
                        <input type="text"  placeholder="City Name" name="city_name" class="form-control">
                    </div>
                    <div class="from-group">
                        <label for="contry">Country Id *</label>
                        <input type="text"  placeholder="Country ID" name="country_id" class="form-control">
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