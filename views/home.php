<?php
require_once "controllers/CityController.php";
$data = new CityController();
$citys = $data->getAllCitys();
//print_r($citys);
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg light">
                  <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">City</th>
                            <th scope="col">Country Id</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach($citys as $city): ?>
                            <tr>
                                <th scope="row"><?php echo $city['city_id'];?></th>
                                <td><?php echo $city['city'];?></td>
                                <td><?php echo $city['country_id'];?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                   </table>
                </div>
            </div>
     
        </div>
    </div>
</div>