<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Rent Service</title>
    <link rel="icon" href="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/94ffa93c29.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <?php include("templete/header.php")?>


<div class="container grid text-center ">

  <div class="row">
  <div class="col-md-2"></div>
    <div class="col-md-2">
      <button class="btn color btn-block mt-2">Buy</button>
    </div>
    <div class="col-md-2">
      <button class="btn color btn-block mt-2">To Rent Apartment</button>
    </div>
    <div class="col-md-2">
      <button class="btn color btn-block mt-2">To Rent Shop</button>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
    <a href= "rent_post.php" type="button" class="btn color btn-lg">Post</a>
    </div>
  
  
</div>

    </div>
    
    <div class="container grid text-center">
  <div class="row">
    <div class="col-md-2">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary mt-2">Location</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
        <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary mt-2">property Type

        </button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <!-- Dropdown items go here -->
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary mt-2">Price</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
       
    <a class="dropdown-item" href="#">Option 1</a>
    <a class="dropdown-item" href="#">Option 2</a>
    <a class="dropdown-item" href="#">Option 3</a>


        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary mt-2">Beds</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <!-- Dropdown items go here -->
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary mt-2">Area</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split mt-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <!-- Dropdown items go here -->
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="btn-group">
      <button type="button" class="btn color btn-lg mt-2">Find</button>
    </div>
      </div>
    </div>
  </div>
</div>




     
    <?php include("templete/footer.php") ?>
    
</body>
</html>