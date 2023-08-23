
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- 
- primary meta tags
-->
<title>Richard Ryan</title>
<meta name="title" content="Richard Ryan">
<meta name="description" content="This is a photographer portfolio html template, made by codewithsadee.">

<!-- 
- favicon
-->
<link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

<!-- 
- custom css link
-->
<link rel="stylesheet" href="./assets/css1/style.css">

<!-- 
- custom font link
-->
<link rel="stylesheet" href="./assets/font/font.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- 
- preload images
-->
<link rel="preload" as="image" href="./assets/images/loading.svg">
<link rel="preload" as="image" href="./assets/images/loading-circle.svg">


<style>
/* Custom styles */
/* styles.css */
/* styles.css */
/* styles.css */
.text {
    position: relative;
}

.button-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.no-pdf-text {
    font-size: 12px;
    color: red;
    margin-top: 5px;
}

.button-group a {
    flex-basis: 50%;
    text-align: center;
    padding: 10px 0;
}

.button-group a.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.button-group a.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
}


/* Thêm đoạn CSS này */
.button-group a {
    flex-basis: 50%;
    text-align: center;
}


ul.navbar-list {
  margin-left: 10px;
  margin-top: 20px;
  margin-bottom: 20px;
  list-style: none;
  padding: 0;
}

li.navbar-item {
  display: flex;
  align-items: center;
  margin-bottom: 10px; /* Adjust the margin as needed */
}

li.navbar-item a {
  text-decoration: none;
  color: #fff; /* Set the link color to white */
}

li.navbar-item i {
  margin-right: 5px; /* Adjust the spacing between the icon and the text as needed */
}
</style>

</head>

<body class="active" id="top">

<!-- 
-#PRELOADING
-->

<div class="loading" data-loading>
<img src="./assets/images/loading.svg" width="55" height="55" alt="loading" class="img">
<img src="./assets/images/loading-circle.svg" width="70" height="70" alt="" class="circle">
</div>





<!-- 
- #HEADER
-->

<header class="header" data-header>
<div class="container">

  <a href="#" class="logo">
    <img src="./assets/images/logo.svg" width="40" height="40" alt="Richard home">
  </a>

  <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
    <img src="./assets/images/menu.svg" width="17" height="17" alt="menu icon">
  </button>

  <nav class="navbar" data-navbar>

    <div class="navbar-top">
      <a href="#" class="logo">
        <img src="./assets/images/nav-logo.svg" width="140" height="40" alt="Richard home" class="img">
      </a>

      <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
        <span class="span one"></span>
        <span class="span two"></span>
      </button>
    </div>

    <ul class="navbar-list">
    <li class="navbar-item">
  <a href="#home" class="navbar-link" data-nav-link><i class="fas fa-book"></i> Sách</a>
</li>
<li class="navbar-item">
  <a href="#gallery" class="navbar-link" data-nav-link><i class="fas fa-image"></i> Trưng bày</a>
</li>
<li class="navbar-item">
  <a href="#about" class="navbar-link" data-nav-link><i class="fas fa-info-circle"></i> về chúng tôi</a>
</li>
<li class="navbar-item">
  <a href="#services" class="navbar-link" data-nav-link><i class="fas fa-heart"></i> Chung đam mê đọc sách</a>
</li>
<li class="navbar-item">
  <a href="#portfolio" class="navbar-link" data-nav-link><i class="fas fa-lightbulb"></i> Những điều cần biết</a>
</li>
<li class="navbar-item">
  <a href="#contact" class="navbar-link" data-nav-link><i class="fas fa-envelope"></i> Lời cảm ơn</a>
</li>
    </ul>

    <p class="navbar-title">My Address</p>

    <address class="navbar-text">
    Thanh Xuân, Hà Nội
    </address>

    <p class="navbar-text">
    Liên hệ với chúng tôi
      <a href="tel:8085613846" class="contact-link">808-561-3846</a>
    </p>

  </nav>

  <div class="overlay" data-nav-toggler data-overlay></div>

</div>
</header>





