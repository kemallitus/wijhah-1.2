<?php

session_start();

?>

<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wijhah - Travel agancy</title>

  <link rel="shortcut icon" href="wijhahlogo.png" type="image/wijhahlogo.png">

  <link rel="stylesheet" href="./assets/css/style1.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'><link rel="stylesheet" href="style1.css">
</head>

<body id="top">


  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">للسأله اخرى :</p>

            <p class="helpline-number">+966 00110000</p>
          </div>

        </a>
        <a href="index.php" class="logo">
          <img src="./assets/images/161logo.png" alt="Wijhah logo">
        </a>

        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="index.php" class="logo">
              <img src="./assets/images/logo5.png" alt="wijhah logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#destination" class="navbar-link" data-nav-link><b>الوجهات</b></a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link><b>بكجات</b></a>
            </li>

            <li>
              <a href="#continent" class="navbar-link" data-nav-link><b>قارات  </b></a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link><b>تواصل معنا</b></a>
            </li>


            
          </ul>

        </nav>

<ul class="navbar-list">
  <?php
  if(isset($_SESSION["user_name"]))
  {
  ?>
  <il><a href="user_page.php" class="social-link"><?php echo $_SESSION["user_name"];?></a></il>
  <?php
  }
  else
  {
?>
<il><a href="login_form.php" class="btn btn-secondary">تسجيل الدخول</a></il>
<?php
  }
  ?>
