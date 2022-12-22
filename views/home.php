<?php
require_once "controllers/CityController.php";
require_once "Config.php";
$data = new CityController();
$citys = $data->getAllCitys();
//print_r($citys);

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg light">
                    <a href="<?php echo BASE_URL;?>views/add.php" class="btn btn-sm btn-primary mr-2 mb-2" >
                    <i class="fas fa-plus"></i>
                    
                    </a>
                  <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">City</th>
                            <th scope="col">Country Id</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach($citys as $city): ?>
                            <tr>
                                <th scope="row"><?php echo $city['city_id'];?></th>
                                <td><?php echo $city['city'];?></td>
                                <td><?php echo $city['country_id'];?></td>
                                <td class="d-flex flex-row"> 
                                    <form methode="post" class="mx-2" action="/3i/PDO/app/views/update.php">
                                        <input type="hidden" name="id" value="<?php echo $city['city_id'];?>">
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form methode="post" action="/3i/PDO/app/views/delete.php">
                                        <input type="hidden" name="id" value="<?php echo $city['city_id'];?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                   </table>
                </div>
            </div>
     
        </div>
    </div>
</div>