<main>
<article>

  <!-- 
    - #HERO
  -->

  <section class="section hero" id="home" aria-label="home">
    <div class="container">

      <img src="./assets/images/hero-banner.png" width="322" height="322" alt="" class="hero-banner">

      <div class="hero-content">

        <h1 class="h1 hero-title">Book Store OLD</h1>

        <div class="wrapper h2">
          <strong class="strong" data-letter-effect>Vintage</strong>
          <strong class="strong" data-letter-effect>Timeless</strong>
          <strong class="strong" data-letter-effect>Nostalgic</strong>
          <strong class="strong" data-letter-effect>Cozy</strong>
        </div>

        <p class="hero-text">Step into the vintage charm of our<br> cozy, timeless book store.</p>

      </div>

    </div>

    <img src="./assets/images/hero-shape.svg" width="211" height="189" alt="" class="shape">

  </section>






  <div class="main-flexslider">

</div>
<!--end-flex-slider-->
<!--Icon Blocks-->
<div class="container">
<div class="icon-blocks">
    <div class="col-md-4">
        <p>
            <i class="fa fa-group"></i>Đội ngũ nhân viên nhiệt tình
        </p>
    </div>
    <div class="col-md-4">
        <p>
            <i class="fa fa-book"></i>Không gian sang trọng
        </p>
    </div>
    <div class="col-md-4">
        <p>
            <i class="fa fa-globe"></i>Giao lưu với mọi người
        </p>
    </div>

</div>
</div>
<!--end Icon Blocks-->
<!--articles-->
<div class="container">
    <!-- Slider -->
    <div id="carousel-example-generic" class="carousel slide slider" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $count = 0; ?>
            <?php foreach ($products as $product): ?>
                <?php if ($count % 4 === 0): ?>
                    <div class="item<?php if ($count === 0) echo ' active'; ?>">
                        <div class="row">
                <?php endif; ?>
                <div class="col-md-3 col-sm-6">
                    <div class="book-container" style="background-color: #fff; text-align:center">
                        <a href="index.php?r=site/view&id=<?= $product->id ?>">
                            <img src="<?= Yii::getAlias('@backendUrl/') . $product->image ?>" alt="img" style="width: 256px;height: 257px">
                            <div class="text">
                                <span style="font-weight: bold; color: black;">
                                    <i class="fas fa-book"></i> <?= $product->name ?>
                                </span>
                                <p style="font-weight: bold; color: black; text-align: center; margin-top: -10px;">
                                    <i class="fas fa-money-bill"></i> <?php $s = number_format($product->price); echo 'Giá: ' . $s . ' VNĐ'; ?>
                                </p>
                                <?php if (!empty($product->pdf_attribute)): ?>
                                    <div class="button-group">
                                        <a href="<?= Yii::getAlias('@backendUrl/') . $product->pdf_attribute ?>" class="btn btn-primary" target="_blank">Read</a>
                                        <button class="btn btn-warning" style="margin-bottom: 5px;">Order ngay</button>
                                    </div>
                                <?php else: ?>
                                    <!--<p class="no-pdf-text">Sách này chưa có bản PDF để tham khảo</p>-->
                                    <button class="btn btn-warning" style="margin-bottom: 5px;">Order ngay</button>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                </div>
                <?php $count++; ?>
                <?php if ($count % 4 === 0 || $count === count($products)): ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
    </div>
</div>




<!-- End Slider -->

<!-- Partners Box -->
<div class="partner-box">
    <div id="carousel-partners" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <ul class="partner-list">
                    <li><img alt="" src="images/client1.png"></li>
                    <li><img alt="" src="images/client2.png"></li>
                    <li><img alt="" src="images/client3.png"></li>
                    <li><img alt="" src="images/client4.png"></li>
                </ul>
            </div>
            <div class="item">
                <ul class="partner-list">
                    <li><img alt="" src="images/client1.png"></li>
                    <li><img alt="" src="images/client2.png"></li>
                    <li><img alt="" src="images/client3.png"></li>
                    <li><img alt="" src="images/client4.png"></li>
                </ul>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-partners" data-slide="prev"></a>
        <a class="right carousel-control" href="#carousel-partners" data-slide="next"></a>
    </div>
