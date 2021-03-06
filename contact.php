<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin&Com Conseils - Contact-</title>
  <meta content="Admin&Com Conseils est un secrétariat externalisé destiné aux professionnels. Admin&Com s'occupe de la gestion d'entreprise au quotidien. Basé à Lyon Admin&Com Conseils propose ses services sur site ou à distance. Gagnez en efficacité et concentrez vous sur votre coeur de métier. Admin&com Conseils est là pour vous aider." name="description">
  <meta content="Admin&Com Conseils  est un secrétariat externalisé destiné aux professionnels. Admin&Com s'occupe de la gestion d'entreprise au quotidien. Basé à Lyon Admin&Com Conseils propose ses services sur site ou à distance. Gagnez en efficacité et concentrez vous sur votre coeur de métier. Admin&com Conseils est là pour vous aider." name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo-acconseils.png" rel="icon">
  <link href="assets/img/Logo-acconseils.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.html"><img src="assets/img/Logo-acconseils.png" alt="Admin&Com" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Accueil</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a class ="active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="section-title">
          <h2>Contactez nous</h2>
         
        </div>

      </div>
    </section><!-- End Our Services Section -->


    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Adresse</h3>
                  <p>135 Cours Gambetta, 69003, Lyon</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>contact@admincomconseils.fr<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Téléphone</h3>
                  <p>06.44.88.55.66<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <?php
            if(
                !empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)&&
                !empty($_POST['name']) &&
                !empty($_POST['message'])
            ){

                $headers = 'From: ' . $_POST['mail'] . "\r\n" .
                'Reply-To: ' . $_POST['mail'] . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                mail('contact@admincomconseils.fr', 'Formulaire de contact', $_POST['message'], $headers);
            }elseif(!empty($_POST)){
                echo '<div class="alert alert-danger">Vous n\'avez pas rempli tous les champs</div>';
            }
            if(empty($_post)){
                $_POST = array(
                    'mail' => '',
                    'name' => '',
                    'message' => ''
                );
            }
            ?>

          <form role="form" method="post">
          <fieldset>
              <div class="form-group">
                  <label for="mail">Adresse email</label>
                  <input type="text" class="form-control" name="mail" id="mail" placeholder="nom@domain.com" value="<?php echo $_POST['mail']; ?>">
              </div>
              <div class="form-group">
                  <label for="name">Votre nom</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nom" value="<?php echo $_POST['name']; ?>">
              </div>
              <div class="form-group">
                  <label for="message">Votre message</label>
                  <textarea name="message" id="message" class="form-control" placeholder="Saisissez votre message" rows="3"><?php echo $_POST['message']; ?></textarea>
              </div>

              <input type="submit" value="Envoyer" class="btn btn-primary">
          </fieldset>
      </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.0530541940752!2d4.856691215884207!3d45.75008232234216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea6e23b82c2b%3A0x75279f8157298393!2s135%20Cr%20Gambetta%2C%2069003%20Lyon!5e0!3m2!1sfr!2sfr!4v1648812730278!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pages</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Développement</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.creationwebdesignboulenger.com">CWDB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="mailto:creationwebdesign.boulenger@gmail.com">Contacter la webmaster</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="mentionslegales.html">Mentions légales</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactez nous</h4>
            <p>
            135<br>
            cours Gambetta<br>
            69003, Lyon <br><br>
              <strong>Téléphone :</strong> 06.44.88.55.66<br>
              <strong>Email :</strong><a href="mailto:contact@admincomconseils.fr"> contact@admincomconseils.fr</a> <br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h4>Nous rejoindre</h4>
            <p>N'hésitez pas à venir nous rejoindre sur les réseaux</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/FouziaACC/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="http://www.instagram.com/admin_com_conseils/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/fouzia-cheddadtaouli" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CWDB</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://creationwebdesignboulenger.com/">Boulenger Martine</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>