</ul>
  
  
  
 
      </div>
    </div>

  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">رحلة لاستكشاف العالم</h2>

         <p class="hero-text">

          </p>

          <div class="btn-group">
            <button class="btn btn-primary">المزيد</button>

            <button class="btn btn-secondary">احجز الان</button>
          </div>

        </div>
      </section>

      <!-- 
        - #TOUR SEARCH
      -->

      <section class="tour-search">
        <div class="container">

          <form action="" class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">بحث عن وجهة</label>

              <input type="text" name="destination" id="destination" required placeholder="ادخل الوجهة"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="people" class="input-label">عدد الركاب</label>

              <input type="number" name="people" id="people" required placeholder="عدد الركاب" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">تاريخ الحجز</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">تاريخ العودة</label>

              <input type="date" name="checkout" id="checkout" required class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">البحث</button>

          </form>

        </div>
      </section>

      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">المدن المتوفرة</p>

          <h2 class="h2 section-title"><b>الوجهات المشهورة</b></h2>

          <p class="section-text">
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-1.jpg" alt="page2.html" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">ايطاليا</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="page2.html">سان ميغل</a>
                  </h3>

                  <p class="card-text">
                    تشتهر مدينة سان ميغيل دي أليندي ، وهي مدينة تعود إلى الحقبة الاستعمارية في المرتفعات الوسطى بالمكسيك ، بالعمارة الإسبانية الباروكية ومشهد فني مزدهر ومهرجانات ثقافية.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-2.jpg" alt="دبي, الامارات" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">الامارات</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">دبي</a>
                  </h3>

                  <p class="card-text">
                    بفضل الهندسة المعمارية الحديثة، خيارات الطعام المتعددة بمستوياتها العالمية، الشواطئ الخلابة، المراكز الثقافية، الأنشطة الترفيهية، ووجهات التسوق التي لا تنتهي، دبي بالتأكيد تستحق زيارتك
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/كوالالمبور.png" alt="كوالالمبور, ماليزيا" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">ماليزيا</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">كوالالمبور</a>
                  </h3>

                  <p class="card-text">
                    كوالالمبور مدينة تجمع بين الحداثة والتاريخ، فوسط المدينة تشاهد فيه مظاهر التطور من ابراج سكنية وناطحات سحاب ومجمعات تجارية وغيرها.
                  </p>

                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/ola.jpg" alt="العلا, السعودية" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">السعودية</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">العلا</a>
                  </h3>

                  <p class="card-text">
                    العلا، أعظم تحفة عرفها الزمن، تعتبر من أقدم المحافظات في شبه الجزيرة العربية وموطن الحِجر.
                  </p>

                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/turky.jpg" alt="اسطنبول, تركيا" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">تركيا</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">اسطنبول</a>
                  </h3>

                  <p class="card-text">
                    تتميز السياحة في اسطنبول بوجود افضل واجمل الاماكن السياحية والترفيهية من حدائق ومتاحف وشواطئ مما يجعل اسطنبول ايضا من افضل مدن السياحة في تركيا. 
                  </p>

                </div>

              </div>
            </li>
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/london.jpg" alt="LONDON, ENGLAND" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">المملكة المتحدة</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">لندن</a>
                  </h3>

                  <p class="card-text">
                    تتميز لندن بالتاريخ الحافل، حيث تزخر بملامح القرون الوسطى والعصر الفيكتوري التي تمتزج معًا في بيئة عصرية ثرية ونابضة بالحياة.
                  </p>

                </div>

              </div>
            </li>
          
          </ul>

          <!--<button class="btn btn-primary">المزيد من الرحلات</button> -->



          <section class="popular" id="continent">
            <div class="container">
  
    
              <h2 class="h2 section-title"><b>وجهه لجميع القارات</b></h2>
    
              <p class="section-text">
              </p>
    
              <ul class="popular-list">
    
                <li>
                  <div class="popular-card">
                  <a href="asia.php" class="card-img">
              <img src="./assets/images/asia.jpg" alt="wijhah logo"  loading="lazy" >
            </a>
    
                    <div class="card-content">
    
                      <div class="card-rating">
                        
                    <a>اسيا</a>
                      </div>
                                            
                      <p class="card-text">
                        السعودية . اليابان . سنغافورة . اندونيسيا . تايلاند 
                      </p>

                  </h3>
                    </div>
    
                  </div>
                </li>
                <li>
                  <div class="popular-card">
                  <a href="#" class="card-img">
              <img src="./assets/images/africa.png" alt="wijhah logo"  loading="lazy" >
            </a>
    
                    <div class="card-content">
    
                      <div class="card-rating">

                        <p> افريقيا</p>
                      </div>
                      
                      <p class="card-text">
                        مصر .   مغرب  .   كينيا  . الجزائر  .  تنزانيا
                      </p>
    
                    </div>
    
                  </div>
                </li>
                <li>
                  <div class="popular-card">
                  <a href="#" class="card-img">
              <img src="./assets/images/EU.png" alt="wijhah logo"  loading="lazy" >
            </a>
    
                    <div class="card-content">
    
                      <div class="card-rating">

                        <p> اوروبا</p>
                      </div>
                      
                      <p class="card-text">
                        روسيا . اوكرانيا . فرنسا . اسبانيا . بلجيكا
                      </p>
    
                    </div>
    
                  </div>
                </li>

                <li>
                  <div class="popular-card">
                    
                  <a href="#" class="card-img">
              <img src="./assets/images/noerth am.png" alt="wijhah logo"  loading="lazy" >
            </a>

    
                    <div class="card-content">
    
                      <div class="card-rating">

                        <p> شمال امريكا</p>
                      </div>
                      
                      <p class="card-text">
                        كوستاريكا . المكسيك , الولايات المتحدة , كندا 
                      </p>
    
                    </div>
    
                  </div>
                </li>
                <li>
                  <div class="popular-card">
                  <a href="#" class="card-img">
              <img src="./assets/images/south am.jpg" alt="wijhah logo"  loading="lazy" >
            </a>
    
                    <div class="card-content">
    
                      <div class="card-rating">

                        <p> جنوب امريكا</p>
                      </div>
                      
                      <p class="card-text">
                         البرازيل  . الارجنتين  . تشيلي . بيرو . كولومبيا
                      </p>
    
                    </div>
    
                  </div>
                </li>
    
                    </div>
    
                  </div>
                </li>
              
              </ul>
      <!-- 
        - #ads
      -->
      <section class="popular" id="destination">
        <div class="container">

          <h2 class="h2 section-title"><b>العروض والتخفيضات</b></h2>

          <p class="section-text">
          </p>

    </div>

