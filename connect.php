<?php
require "./php/contact.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#2c394b" />
  <link rel="shortcut icon" href="./images/logo.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./scss/bootstrap.min.css" />
  <link rel="stylesheet" href="./scss/styles.css" />
  <title>Contact</title>
</head>
<style>



</style>

<body>
  <header>
    <nav class="navbar fixed-top py-0">
      <div class="container">
        <a href="index.html" class="logo">
          <img class="img-fluid" src="./images/logo.svg" alt="" srcset="">
        </a>
        <button type="" id="burger" class="burger">
          <div class="bar"></div>
          <div class="bar"></div>
        </button>

        <!-- Nav-links -->
        <ul class="nav-links mx-auto">
          <li><a href="index.html">Home</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a class="current-page" aria-current="page" href="connect.html">Contact</a></li>
        </ul>

        <ul class="nav-socials">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-twitter"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
        </ul>
      </div>
    </nav>
  </header>



  <!-- CONNECT section -->
  <main id="connect" class="connect-section">

    <!-- CONNECT section  -->
    <div class="container-fluid container-sm">
      <div class="section-title">
        <h1 class="mt-5 section-title">Contact us</h1>

      </div>
      <div class="row connect-row">
        <div class="col">
          <form action="connect.php" method="POST" id="reservation-form">
            <div class="card mb-4">
              <div class="card-title">
                <h4 class="text-center mt-3 mb-4 font-weight-bold">Reservations</h4>
              </div>
              <div class="row">
                <div class="form-group col-lg-6 col-sm-6 mb-3">
                  <label for="name">Business or Personal Name</label>
                  <input id="name" class="form-control" type="text" name="name" placeholder="Jon Doe" value="<?php echo $name; ?>">
                  <span class="error"><?php echo $nameErr; ?></span>
                </div>
                <div class="form-group col-lg-6 col-sm-6 mb-3">
                  <label for="email">Email</label>
                  <input id="email" class="form-control" type="email" name="email" placeholder="john@business.com" value="<?php echo $email; ?>">
                  <span class="error"><?php echo $emailErr; ?></span>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-4 col-sm-6 mb-3">
                  <label for="number_of_people">Number of people</label>
                  <input id="number_of_people" class="form-control" type="number" name="number_of_people" placeholder="5">
                  <span class="error"><?php echo $number_of_peopleErr; ?></span>
                </div>
                <div class="form-group col-lg-4 col-sm-6 mb-3">
                  <label for="general_or_vip">General or VIP</label>
                  <select class="form-control" name="general_or_vip" id="general_or_vip">
                    <option selected disabled>General or VIP </option>
                    <option value="General">General</option>
                    <option value="Vip">VIP</option>
                  </select>
                  <span class="error"><?php echo $general_or_vipErr; ?></span>
                </div>
                <div class="form-group col-lg-4 col-sm-6 mb-3">
                  <label for="date">Date</label>
                  <input id="date" class="form-control" type="date" name="date">
                  <span class="error"><?php echo $dateErr; ?></span>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="message">Additional Information</label>
                <textarea class="form-control" name="message" id="" cols="3" rows="2" placeholder="Any other things you may need" value="<?php echo $message; ?>"></textarea>

              </div>
              <input type="submit" class="btn submit mb-5" value="Send">
            </div>
          </form>

        </div>

      </div>

      <!-- Info card with contact details -->
      <section class="container-fluid mt-3 mb-5">
        <section class="mb-4">
          <div class="card">
            <div class="row">
              <div class="col-md-6">
                <!-- Google maps -->
                <div class="map-container" id="map-within-card">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861033.3290950684!2d52.8346171519481!3d24.352388675836416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e48dfb1ab12bd%3A0x33d32f56c0080aa7!2sUnited%20Arab%20Emirates!5e0!3m2!1sen!2sza!4v1641534222440!5m2!1sen!2sza" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div> <!-- /Google maps -->
              </div>
              <div class="col-10 col-md-4 mx-auto align-self-center py-4 contact-right">
                <h6 class="text-uppercase">Head Office</h6>
                <h5 class=" mb-4">Dubai, UAE</h5>
                <p class="text-muted font-weight-light">2651 Main street <br>United Arab Emirates</p>
                <p class="text-muted font-weight-light mb-0">Phone +1 987 123 0000 <br>Email:
                  example@info.com</p>
                <div class="follow-us-paragraph">
                  <p class="font-weight-bold">Follow us on:</p>
                </div>
                <div class="icons">
                  <a href="#" class="mx-1" role="button"> <i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="mx-1" role="button"> <i class="fab fa-twitter"></i></a>
                  <a href="#" class="mx-1" role="button"> <i class="fab fa-linkedin-in"></i></a>
                  <a href="#" class="mx-1" role="button"> <i class="fab fa-instagram"></i></a>
                  <a href="#" class="mx-1" role="button"> <i class="fab fa-pinterest"></i></a>
                  <a href="#" class="mx-1" role="button"> <i class="fab fa-github"></i></a>
                </div>
              </div>
            </div>


          </div>
        </section>
      </section>


  </main>
  <!-- footer -->
  <footer class="footer">

    <div style="background-color:#2c394b;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column 1-->
          <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
            <h6 class="h6-responsive  mb-0">Registration number: 123 456 789</h6>
          </div>
          <!-- Grid column 1-->

        </div>
        <!-- Grid row-->

      </div>
      <!-- /container  -->
    </div>
    <!-- /color div  -->

    <!-- Copyright -->
    <div class="footer-copyright text-center font-weight-normal text-white py-3" style="background-color: #334756;">©
      <span id="year">2022</span> Copyright:
      <a href="https://example.com/"> The Dinery</a>
    </div>
    <!-- Copyright -->

    </>
    <!-- /footer -->
    <!-- /CONNECT section  -->

    <script src="./js/bootstrap.min.js"></script>
    <!-- Font awersome -->
    <script src="./js/all.js"></script>
    <script src="js/script.js"></script>
</body>


</html>