</div>
<!-- End Partners Box -->
</div>

<!--end-partners box -->
<!--articles-->
<div class="container">
<div class="row articles">
    
</div>
</div>





  <!-- 
    - #GALLERY
  -->

  <section class="section gallery" id="gallery">
    <div class="container">

      <ul class="gallery-list">

        <li class="gallery-item" data-reveal>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-1.jpg" width="450" height="625" loading="lazy" alt="The Drunken"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_1 </a>
              </h3>

              <span class="card-tag">Cozy_1</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-2.jpg" width="450" height="625" loading="lazy"
                alt="Lettuce Entertain" class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_2</a>
              </h3>

              <span class="card-tag">Cozy_2</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

        </li>

        <li class="gallery-item" data-reveal>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-3.jpg" width="450" height="625" loading="lazy" alt="Leaping Lizard"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_3</a>
              </h3>

              <span class="card-tag">Cozy_3</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-4.jpg" width="450" height="625" loading="lazy" alt="Juan More Taco"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_4</a>
              </h3>

              <span class="card-tag">Cozy_4</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

        </li>

        <li class="gallery-item" data-reveal>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-5.jpg" width="450" height="625" loading="lazy" alt="Goldilox Bagels"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_5</a>
              </h3>

              <span class="card-tag">Cozy_5</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-6.jpg" width="450" height="625" loading="lazy" alt="Cookie Monstah"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_6</a>
              </h3>

              <span class="card-tag">Cozy_6</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

        </li>

        <li class="gallery-item" data-reveal>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-7.jpg" width="450" height="625" loading="lazy"
                alt="Divine Pastabilities" class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_7</a>
              </h3>

              <span class="card-tag">Cozy_7</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

          <div class="gallery-card">

            <figure class="card-banner img-holder has-before" style="--width: 450; --height: 625;">
              <img src="./assets/images/gallery-8.jpg" width="450" height="625" loading="lazy"
                alt="The Lockhart Bar" class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h6">
                <a href="#" class="card-title">Memory_8</a>
              </h3>

              <span class="card-tag">Cozy_8</span>
            </div>

            <a href="#" class="btn-icon">
              <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy"
                alt="arrow-forward icon">
            </a>

          </div>

        </li>

      </ul>

      <a href="#service" class="scroll-down">
        <img src="./assets/images/scroll-down.svg" width="40" height="66" loading="lazy" alt="mouse scroll">
      </a>

      <img src="./assets/images/gallery-shape.svg" width="220" height="78" loading="lazy" alt="" class="shape">

    </div>
  </section>





  <!-- 
    - #CATEGORY
  -->

  <section class="section category" aria-label="photography category">
    <div class="container">

      <ul class="category-list">

        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Vintage books,</h3>
            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-1.jpg" width="600" height="690" loading="lazy" alt="Landscape"
                class="img-cover">
            </figure>

          </a>
        </li>
<!--
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">New releases,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-2.jpg" width="600" height="690" loading="lazy" alt="Model"
                class="img-cover">
            </figure>

          </a>
        </li>
            -->


        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Secondhand books,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-3.jpg" width="600" height="690" loading="lazy" alt="Street"
                class="img-cover">
            </figure>

          </a>
        </li>
<!--
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Classic novels,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-4.jpg" width="600" height="690" loading="lazy" alt="Product"
                class="img-cover">
            </figure>

          </a>
        </li>
-->            
<!--
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Rare editions,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-2.jpg" width="600" height="690" loading="lazy" alt="Fashion"
                class="img-cover">
            </figure>

          </a>
        </li>
-->
<!--
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Children's books,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-5.jpg" width="600" height="690" loading="lazy" alt="Film"
                class="img-cover">
            </figure>

          </a>
        </li>
-->
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Poetry collections,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-6.jpg" width="600" height="690" loading="lazy" alt="Architecture"
                class="img-cover">
            </figure>

          </a>
        </li>

        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Fiction and non-fiction titles,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-7.jpg" width="600" height="690" loading="lazy" alt="Event"
                class="img-cover">
            </figure>

          </a>
        </li>

        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Book accessories .</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-8.jpg" width="600" height="690" loading="lazy" alt="Wedding"
                class="img-cover">
            </figure>

          </a>
        </li>
