
<?php 
require_once "./_classes/controller.php";

$food = $Recipe->connectJson();

if(count($food) != 0 ){
    foreach($food as $foods)
    {
    ?>
    <style>
        .contain{
            align-items: center;
            display: flex;
            justify-content: center;
        }
    </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <div class="row contain mb-5">
     <div class="card thingyan col-md-9 col-lg-6 col-sm-12" style="width: 18rem;height:700px display:flex;flex-wrap:wrap;">
          <img src="<?php echo $foods['Image']?>"  class="img-thunmbnail" alt="Mote Lo Yay Baw" style="border-radius:10px width:150px;height:200px;border-radius:15px">
    </div>
    <div class="col-md-3 col-lg-3 col-sm-12">
    <div class="card-body">
    <h5 class="card-title thingyan_tilte" ><?php echo $foods['Name'] ?> <i class="fa-solid fa-pepper-hot ms-1"></i></h5>
            <a href="thingyanDetail.php?id=<?php echo $foods['id']?>" class="btn btn-primary" style="margin-top:30px;">See Detail</a>
    </div>
    </div>
     </div>
  <?php
    }
}
   
?>

