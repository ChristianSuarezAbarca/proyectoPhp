<!DOCTYPE html>
<html>

<head>
   <style>
      body {
         background-color: rgb(0 0 0);
      }
   </style>
</head>

<body>
   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <?php
      $slides = [
         [
            "title" => "Coffee Community",
            "text" => "A cozy space for coffee enthusiasts to connect and share.",
            "buttons" => [
               ["label" => "Login", "link" => "/login"],
               ["label" => "Register", "link" => "/register"]
            ]
         ],
         [
            "title" => "Discover Recipes",
            "text" => "Explore and share unique coffee recipes from around the world.",
            "buttons" => [
               ["label" => "View Recipes", "link" => "/coffees"],
               ["label" => "Blog", "link" => "/blog"]
            ]
         ],
         [
            "title" => "Your Coffee Moments",
            "text" => "Upload and save your most memorable coffee experiences.",
            "buttons" => [
               ["label" => "Upload Photo", "link" => "/galeria"],
               ["label" => "My Profile", "link" => "/profile"]
            ]
         ]
      ];
      ?>

      <div class="container">
         <div id="banner_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <?php foreach ($slides as $index => $slide): ?>
                  <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital"><?php echo $slide['title']; ?></h1>
                              <p class="banner_text"><?php echo $slide['text']; ?></p>
                              <div class="btn_main">
                                 <div class="about_bt">
                                    <a style="background-color: red; color: white;" href="<?php echo $slide['buttons'][0]['link']; ?>"><?php echo $slide['buttons'][0]['label']; ?></a>
                                 </div>
                                 <div class="callnow_bt">
                                    <a href="<?php echo $slide['buttons'][1]['link']; ?>"><?php echo $slide['buttons'][1]['label']; ?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div>

      <br><br><br><br><br>
   </div>
   <!-- banner section end -->
   </div>
   <!-- header section end -->
</body>

</html>