<!--
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Book-related merchandise,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-9.jpg" width="600" height="690" loading="lazy" alt="People"
                class="img-cover">
            </figure>

          </a>
        </li>
-->
<!--
        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Cozy reading books,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-11.jpg" width="600" height="690" loading="lazy" alt="Event"
                class="img-cover">
            </figure>

          </a>
        </li>

        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Knowledgeable and friendly staff,</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-10.jpg" width="600" height="690" loading="lazy" alt="Food"
                class="img-cover">
            </figure>

          </a>
        </li>

        <li class="category-item" data-reveal>
          <a href="#" class="category-card">

            <h3 class="h4 card-title">Regular author events and book signings.</h3>

            <figure class="card-banner img-holder" style="--width: 600; --height: 690;">
              <img src="./assets/images/category-11.jpg" width="600" height="690" loading="lazy"
                alt="Health & Wellnes" class="img-cover">
            </figure>

          </a>
        </li>
-->
      </ul>

    </div>
  </section>





  <!-- 
    - #ABOUT
  -->

  <section class="section about" id="about" aria-label="about me">
    <style>
      /* Định dạng phần tử chứa cả hình và chữ */
.new-wrapper {
display: flex;
align-items: center;
position: relative; /* Đặt phần tử cha trong vị trí tương đối */
}

/* Định dạng phần bên trái (hình) */
.new-about-banner {
order: 1; /* Đẩy phần tử về trước phần tử chữ */
}

/* Định dạng phần bên phải (chữ) */
.new-about-content {
order: 2; /* Đẩy phần tử về sau phần tử hình */
text-align: right; /* Canh lề phải cho chữ */
}

/* Định dạng chữ bên phải */
.new-section-text {
font-size: 18px;
font-family: 'Arial', sans-serif; /* Thay đổi font chữ */
line-height: 1.6; /* Khoảng cách giữa các dòng chữ */
color: #333; /* Màu chữ */
text-align: right; /* Canh lề phải cho toàn bộ văn bản */
}


.new-section-text {
font-size: 18px;
font-family: "Times New Roman", Times, serif; /* Sử dụng font "Times New Roman" hoặc một font chữ serif khác */
line-height: 1.6;
color: #333;
text-align: left;
}



    </style>
<div class="container">
<div class="new-about-content">

  <h2 class="h2 section-title" data-reveal="right">
    The Book Store <br>
    OLD
  </h2>

  <div class="new-wrapper has-before" data-reveal="right">
    <p class="new-section-text" style="font-size: 18px;">
    là một cửa hàng sách quyến rũ và đầy hồi ức, cung cấp một loạt sách phong phú, cả sách mới và sách đã qua sử dụng.
      <em class="em"> Với không gian ấm cúng và các kệ sách đầy báu vật văn học, </em>
      đây là thiên đường cho những người yêu sách.
      <em class="em">Cho dù bạn đang tìm kiếm những tiểu thuyết kinh điển, phiên bản hiếm, hay những cuốn sách bán chạy nhất mới nhất,</em>
      Book Store OLD đều có điều gì đó để đáp ứng mong muốn của mọi người đọc sách.
    </p>

  </div>

</div>

<figure class="new-about-banner" data-reveal="left">

  <div class="new-img-holder has-before" style="--width: 512; --height: 684;">
    <img src="./assets/images/gallery-2.jpg" width="512" height="684" loading="lazy" alt="Riachard Ryan"
      class="img-cover">
  </div>

  <img src="./assets/images/about-shape-1.png" width="178" height="178" loading="lazy" alt=""
    class="shape shape-1">

  

</figure>

<img src="./assets/images/about-shape-3.svg" width="239" height="232" loading="lazy" alt=""
  class="shape shape-3">
