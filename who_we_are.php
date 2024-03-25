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

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="<?php echo $lang; ?>">
  <!-- header section strats -->
  <header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php?lang=<?php echo $lang ?>">
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
                <a href="index.php?lang=<?php echo $lang ?>">
                  <?php
                  echo $texts['home'];
                  ?>
                </a>
                <a href="about.php?lang=<?php echo $lang ?>">
                  <?php
                  echo $texts['about'];
                  ?>
                </a>
                <a href="service.php?lang=<?php echo $lang ?>">
                  <?php
                  echo $texts['services'];
                  ?>
                </a>
                <a href="who_we_are.php?lang=<?php echo $lang ?>">
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
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div>
              <div class="ourMessage">
                <h5>
                  <?php
                  echo $texts['our_branches'];
                  ?>
                </h5>
                <p>
                  <?php
                  echo $texts['our_branches_J_R'];
                  ?>
                </p>
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
    </div>
  </section>

  <!-- end who we are section -->

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
            <a target="_blank" href="tel:+9660501988815">
              <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <span class="textLeftToRight"> +966 050 1988815 </span>
            </a>
            <a target="_blank" href="tel:+9660557107240">
              <span>
                <i class="fa fa-phone" aria-hidden="true"></i>
              </span>
              <span class="textLeftToRight"> +966 055 7107240 </span>
            </a>
            <a target="_blank" href="https://wa.me/+9660557107240">
              <span>
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
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
            <a target="_blank" href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D8%A9+%D8%B1%D8%A7%D8%A6%D8%AF%D8%A7%D8%AA+%D9%84%D9%84%D9%85%D8%AD%D8%A7%D9%85%D8%A7%D8%A9+%D9%88%D8%A7%D9%84%D8%A5%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A7%D8%AA+%D8%A7%D9%84%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9%E2%80%AD/@21.6005247,39.1987431,17z/data=!3m1!4b1!4m6!3m5!1s0x15c3d16d0aa5b4d3:0x55772ffcb6421a44!8m2!3d21.6005197!4d39.201318!16s%2Fg%2F11vqhpsjx8?entry=ttu">
              <span>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </span>
              <span>
                <?php
                echo $texts['Jeddah'];
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
            <a target="_blank" href="mailto:Lawyer.raydat@gmail.com">
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
              <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
            </a>
            <!-- <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a> -->
            <a target="_blank" href="https://www.instagram.com/rayidat_law">
              <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a target="_blank" href="https://www.tiktok.com/@raydat_law">
              <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
            </a>
            <a target="_blank" href="https://www.snapchat.com/add/rayidat_law">
              <i class="fa-brands fa-snapchat" aria-hidden="true"></i>
            </a>
            <!-- <a target="_blank" href="https://www.snapchat.com/add/rayidat_law">
              <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
            </a> -->
            <a target="_blank" href="https://www.facebook.com/zuhor.alnahre">
              <i class="fa-brands fa-facebook" aria-hidden="true"></i>
            </a>
            <a target="_blank" href="https://t.me/+oY9fe_hcmfI3ODQ0">
              <i class="fa-brands fa-telegram" aria-hidden="true"></i>
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

  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- toogle language -->
  <script src="./js/toggleLanguage.js"></script>
  <!-- scrolling header -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) { // Adjust the value based on when you want the background to change
          $('.navbar').addClass('scrolled');
        } else {
          $('.navbar').removeClass('scrolled');
        }
      });
    });
  </script>
</body>

</html>