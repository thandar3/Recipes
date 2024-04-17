<?php
require_once "./_classes/controller.php";

$food = $Recipe->connectBurmeseJson();

$id = $_GET['id'];

if(count($food) != 0 ){
    foreach($food as $foods){
        if($foods['id'] == $id){
            ?>
                <style>
        .contain{
            align-items: center;
            display: flex;
            justify-content: center;
        }
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <div class="row contain mt-5 ">
     <div class="card thingyan col-md-9 col-lg-6 col-sm-12" style="width: 18rem;height:700px display:flex;flex-wrap:wrap;">
          <img src="<?php echo $foods['Image']?>"  class="img-thunmbnail" alt="Mote Lo Yay Baw" style="border-radius:10px width:150px;height:200px;border-radius:15px">
    </div>
    <div class="col-md-3 col-lg-3 col-sm-12">
    <div class="card-body">
    <h5 class="card-title thingyan_tilte mb-3 fs-3" ><?php echo $foods['Name'] ?> <i class="fa-solid fa-pepper-hot ms-1"></i></h5>
    <label for="" class="fs-4 mb-2 text-primary">Ingredients</label>
    <h5 class="fs-6"><?php echo $foods['Ingredients']?></h5>
    <label for="" class="fs-5 mb-2 mt-2 text-primary">CookingTips</label>
    <h5 class="fs-6 mt-2"><?php echo $foods['CookingInstructions']?></h5>
    <label for="" class="fs-5 mb-2 mt-2 text-danger">Time for do </label>
    <h5><?php echo $foods['time']?></h5>
    <a href="index.php" class="btn btn-primary" style="margin-top:30px;">Back</a>
    </div>
    </div>
     </div>
            <?php
        }

    }
}

?>