</div>
</section>






  <!-- 
    - #SERVICE
  -->

  <section class="section service" id="service" aria-labelledby="service-lable">

    <p class="section-subtitle container" id="service-lable">Luuu with loveee</p>

    <ul class="service-list">

      <li data-reveal>
        <div class="service-card container">

          <img src="./assets/images/gallery-5.jpg" width="340" height="380" loading="lazy" alt="Reading Club"
            class="img">

          <div>
            <h3 class="h3 card-title">Reading Club</h3>

            <p class="card-subtitle">
            Câu lạc bộ đọc sách.
            </p>
          </div>

          <a href="#" class="btn-icon" aria-label="See more">
            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
              <path d="M0 10H41" stroke="white" stroke-width="2" />
              <path d="M33 1L41.9 10.2727L33 19" stroke="white" stroke-width="2" />
            </svg>
          </a>

        </div>
      </li>

      <li data-reveal>
        <div class="service-card container">

          <img src="./assets/images/gallery-1.jpg" width="340" height="380" loading="lazy" alt="Event Organiser"
            class="img">

          <div>
            <h3 class="h3 card-title">Author Talks and Book Signings</h3>

            <p class="card-subtitle">
            Buổi nói chuyện của tác giả và buổi ký tặng sách.
            </p>
          </div>

          <a href="#" class="btn-icon" aria-label="See more">
            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
              <path d="M0 10H41" stroke="white" stroke-width="2" />
              <path d="M33 1L41.9 10.2727L33 19" stroke="white" stroke-width="2" />
            </svg>
          </a>

        </div>
      </li>

      <li data-reveal>
        <div class="service-card container">

          <img src="./assets/images/gallery-3.jpg" width="340" height="380" loading="lazy" alt="Product Marketing"
            class="img">

          <div>
            <h3 class="h3 card-title">Antique Book Fair</h3>

            <p class="card-subtitle">
              Hội chợ sách cũ.
            </p>
          </div>

          <a href="#" class="btn-icon" aria-label="See more">
            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
              <path d="M0 10H41" stroke="white" stroke-width="2" />
              <path d="M33 1L41.9 10.2727L33 19" stroke="white" stroke-width="2" />
            </svg>
          </a>

        </div>
      </li>

      <li data-reveal>
        <div class="service-card container">

          <img src="./assets/images/gallery-6.jpg" width="340" height="380" loading="lazy" alt="Videography"
            class="img">

          <div>
            <h3 class="h3 card-title">Literary Workshops and Seminars</h3>

            <p class="card-subtitle">
            Hội thảo và Hội thảo Văn học
            </p>
          </div>

          <a href="#" class="btn-icon" aria-label="See more">
            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
              <path d="M0 10H41" stroke="white" stroke-width="2" />
              <path d="M33 1L41.9 10.2727L33 19" stroke="white" stroke-width="2" />
            </svg>
          </a>

        </div>
      </li>

    </ul>

  </section>





  <!-- 
    - #PORTFOLIO
  -->

  <section class="section portfolio" id="portfolio" aria-labelledby="portfolio-label">

  <style></style>
    <div class="container">

      <div class="portfolio-list">

        <div class="wrapper">

          <h2 class="h2 section-title" id="portfolio-label" data-reveal>Nên tìm hiểu .</h2>

          <div class="portfolio-card" data-reveal>

            <figure class="card-banner img-holder has-before" style="--width: 200; --height: 120;">
              <img src="./assets/images/gallery-5.jpg" width="200" height="200" loading="lazy" alt="Chúa tể những chiếc nhẫn"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h4">
                <a href="#" class="card-title">Chúa tể những chiếc nhẫn</a>
              </h3>

              <p class="card-tag">J.R.R. Tolkien</p>
            </div>

            <a href="#" class="btn-icon" aria-label="See more">
              <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
                <path d="M0 10H41" stroke="black" stroke-width="2" />
                <path d="M33 1L41.9 10.2727L33 19" stroke="black" stroke-width="2" />
              </svg>
            </a>

          </div>

          <div class="portfolio-card" data-reveal>

            <figure class="card-banner img-holder has-before" style="--width: 200; --height: 150;">
              <img src="./assets/images/gallery-6.jpg" width="700" height="1091" loading="lazy" alt="Wedding Shot"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h4">
                <a href="#" class="card-title">Thư viện</a>
              </h3>

              <p class="card-tag">Nơi giao lưu</p>
            </div>

            <a href="#" class="btn-icon" aria-label="See more">
              <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
                <path d="M0 10H41" stroke="black" stroke-width="2" />
                <path d="M33 1L41.9 10.2727L33 19" stroke="black" stroke-width="2" />
              </svg>
            </a>

          </div>

        </div>

        <div class="wrapper">

          <div class="portfolio-card" data-reveal>

            <figure class="card-banner img-holder has-before" style="--width: 200; --height: 150;">
              <img src="./assets/images/gallery-7.jpg" width="500" height="1000" loading="lazy" alt="Fashion Show"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h4">
                <a href="#" class="card-title">Chia sẻ </a>
              </h3>

              <p class="card-tag">Lan toả tình yêu đọc sách</p>
            </div>

            <a href="#" class="btn-icon" aria-label="See more">
              <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
                <path d="M0 10H41" stroke="black" stroke-width="2" />
                <path d="M33 1L41.9 10.2727L33 19" stroke="black" stroke-width="2" />
              </svg>
            </a>

          </div>

          <div class="portfolio-card" data-reveal>

            <figure class="card-banner img-holder has-before" style="--width: 200; --height: 150;">
              <img src="./assets/images/gallery-8.jpg" width="700" height="850" loading="lazy" alt="Jumbo Barger"
                class="img-cover">
            </figure>

            <div class="card-content">
              <h3 class="h4">
                <a href="#" class="card-title">Ngày hội sách</a>
              </h3>

              <p class="card-tag">Diễn ra hàng năm</p>
            </div>

            <a href="#" class="btn-icon" aria-label="See more">
              <svg xmlns="http://www.w3.org/2000/svg" width="43" height="20" viewBox="0 0 43 20" fill="none">
                <path d="M0 10H41" stroke="black" stroke-width="2" />
                <path d="M33 1L41.9 10.2727L33 19" stroke="black" stroke-width="2" />
              </svg>
            </a>

          </div>

        </div>

      </div>

      <img src="./assets/images/portfolio-shape.svg" width="286" height="232" loading="lazy" alt="" class="shape">

    </div>
  </section>

