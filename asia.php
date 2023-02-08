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

            <a href="#" class="logo">
              <img src="./assets/images/logo5.png" alt="wijhah logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>


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

          <h2 class="h1 hero-title">استكشف اسيا</h2>

         <p class="hero-text">

          </p>
        </div>
      </section>


      <!-- 
        - #POPULAR
      -->
      <section class="package" id="package">
        <div class="container">

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/ola2.png" alt="الاسترخاء في شواطئ" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">مدينة العلا ماضي ومستقبل السعودية أمام عينيك</h3>

                  <p class="card-text">
                  هي من أشهر الوجهات السياحية والتاريخية بالمملكة العربية السعودية والعالم أجمع، إذ تُعد متحفًا مفتوحًا مليء بالمعالم التي تجذب محبي الأصالة والعراقة، ومكتشفي الحضارات، كما يوجد بها العديد من المنتجعات السياحية عالية المستوى، هذا بالإضافة إلى مجموعة من المطاعم الشهيرة.
                  </p>

                  <ul class="card-meta-list">


                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">السعودية.العلا</p>
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
                    2890 ريال
                    <span>/ لكل شخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/phlpin.png" alt="الاسترخاء في شواطئ" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">مدينة فيغان التاريخية</h3>

                  <p class="card-text">
                  تعد مدينة فيغان واحدة من أفضل الأماكن لمشاهدة فن العمارة الإسبانية خلال حقبة استعمارها لآسيا، وتقع فيغان على الساحل الغربي لجزيرة لوزون في شمال غرب الفلبين.
                  </p>

                  <ul class="card-meta-list">

                

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">فيغان .الفلبين</p>
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
                    3754 ريال
                    <span>/ لكل شخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>


            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/yofin.png" alt="الاسترخاء في شواطئ" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">مدينة يوفين، اليابان</h3>

                  <p class="card-text">
                  يقع منتجع يوفوين أونسن عند سفح جبل يوفو ، وهو أحد أشهر المنتجعات في اليابان. ويضم المنتجع العديد من نُزُل الريوكان التقليدية والحديثة المنتشرة في جميع أنحاء المنطقة، ويمكنك أيضًا الاستمتاع بالحمامات كزائر يومي.

وننصحك بالمبيت لتحظى بفرصة أفضل لاستكشاف البلدة العامرة بمجموعة متنوعة من المقاهي الراقية ومحلات الهدايا التذكارية والمتاحف الصغيرة.                  </p>

                  <ul class="card-meta-list">

                

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text"> يوفين، اليابان</p>
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
                  <img src="./assets/images/malys.jpg" alt="عطلة الصيف في زمبابوي" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">حي جورج تاون، ماليزيا</h3>

                  <p class="card-text">
                  يتوافد السياح على مدينة جورج تاون طوال العام لجمالها وتاريخها العريق. ويمكنك زيارة قصر تشيونج فات تزي الشهير ومسجد كابتن كيلنج والعديد من المعابد البوذية المتوجة بالذهب في العاصمة.فبفضل ما تزخر به من متاحف تعرض الكنوز التاريخية الثرية فيها ومطاعم تقدم المأكولات الماليزية التقليدية وكذلك العشرات من مراكز التسوق، تضمن هذه المدينة لكل شخص الاستمتاع بعطلة مميزة.                  </p>

                  <ul class="card-meta-list">

                

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">جورج تاون، ماليزيا</p>
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
                    2564 ريال
                    <span>/ لكل شخص</span>
                  </p>

                  <button class="btn btn-secondary">احجز الان</button>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/krabi.jpg" alt="عطله في جزر اليونان" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">عطله في جزر اليونان</h3>

                  <p class="card-text">
                  تعتبر مدينة كرابي الواقعة جنوب تايلاند معسكرًا رئيسيًا مثاليًا لاستكشاف المقاطعة التي تحمل الاسم نفسه، وهي عبارة عن منطقة غنَّاء مليئة بالأدغال والمنحدرات الجيرية والجزر الحالمة الطافية بالقرب من ساحل بحر أندامان. وتقع الأضرحة البوذية التي لا يزال الرهبان المحليون يتواجدون بها بالقرب من غرف أكبر معالم الجذب بالمدينة وهو كهف تايجر (النمر). ويعمل الرصيف الممتد على ضفة النهر كحلقة وصل تساهم في نقل المسافرين بالعبّارات والمراكب الطويلة إلى أفضل أماكن الغطس وتسلق الصخور وأفضل الشواطئ ذات الرمال البيضاء على الساحل.
                  </p>

                  <ul class="card-meta-list">

                  
                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text"> كرابي, تايلاند</p>
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
                    ريال 3964
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


            <script src="./assets/js/script.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>