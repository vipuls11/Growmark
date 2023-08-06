<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="headerandfooter.css">
    <link rel="stylesheet" href="contact-grow-mark.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <script src="headerandfooter.js"></script>
    <title>Contact form</title>
</head>
<body>
  <div class="clip-path">
    <!-- .........................heading....................... -->
    <section id="header-link">
        <div class="mein-head">
            <a href="home.html"><img id="logo"  src="img/logo1.png" alt="" width="80px" ></a>

         
  
            <div id="menu">
            <ul id="mein-ul">
                <label id="close" onclick="closeMenu()" ><i class="fa-solid fa-xmark"></i></label>
                <li><a class="underline" href="home.html">Home</a></li>
                <li><a class="underline" href="About.html">About</a></li>
                <li><a class="underline" href="servicepage.html">Services</a>
                    <div id="sub-Services">

                        <a href="book-keeping-service.html">Book Keeping Service</a>
                        <a href="accounting-service.html"> Accounting Service</a>
                        <a href="account-payable.html">Account Payable</a> 
                        <a href="account-receviable.html"> Account Receviable</a>
                        <a href="tax-preparation.html">Tax Preparation</a>
                        <a href="financial-analysis.html">Financial Analysis</a>
                        <a href="invoice-generation.html">Invoice Generation</a>
                   
                </div>
                </li>
                <li><a class="underline" href="#team">Team</a></li>
                <li><a class="underline" href="#news">News</a>
                    <div id="sub-Services">
                        <a href="NewsBlog-Services.html">News / Blog - Services</a>
                        <a href="newscasestudies.html">Case / Studies - listing</a>
                        <a href="study-single.html">News / study - single</a>
                    </div>
                </li>
                <li><a class="underline active" href="contact-grow-mark.html">Contact</a></li>  
            </ul>
        </div>
        
            <!-- <div>
                <button id="head-btn"><a class="underline" href="contact-grow-mark.html">GET A QUOTES</a></button>
            </div> -->
            <label class="hamber">
                <i onclick="openMenu()" class="fas fa-bars"></i>
              </label>
        </div>
    </section>
    </div>
   
    
         <!-- ...........bg-img........... -->
      <div id="contact-img">
        <img src="img/news img/contact1-number.jpg" alt="" width="100%" height="450px">
      </div>
 <!-- .....................end bg-img....................... -->

 <!-- ................contact form....................... -->

 <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-body">
          <div class="screen-body-item left">
              <div class="app-address"> Don’t Hesitate to contact with us for any kind of information </div>
            <div class="app-title">
              <span>CONTACT</span>
              <span>US</span>
            </div>
            <div class="app-contact">CONTACT INFO : +91 99999 99999</div>
          </div>
          <form >
          <div class="screen-body-item">
            <div class="app-form">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" id="name" value="">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL" id="email">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="CONTACT NO" id="contact">
              </div>
              <div class="app-form-group message" placeholder="MESSAGE"> 
                <!-- <input class="app-form-control" placeholder="MESSAGE" cols="46" rows="3">  -->
                <!-- <li>
                </li> -->
                    <!-- <label for="comments">comments</label> -->
                    <textarea class="app-form-control" placeholder="MESSAGE" id="message" cols="46" rows="3" name="comments"></textarea>
            </div>
              <div class="app-form-group buttons">
                <!-- <button class="app-form-button">CANCEL</button> -->
                <button class="app-form-button" id="btn">SEND</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

        <!-- .......................footer............................... -->

        <footer id="Container-flex" >
     
          <div class="Our-details-container">
            <a href="home.html"><img src="img/logo1.png" alt="" width="150px"></a>
              <p>As a business consultant, we focus on delivering quantifiable results for our customers, based on a well tested methodology and solid experience.</a></p>
              <p> <a href="#location"><i class="fa-solid fa-location-dot"></i> Grow Mark Consultancy , B-110, Grace Plaza, Jogeshwari West, Mumbai 400102</a></p>
              <p><a href="mailto:growmark@gmail.com"><i class="fas fa-envelope"></i> growmark@gmail.com</a></p>
                <p><a href="tel:"><i class="fas fa-phone-alt"></i> +91 99999999999</a></p>
          </div>
      <div class="container-menu">
          <div class="Registration-container">
              <h3>Registration</h3>
              <ul>
                  <li>Private Limited Company</li>
                  <li>One Person Company</li>
                  <li>Ltd. Liability Partnership</li>
                  <li>Trademark Registration</li>
                  <li>Startup Registration</li>
                  <li>Public Limited Company</li>
                  <li>Section 8 Company</li>
                  <li>Online Trust Registration</li>
                  <li>Contact Us</li>
              </ul>
          </div>
  
         <div class="Registration-container">
              <h3>Compliances</h3>
              <ul>
                  <li>Accounting Services</li>
                  <li>GST Return Filing</li>
                  <li>Income Tax return filling</li>
                  <li>One Person Company Compliance</li>
                  <li>TDS Return Filing</li>
                  <li>LLP Annual Compliances</li>
                  <li>Private Limited Company</li>
                  <li>Privacy Policy</li>
                  <li><a href="About.html">About Us</a></li>
              </ul>
          </div>
  
          <div class="ConnectWithUs-container">
              <h3>Connect With Us</h3>
              <ul>
                  <li><a href="www.twitter.com" ><i class="fa-brands fa-square-twitter"></i></a></li>
                  <li><a href="www.facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="www.intstagram.com"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="www.youtube.com"><i class="fa-brands fa-youtube"></i></a></li>
                  <li><a href="www.pinterest.com"><i class="fa-brands fa-pinterest"></i></a></li>
                  <li><a href="www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a></li>
              </ul>
          </div>
       </div>
  
      </footer>
  
      <footer id="copyright-footer">
          <ul>
              <li>Copyright © 2022 Grow Mark.</li>
              <li>All rights reserved.</li>
              <li>Designed by Oriflamme IT SOLUTIONS</li>
          </ul>
      </footer>

      <!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
      <script>
        var btn = document.getElementById('btn');
        btn.addEventListener('click', function(e) {
          e.preventDefault()
          var name = document.getElementById('name').value;
          var email = document.getElementById('email').value;
          var contact = document.getElementById('contact').value;
          var message = document.getElementById('message').value;
          var body = 'name: ' + name + '<br/> email: ' + email + '<br/> contact' + contact + '<br/> message' + message;
            



       Email.send({
         Host : "smtp.gmail.com",
         Username : "developerpradeep845@gmail.com",
         Password : "5A81C5D0A2871960E4F0B1AD68D42C605A4C",
         To : 'developerpradeep845@gmail.com',
         From : email,
        Subject : "New Contact form Enquiry",
        Body : body
     }).then(
      message => alert('Email Sent Sucessfully')
     );
     }
        )
       
  </script> -->
  

    
</body>
</html>