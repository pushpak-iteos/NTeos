<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="ContactUs.css">
  <!-- Inter font -->
  <link
  href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Ubuntu font -->
  <link
  href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
  rel="stylesheet"
/>
</head>
<body>
  <div class="container-fluid">
    <?php include './common/NavigationBar.php';?>

  </div>
    <div class="ContactUs ">
     
         <div class="rect">
             <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Rectangle 2599.svg" alt="" style="width: 100%; padding-top:70px">
             <h2>Contact Us</h2>
             <p>
                Home
                <img class="less-than-symbol" src="./assets/images/NavBar-ContactUs-Services-AboutUs/less-than-symbol 1.svg" alt="">
                <span>Contact Us</span>
             </p>
         </div>
       
        <div class="container">
            <div class="part1" style="padding-top: 60px;">
                <div class="contact-info">
                    <div class="row p-5">
                        <!-- <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Rectangle left bottom.svg" alt="" class="left-bottom"> -->
                        <div class="left col-lg-6 pe-5">
                            <!-- <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Rectangle left bottom.svg" alt="" class="left-bottom "> -->
                            <h1>Thinking about a projet?
                                Reach out to us today
                            </h1>  
                            <p>Please let us know if you have a question or would like to know further information about NTeos</p>     
                            <form action="send_mail.php" method="POST">
                                <div class="formreachout">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" name="email" class="form-control" placeholder="Mail Id" required>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <select name="subject" class="form-control" required>
                                                <option selected disabled>Subject</option>
                                                <option>General Inquiry</option>
                                                <option>Technical Support</option>
                                                <option>Project Inquiry</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <textarea name="message" class="fixed-textarea" placeholder="Describe your words in short" required></textarea>
                                    </div>
                                </div>
                                <br><br> 
                                <div class="btn-container ms-lg-3 mb-3">
                                    <button type="submit" class="btn btn-outline-primary">Send</button>
                                </div>
                            </form> 
                        </div>
                        <div class="right col-lg-6 ">
                            <div class="contact-card">
                                <div class="grid-container2">
                                    <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Rectangle 8.svg" alt="">
                                    <h3>Let’s Talk</h3>
                                </div>
                                
                                <div class="container">
                                    <div class="contact-section">
                                        <h2>NTeos</h2>
                                          <div class="grid-container">
                                           <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/call.svg" alt="Phone Icon" class="icon">
                                           <p><strong>Have any question?</strong><br> Call +403 4184848</p>
                                           <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/call (1).svg" alt="Email-icon" class="icon">
                                           <p><strong>Write Email</strong><br> <a href="mailto:ranjan.s@iteos.in">ranjan.s@iteos.in</a></p>
                                           <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/call (2).svg" alt="Location icon" class="icon">
                                           <p><strong style="font-size: 13.18px; font-weight:400;">Location</strong><br> 121 Royal Birch Heath NW, Calgary, AB, T3G 5T8</p>
                                        </div>
                                          
                                       
                                      
                                  
                                      <div class="contact-section">
                                            <h2>ITeos</h2>
                                         <div class="grid-container">
                                            <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/call.svg" alt="Phone Icon" class="icon">
                                            <p><strong>Have any question?</strong><br> +91 7338278283</p>
                                            <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/call (1).svg" alt="Email-icon" class="icon">
                                            <p><strong>Write Email</strong><br> <a href="mailto:ranjan.s@iteos.in">ranjan.s@iteos.in</a></p>
                                            <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/call (2).svg" alt="Location icon" class="icon">
                                            <p><strong>Location</strong><br> HustleHub - 1, HSR Layout, Bengaluru</p>
                                         </div>
                                      </div>
                                </div>
                               
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="part2">
               <div class="row">
                  <div class="left col-lg-3">
                    <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Help and support.svg" alt="" class="p2-heading-image"><br><br><br>
                    <h3>Help & Support</h3><br>
                    <p style="width: 229px; font-size: 16px;">Email ranjan.s@iteos.in  for help with current products or services. Check our FAQs for quick answers.</p>
                  </div>
                  <div class="middle1 col-lg-3">
                    <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Call us.svg" alt="" class="p2-heading-image"><br><br><br>
                    <h3>Call Us</h3><br>
                    <p>Call us to speak to a member of our team. +403 4184848</p>
                  </div>
                  <div class="middle2 col-lg-3">
                    <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/ODC.svg" alt="" class="p2-heading-image" ><br><br><br>
                    <h3>ODC</h3><br>
                    <p>We operate ODCs across Canada, the Middle East in Dubai, and India in Bengaluru and Pune.</p>
                  </div>
                  <div class="right col-lg-3">
                    <img src="./assets/images/NavBar-ContactUs-Services-AboutUs/Office.svg" alt="" class="p2-heading-image"><br><br><br>
                    <h3>Office</h3><br>
                    <p>NTeos : 121 Royal Birch Heath NW, Calgary, AB, T3G 5T8 +403 4184848</p>
                  </div>
               </div>
            </div>
        </div>
    </div>
    <?php include './common/footer.php';?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

