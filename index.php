<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container">
          <a href="" class="icon-btn btn btn-outline-dark dark-color"><i class="fa-regular fa-lemon"></i></a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="">
              <h4 class="justify-content-center flex-grow-1 pe-3 title1">Let's Cook <i class="fa-solid fa-utensils ms-2 text-"></i></h4>
            </div>
          </div>
          <a href="" class="icon-btn btn btn-outline-dark dark-color"><i class="fa-regular fa-lemon"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <!-- kinds of recipes  -->
    <div class="row cards mb-4">
      <div class="col-md-3 col-sm-12 col-lg-3 mb-2" style="border-radius:10px;">
      <div class="card thingyan" style="width: 18rem;height:700px">
          <img src="images/moteloan.jpg" class="img-thunmbnail" alt="Mote Lo Yay Baw" style="border-radius:10px">
          <div class="card-body">
            <h5 class="card-title thingyan_tilte" >Thingyan Foods <i class="fa-solid fa-pepper-hot ms-1"></i></h5>
            <p class="card-text">Thingyan, also known as the Burmese Water Festival, is a vibrant and joyous celebration in Myanmar marking the traditional Burmese New Year. Food plays a significant role during this festive occasion, with a variety of dishes prepared to be shared and enjoyed with family and friends. Here's how you can describe Thingyan food:</p>
            <a href="thingyanfood.php" class="btn_thingyan" style="margin-top:30px;">See Detail</a>
          </div>
    </div>
      </div>
      <div class="col-md-3 col-sm-12 col-lg-3 mb-2">
      <div class="card" style="width: 18rem; height:700px">
          <img src="images/cake.jpg" class="img-thumbnail" alt="cake">
          <div class="card-body deserts">
            <h5 class="card-title thingyan_tilte" style="margin-top:20px">Desert <i class="fa-solid fa-cake-candles ms-1"></i></h5>
            <p class="card-text" style="margin-top:30px;">Describing desserts effectively involves appealing to the senses, emphasizing flavors, textures, and visual presentation.</p>
            <a href="deset.php" class="btn_desert" style="margin-top:40px;">See Detail</a>
          </div>
      </div>
      </div>
      <div class="col-md-3 col-sm-12 col-lg-3">
      <div class="card" style="width: 18rem; height:700px">
          <img src="images/motehin.jpg" class="img-thumbnail" alt="...">
          <div class="card-body deserts">
            <h5 class="card-title thingyan_tilte" style="margin-top:20px">Burmese Recipes <i class="fa-solid fa-plate-wheat ms-2"></i></h5>
            <p class="card-text" style="margin-top:20px;">Certainly! Burmese cuisine is rich, diverse, and influenced by its geographical location, neighboring countries, and ethnic diversity</p>
            <a href="burmeseFood.php" class="btn_desert" style="margin-top: 40px">See Detail</a>
          </div>
      </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>