</article>
</main>





<!-- 
- #FOOTER
-->

<footer class="footer">

<div class="footer-top section" id="contact">
  <div class="container">

    <p class="section-subtitle" data-reveal>Contact Us</p>

    <h2 class="h2 section-title" data-reveal>
      Work inquiry, Job oportunities? Send Message.
    </h2>

    <a href="#" class="btn-icon" data-reveal>
      <img src="./assets/images/arrow-forward.svg" width="43" height="20" loading="lazy" alt="arrow-forward icon">
    </a>

    <img src="./assets/images/gallery-2.jpg" loading="lazy" alt="photography"
      class="abs-img abs-img-1" data-reveal>

    <img src="./assets/images/gallery-3.jpg" width="265" height="275" loading="lazy" alt="photography"
      class="abs-img abs-img-2" data-reveal>

    <img src="./assets/images/gallery-4.jpg" width="303" height="272" loading="lazy" alt="photography"
      class="abs-img abs-img-3" data-reveal>

    <img src="./assets/images/gallery-5.jpg" width="175" height="175" loading="lazy" alt="photography"
      class="abs-img abs-img-4" data-reveal>

    <img src="./assets/images/footer-shape.svg" width="185" height="134" loading="lazy" alt="" class="shape">

  </div>
</div>

<div class="footer-bottom">
  <div class="container">

    <a href="#" class="logo">
      <img src="./assets/images/logo.svg" width="40" height="40" loading="lazy" alt="Richard home">
    </a>

    

  </div>
</div>

<div class="footer-bg has-before">
  <img src="./assets/images/footer-bg.jpg" width="1920" height="1135" loading="lazy" alt="photography"
    class="img-cover">
</div>

</footer>





<!-- 
- #BACK TO TOP
-->

<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>0%</a>





<!-- 
- #CUSTOM CURSOR
-->

<div class="cursor" data-cursor></div>





<!-- 
- custom js link
-->
<script src="./assets/js/script.js"></script>

</body>


</html>











