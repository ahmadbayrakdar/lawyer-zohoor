<?php
// Define default language
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// Load language file based on body class
$lang_file = ($lang == 'ar') ? './json/ar.json' : './json/en.json';
$json_data = file_get_contents($lang_file);

// Check if JSON data is loaded successfully
if ($json_data === false) {
  die('Failed to load language file');
}

$texts = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="images/favicon.png" type="image/gif" />

  <title>Lawyer Zohoor</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="css/ekko-lightbox.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="<?php echo $lang; ?>">
  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <!-- <span> Lawyer Zohoor </span> -->
          <img src="./images/small-logo.png" alt="logo" />
        </a>

        <div class="absoluteMenue" id="">

          <button class="toggleLanguage" onclick="toggleLanguage()">
            <?php echo ($lang == 'en') ? 'ar' : 'en'; ?>
          </button>

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">
                  <?php
                  echo $texts['home'];
                  ?>
                </a>
                <a href="about.php">
                  <?php
                  echo $texts['about'];
                  ?>
                </a>
                <a href="mecca_branch.php">
                  <?php
                  echo $texts['macca'];
                  ?>
                </a>
                <a href="service.php">
                  <?php
                  echo $texts['services'];
                  ?>
                </a>
                <a href="who_we_are.php">
                  <?php
                  echo $texts['get_to_know_us'];
                  ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img_container">
            <div class="img-box">
              <img src="images/page1-1.jpg" class="" alt="..." />
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="images/page1-2.jpg" class="" alt="..." />
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="images/page1-3.jpg" class="" alt="..." />
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="inner_detail-box">
          <p>
            <?php
            echo $texts['lawyer'];
            ?>
          </p>
          <h1>
            <?php
            echo $texts['zohoor'];
            ?>
          </h1>
          <div>
            <a href="#info_section" class="slider-link">
              <?php
              echo $texts['contact_us'];
              ?>
            </a>
          </div>
          <h2>
            <?php
            echo $texts['company'];
            ?>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/aboutus.jpg" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <?php
                echo $texts['about'];
                ?>
              </h2>
            </div>
            <p>
              <?php
              echo $texts['leading_company'];
              ?>
            </p>
            <a href="./about.php">
              <?php
              echo $texts['read_more'];
              ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- gallery section -->

  <div class="gallery_section">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          <?php
          echo $texts['macca'];
          ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-8 col-md-6 px-0 maccaGalleryImage">
          <div class="img-box">
            <img src="images/macca/1.jpg" alt="" />
            <a href="images/macca/1.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0 maccaGalleryImage">
          <div class="img-box">
            <img src="images/macca/2.jpg" alt="" />
            <a href="images/macca/2.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0 maccaGalleryImage">
          <div class="img-box">
            <img src="images/macca/3.jpg" alt="" />
            <a href="images/macca/3.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 px-0 maccaGalleryImage">
          <div class="img-box">
            <img src="images/macca/4.jpg" alt="" />
            <a href="images/macca/4.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-4 col-md-3 px-0 maccaGalleryImage">
          <div class="img-box">
            <img src="images/macca/5.jpg" alt="" />
            <a href="images/macca/5.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-sm-8 col-md-6 px-0 maccaGalleryImage">
          <div class="img-box">
            <img src="images/macca/6.jpg" alt="" />
            <a href="images/macca/6.jpg" data-toggle="lightbox" data-gallery="gallery">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="btn-box">
          <a href=""> View All </a>
        </div> -->
    </div>
  </div>

  <!-- end gallery section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <?php
          echo $texts['services'];
          ?>
        </h2>
        <p>
          <?php
          echo $texts['life_based_on_transactions'];
          ?>
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/advice.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['legal_consultations'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['our_consultants'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/commercial.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['judicial_matters'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['litigation'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/debt.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['debt_collection'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['legal_settlement'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/objection.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['objection_lists'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['petitions_and_memos'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/case.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['petition_writing'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['writing_petitions_desc'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/reconsider.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5><?php
                  echo $texts['writing_petitions'];
                  ?></h5>
              <p>
                <?php
                echo $texts['review_appeal'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/judge.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['pleading_before_court'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['pleading_before_court_statement'];
                ?>
                <br />
                <br />
                <?php
                echo $texts['legal_representation'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/services/others.jpg" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                <?php
                echo $texts['other_services'];
                ?>
              </h5>
              <ul>
                <li>
                  <?php
                  echo $texts['monthly_annual_representation'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['contract_review_amendment'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['attendance_investigation_review'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['work_authentication_agreements'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['division_of_inheritance'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['real_estate_commercial_cases'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['family_labor_cases'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['hospital_representation'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['consultation_contracts'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['execution_of_judgments'];
                  ?>
                </li>
                <li><?php
                    echo $texts['preparation_of_grievance_list'];
                    ?></li>
                <li>
                  <?php
                  echo $texts['study_all_cases'];
                  ?>
                </li>
                <li>
                  <?php
                  echo $texts['response_memorandum'];
                  ?>
                </li>
              </ul>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- who we are section -->

  <section class="blog_section">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          <?php
          echo $texts['get_to_know_us'];
          ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div>
            <div class="ourMessage">
              <h5>
                <?php
                echo $texts['our_message'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['aim_to_be_first'];
                ?>
              </p>
              <h5>
                <?php
                echo $texts['our_vision'];
                ?>
              </h5>
              <p>
                <?php
                echo $texts['our_goals'];
                ?>
              </p>
              <!-- <a href=""> Read More </a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-12 getToKnowUsImage">
          <img src="./images/gettoknowus.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- end who we are section -->

  <!-- client section -->

  <!-- <section class="client_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Testimonial</h2>
        </div>
        <div
          id="carouselExample2Controls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="" />
                    </div>
                    <div class="detail-box">
                      <div class="name">
                        <h6>Siaalya</h6>
                      </div>
                      <p>
                        It is a long established fact that a reader will be
                        distracted by the readable cIt is a long established
                        fact that a reader will be distracted by the readable c
                      </p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="" />
                    </div>
                    <div class="detail-box">
                      <div class="name">
                        <h6>Siaalya</h6>
                      </div>
                      <p>
                        It is a long established fact that a reader will be
                        distracted by the readable cIt is a long established
                        fact that a reader will be distracted by the readable c
                      </p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-11 col-lg-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/client.jpg" alt="" />
                    </div>
                    <div class="detail-box">
                      <div class="name">
                        <h6>Siaalya</h6>
                      </div>
                      <p>
                        It is a long established fact that a reader will be
                        distracted by the readable cIt is a long established
                        fact that a reader will be distracted by the readable c
                      </p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-container">
            <a
              class="carousel-control-prev"
              href="#carouselExample2Controls"
              role="button"
              data-slide="prev"
            >
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExample2Controls"
              role="button"
              data-slide="next"
            >
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section> -->

  <!-- end client section -->

  <!-- contact section -->
  <!-- <section class="contact_section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-6">
            <div class="form_container">
              <div class="heading_container">
                <h2>تواصل معنا</h2>
              </div>
              <form action="">
                <div>
                  <input type="text" placeholder="Your Name" />
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input
                    type="text"
                    class="message-box"
                    placeholder="Message"
                  />
                </div>
                <div class="btn_box">
                  <button>SEND</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5 col-lg-6">
            <div class="subscribe-box">
              <h3>Subscribe To Our Newsletter</h3>
              <p>
                Neque, omnis? Maiores consectetur molestiae assumenda earum ea
                exercitationem velit tempora molestias quae, neque voluptas
                magnam maxime, repudiandae voluptatum quaerat tempore accusamus.
              </p>
              <form action="">
                <input type="email" placeholder="Enter your email" />
                <button>Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  <!-- end contact section -->

  <!-- info section -->
  <section id="info_section" class="info_section">
    <div class="container">
      <div class="row info_main_row">
        <div class="col-md-6 col-lg-4">
          <h4>
            <?php
            echo $texts['call_us'];
            ?>
          </h4>
          <div class="info_contact">
            <a href="tel:+9660501988815">
              <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <span class="textLeftToRight"> +966 050 1988815 </span>
            </a>
            <a href="tel:+9660557107240">
              <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <span class="textLeftToRight"> +966 055 7107240 </span>
            </a>
            <a href="tel:+9660557107240">
              <span>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </span>
              <span class="textLeftToRight"> +966 055 7107240 </span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <h4>
            <?php
            echo $texts['contact_us'];
            ?>
          </h4>
          <div class="info_contact">
            <a target="_blank" href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D8%A9+%D8%B1%D8%A7%D8%A6%D8%AF%D8%A7%D8%AA+%D9%84%D9%84%D9%85%D8%AD%D8%A7%D9%85%D8%A7%D8%A9+%D9%88%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA+%D8%A7%D9%84%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9%E2%80%AD/@21.3676293,39.8762096,18z/data=!4m6!3m5!1s0x15c205a3908e699b:0xa1e6b0b9a8ad3006!8m2!3d21.3687458!4d39.8781944!16s%2Fg%2F11rkl8hvmx?entry=ttu">
              <span>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
              <span>
                <?php
                echo $texts['makkah'];
                ?>
              </span>
            </a>
            <a target="_blank" href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D8%A9+%D8%B1%D8%A7%D8%A6%D8%AF%D8%A7%D8%AA+%D9%84%D9%84%D9%85%D8%AD%D8%A7%D9%85%D8%A7%D8%A9+%D9%88%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA+%D8%A7%D9%84%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9%E2%80%AD/@24.8088646,46.6641303,18z/data=!3m1!4b1!4m6!3m5!1s0x3e2ee3acb7c93cf5:0xa2edbdcf34b373a8!8m2!3d24.8088622!4d46.6654178!16s%2Fg%2F11pv58rhf9?entry=ttu">
              <span>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
              <span>
                <?php
                echo $texts['riyadh'];
                ?>
              </span>
            </a>
            <a href="mailto:Lawyer.raydat@gmail.com">
              <span>
                <i class="fa fa-envelope"></i>
              </span>
              <span> Lawyer.raydat@gmail.com </span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <h4>
            <?php
            echo $texts['follow_us'];
            ?>
          </h4>
          <div class="social_box">
            <!-- <a target="_blank" href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a> -->
            <a target="_blank" href="https://twitter.com/rayidat_law">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <!-- <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a> -->
            <a target="_blank" href="https://www.instagram.com/rayidat_law">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p class="textLeftToRight">
        &copy; <span id="displayYear"></span>
        <?php
        echo $texts['rights_reserved'];
        ?>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- toogle language -->
  <script src="./js/toggleLanguage.js"></script>
</body>

</html>