<?php
$customerSlides = [
    [
        "title" => "What says customers",
        "image" => "../../public/images/client-img1.png",
        "name" => "Joy Moark",
        "quote" => "I absolutely love this product! It has transformed my daily routine and made everything so much easier.",
    ],
    [
        "title" => "What says customers",
        "image" => "../../public/images/client-img3.png",
        "name" => "Sarah Lee",
        "quote" => "The customer service was outstanding! They went above and beyond to ensure I was satisfied.",
    ],
    [
        "title" => "What says customers",
        "image" => "../../public/images/client-img2.png",
        "name" => "Carlos Martínez",
        "quote" => "Fantastic quality and super fast delivery! I couldn't be happier with my purchase.",
    ]
];
?>

<div class="client_section layout_padding">
    <div class="container">
        <div id="custom_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($customerSlides as $index => $slide): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="about_taital" style="color: white;"><?php echo $slide['title']; ?></h1>
                            </div>
                        </div>
                        <div class="client_section_2">
                            <div class="client_taital_main">
                                <div class="client_left">
                                    <div class="client_img">
                                        <img src="<?php echo $slide['image']; ?>" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="client_right">
                                    <h3 class="moark_text" style="color: white;"><?php echo $slide['name']; ?></h3>
                                    <p class="client_text" style="color: white;"><?php echo $slide['quote']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>