<ul class="popular-list">
  <li>
    <div class="popular1-card">

      <figure class="card-img">
        <img src="./assets/images/ad22.png" alt="ad1" loading="lazy">
      </figure>

      </div>

    </div>
  </li>

  <li>
    <div class="popular1-card">

      <figure class="card-img">
        <img src="./assets/images/ad11.png" alt="ad2" loading="lazy">
      </figure>

      </div>

    </div>
  </li>

  <li>
    <div class="popular1-card">

      <figure class="card-img">
        <img src="./assets/images/ad33.png" alt="ad3" loading="lazy">
      </figure>

      </div>

    </div>
  </li>

</ul>

      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">البكجات الاكثر حجزا</p>

          <h2 class="h2 section-title">البكجات</h2>

          <p class="section-text">
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-1.jpg" alt="الاسترخاء في شواطئ" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">الاسترخاء في شواطئ مالديف</h3>

                  <p class="card-text">
                    العطلة في المالديف لها متعة وسحر خاص جداً، فالاستمتاع في جزيرة خضراء فائقة الجمال لم يعد حلمًا أو مشهد درامي خيالي بل جعلته جزر 
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">ليالي 6 \ 7 ايام </p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">شخصان</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">مالديف</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 تقيم)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    1600 ريال
                    <span>/ لكل شخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/zimbaboi.jpg" alt="عطلة الصيف في زمبابوي" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">عطلة الصيف في زمبابوي</h3>

                  <p class="card-text">
                    شلالات فيكتوريا، ومتنزهات مانا بولز الوطنية، وأطلال زيمبابوي العظمى، وأطلال كاما. وتوفر كذلك فرصة القيام برحلات السفاري البرية برفقة الحيوانات البرية
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">ليالي 8 \ 9 ايام </p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">5اشخاص</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">زمبابوي</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 تقييم)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    1400 ريال
                    <span>/ لكل شخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-3.jpg" alt="عطله في جزر اليونان" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">عطله في جزر اليونان</h3>

                  <p class="card-text">
                    تعد اليونان واحدة من تلك الأماكن النادرة التي لا يزال التاريخ القديم يشكل جزءًا كبيرًا
                     للغاية من حياتها المعاصرة. وينجذب الزوار بشكل كبير للغاية للتاريخ الثقافي الملحمي الذي يتمتع به هذا البلد مثل انجذابهم لجماله وسحره
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">ليالي 6 \ 7 ايام </p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">4 اشخاص</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">يونان</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 تقييم)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    ريال 1900
                    <span>/ لكل شخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">عرض البكجات</button>

        </div>
      </section>
      </section>
      </section>
      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">مستعد لرحلة لن تنساها</h2>

            <p class="section-text">
              وجهة للسفر والسياحة تضم تحت مظلتها شركات عديدة متخصصة في خدمات السفر والسياحة والخدمات المكملة لها في دول العالم .
              وكل ذلك في سبيل تحقيق خدمات سياحية متكاملة من تاشيرات و برامج سياحية في مكان واحد.
            </p>
          </div>

          <button class="btn btn-secondary">تواصل معنا</button>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #فوتر
  -->

  

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/161logo.png" alt="wijhah logo">
          </a>

          <p class="footer-text">
            وجهة للسفر والسياحة تضم تحت مظلتها شركات عديدة متخصصة في خدمات السفر والسياحة والخدمات المكملة لها في دول العالم .
            وكل ذلك في سبيل تحقيق خدمات سياحية متكاملة من تاشيرات و برامج سياحية في مكان واحد.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">تواصل معنا</h4>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+966 000000000</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.wijhah.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>السعوديه الرياض</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">
          

          <p class="lqd-simple-heading">
            دعنا على تواصل
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="ادخل ايميلك" required>

            <button type="submit" class="btn btn-secondary">اشترك</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="الحقوق">
          &copy; 2022 <a href="">codewithsadee</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>


  <!-- 
    - #ارجع لفوق
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>


  <script src="./assets/js/script.js"></script>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>