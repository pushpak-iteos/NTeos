<?php $ImagePath = "https://nteos.ca/"?>


<div class="content mt-5 ">
      <footer class="pb-4">
        <div class="container">
          <div class="row r-1">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single-box">
                <div class="logo">
                  <img src="<?php echo $ImagePath?>assets/images/NTeos.svg" alt="NTeos_Logo" />
                  <img src="<?php echo $ImagePath?>assets/images/NTeos_name.svg" alt="" />
                </div>
                <div class="data">
                  <p class="d mt-3">
                    Explore the power of Innovative technology to drive growth.
                    NTeos provides Innovative software solutions and expert IT
                    services to empower businesses of all sizes.
                  </p>
                  <div class="card-area">
                        <img src="<?php echo $ImagePath?>assets/images/facebook.svg" alt="Facebook">
                        <a class="social" href="#facebook"><p>Facebook</p></a>
                        <img src="<?php echo $ImagePath?>assets/images/twitter.svg" alt="Twitter">
                        <a class="social" href="#twitter"><p>Twitter</p></a>
                        <img src="<?php echo $ImagePath?>assets/images/instagram.svg" alt="Instagram">
                        <a class="social" href="#instagram"><p>Instagram</p></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="single-box">
                <h2 class="m-heading">Services</h2>
                <ul class="sub-content mt-4">
                  <li><a href="./Services/Staffing.php">Staffing</a></li>
                  <li><a href="./ContactUs.php">Consulting</a></li>
                  <li><a href="./Services/UI Design.php">UI / UX</a></li>
                  <li><a href="./Services/QualityAssurance.php">Quality Assurance</a></li>
                  <li><a href="./Services/Digital Marketing.php">Digital Marketing</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
              <div class="single-box">
                <h2 class="m-heading">Quick links</h2>
                <ul class="sub-content mt-4">
                  <li><a href="./AboutUs.php">About us</a></li>
                  <li><a href="./blogs.php">Blog</a></li>
                  <li><a href="./sitemap.php">Site Map</a></li>
                  <li><a href="#Privacy">Privacy</a></li>
                  <li><a href="#TermsAndServices">Terms and Services</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="single-box">
                <h2 class="m-heading">Contact Details</h2>
                <div class="sub-heading mt-4">
                  <p class="test">
                    <span>NTeos: 121 Royal Birch Health NW, Calgary, ABT3G 5TB</span>
                  </p>
                  <p class="test">Email: ranjan.s@iteos.in</p>
                  <p class="test">Contact: +403 4184848</p>
                  
                  <!-- Space between NTeos and ITeos -->
                  <p class="mt-4 test">
                    <span>ITeos: HustleHub Tech Park-1, HSR Layout, Bengaluru.</span>
                  </p>
                  <p class="test">Email: info@iteos.in</p>
                  <p class="test">Contact: +91 7338278283</p>
                </div>
              </div>
            </div>
            
          </div>
          <div class="container-fluid rights m-3">
            <div class="demo">
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12">
                  <p>ITeos 2024 &copy All rights reserved</p>
                </div>
                <div class="col-lg-2 col-md-6">
                  <p>Terms and conditions</p>
                </div>
                <div class="col-lg-2 col-md-6">
                  <p>Privacy Policy</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>



<style>

  .social{
    text-decoration: none; /* Removes underline */
            color: inherit; /* Inherits the color from parent */
            border: none;
  }
.content_one {
    height: 50vh;
  }
  
  footer {
    background: #162430;
    padding-top: 85px;
    font-family: "Ubuntu", sans-serif;
  }
  
  footer .r-1 {
    justify-content: center;
    border-bottom: 2px solid rgb(164, 164, 164);
  }
  
  footer .rights {
    color: white;
  }
  
  footer .footer {
    margin-top: 10px;
    border-bottom: solid white;
  }
  
  footer .m-heading,
  .logo {
    margin-top: 20px;
    font-size: 22px;
  }
  
  footer .sub-content {
    font-size: 16px;
  }
  
  footer .single-box p {
    color: white;
  }

  .sub-heading .test{
    margin-bottom: 0; /* Remove space between NTeos email and contact */
    color: #E7E7E7;
    
}
  
  footer .logo img {
    height: 20px;
    margin-bottom: 10px;
  }
  
  footer .single-box .data .d{
    font-size: 16px;
    color: rgb(164, 164, 164);;
    width: 95%;
  }
  
  footer .single-box h3 {
    font-size: 16px;
    font-weight: 700;
    color: white;
  }
  
  footer .single-box .card-area i span {
    font-family: 'Courier New', Courier, monospace;
    margin-right: 10px;
    color: white;
  }
  
  footer .card-area {
    margin-top: 50px;
  }
  
  footer #icon {
    color: white;
  }
  
  footer .demo {
    color: rgb(164, 164, 164);
  }
  
  footer .single-box ul {
    list-style: none;
    padding: 0;
  }
  
  footer .single-box ul li a {
    text-decoration: none;
    color: white;
    line-height: 2.5;
  }
  
  footer .single-box h2 {
    color: white;
    font-weight: 700;
  }
  
  /* Responsive Styles */
  @media (max-width: 992px) {
    footer .single-box {
      text-align: center;
    }
  
    footer .rights {
      text-align: center;
    }
  
    footer .single-box .logo img {
      height: 25px;
    }
  
    
    footer .single-box ul,
    footer .single-box p {
      font-size: 18px;
    }
  }
  
  @media (max-width: 768px) {
    footer {
      padding-top: 50px;
    }
  
    footer .single-box {
      margin-bottom: 30px;
    }
  
    footer .rights {
      text-align: center;
    }
  
    footer .single-box .logo img {
      height: 20px;
    }
  
    footer .single-box .card-area {
      margin-top: 30px;
    }
  
    footer .m-heading {
      font-size: 20px;
    }
  
    footer .single-box ul {
      font-size: 14px;
    }
  }
  
  @media (max-width: 576px) {
    footer .container {
      padding-left: 15px;
      padding-right: 15px;
    }
  
    footer .row {
      flex-direction: column;
    }
  
    footer .single-box {
      text-align: center;
    }
  
    footer .m-heading {
      font-size: 18px;
    }
  
    footer .single-box ul li {
      line-height: 1.8;
    }
  
    footer .rights {
      text-align: center;
      font-size: 14px;
    }
  
    footer .demo p {
      font-size: 14px;
    }
  
    footer .card-area i span {
      display: block;
    }
  
    footer .single-box .card-area {
      margin-top: 20px;
    }
  }

  .card-area {
    display: flex;
    align-items: center;  /* Vertically aligns the items */
    gap: 0px;            /* Adds space between items */
  }
  

  .card-area img {
    width: 18.35px;
    height: 18.35px; 
  }
  
  .card-area p{
    margin: 0 15px 0 5px; /* Adds space between text and image */
    font-family: "Ubuntu", sans-serif;
    font-size: 18px;
    font-weight: 400;
    color: white;
  }
</style>
