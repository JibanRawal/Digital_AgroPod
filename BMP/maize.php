<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <!-- favicon -->
<link rel="icon" type="images/x-icon" href="images/seedling-solid.svg">
<!-- local Css -->
<link rel="stylesheet" href="css/index.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!-- Bootstrap via content delivery network -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script>
    function fun(value)
    {
      document.getElementById("iframe3").src="maize/"+value+".php";
    }
</script>
</head>
<body>
<section class="intro-single bg-light border-bottom border-success border-5 py-3">
    <div class="container ">
        <div class="row">

            <div class="col-md-12 col-lg-8 border-start border-success border-5 ps-4">
                <div class="title-single-box">
                    <h1 class="title-single ">Mize
                    </h1>
                    <span class="color-text-a fw-bold">Best Management Practice (BMP)</span>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 border-start border-success border-5 ps-4">
                <div class="title-single-box">
                    <form>
                        <h5>Best Management Practice</h5>
                        <select class="bmp-select rounded-2 border border-success border-3" onchange="fun(this.value)">
                            <option value="land">Land Preparation</option>
                            
                            
                                        
                            
                            <option value="top_dressing">Top Dressing</option>
                            
                            
                            <option value="harvesting">Harvesting</option>
                            
                            
                            <option value="Postharvest">Post Harvest</option>
                            
                        </select>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container " style="height:500px;width:100%;">
<iframe src="maize/land.php" frameborder="0" height="90%" width="100%" id="iframe3"></iframe>
</div>
</body>
</html>