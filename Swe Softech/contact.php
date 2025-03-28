<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
  //for posting value
  $name=$_POST['name'];
  //echo $name;
  $contactno=$_POST['contactno'];
  $message=$_POST['message'];
  
  // inserting value
  $ins="insert into swefeedback (name,contactno,message,datetime
  ) values('$name','$contactno','$message',now())";
  $status=mysqli_query($con,$ins);
  if($status)
  {
    echo"<script>alert('Thanks for Contacting Us, We will contact you within 03 working hours.')
      window.location='contact.php'</script>";
  }
  else
  {
    echo"<script>alert('Sorry, Please try again.')
      window.location='contact.php'</script>";
  }

}
?>

<!doctype html>
<html lang="en">
  <head><meta name="google-site-verification" content="kn5qgP9rNsTzjSJD9TJWVhjL4Wb1QjNYNOD7G18DD3k" />
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swe Softtech Pvt. Ltd.</title>
    <link rel="icon" type="image/x-icon" href="Images/favi.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link href="Css/che.css" rel="stylesheet">
      <link href="Css/style.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

       
      
        <!-- Meta Tags for SEO -->
    
        <!-- Meta Description (A brief description of your business, important for search engines) -->
        <meta name="description" content="Swe Softech Private Limited is a leading software development company offering custom solutions, IT consulting, and software services to help businesses grow.">
    
        <!-- Meta Keywords (Use relevant keywords related to your business) -->
        <meta name="keywords" content="Swe Softech, software company bihar, best software company in bihar, software development company, IT consulting, software solutions, custom software, software development services, business software, software services, enterprise software solutions">
    
        <!-- Author Tag -->
        <meta name="author" content="Swe Softech Private Limited">
    
        <!-- Open Graph Tags for Social Media Sharing -->
        <meta property="og:title" content="Swe Softech Private Limited - Software Development Company">
        <meta property="og:description" content="We offer custom software development services, IT consulting, and enterprise software solutions to businesses globally.">
        <meta property="og:image" content="URL-to-your-image.jpg"> <!-- Image for social sharing -->
        <meta property="og:url" content="https://www.swe-softech.com"> <!-- Your website URL -->
        <meta property="og:type" content="website">
    
        <!-- Twitter Card Tags (for better visibility on Twitter) -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Swe Softech Private Limited">
        <meta name="twitter:description" content="Custom software development services for businesses. IT solutions and consulting for enterprise growth.">
        <meta name="twitter:image" content="URL-to-your-image.jpg">
    
        <!-- Favicon -->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    
        <!-- Schema.org Structured Data for SEO (JSON-LD format) -->
        <script type="text/JavaScript">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Swe Softech Private Limited",
            "url": "https://www.swe-softech.com",
            "logo": "https://www.swe-softech.com/logo.png",
            "sameAs": [
                "https://www.facebook.com/SweSoftech",
                "https://www.twitter.com/SweSoftech",
                "https://www.linkedin.com/company/swe-softech"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+1234567890",
                "contactType": "Customer Service",
                "areaServed": "IN",
                "availableLanguage": "English"
            }
        }
        </script>
    
        <!-- Additional tags for better search engine ranking -->
        <meta name="robots" content="index, follow"> <!-- Ensures search engines index and follow the links -->
    

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-custom fw-bold">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Swe Softech</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link"  href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Profile.html">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.html">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
     <!-- WhatsApp button with an official logo -->
     <a class="whatsapp-button" href="https://api.whatsapp.com/send?phone=+917033440034" target="_blank">
      <img src="https://www.gstatic.com/webp/gallery/2.jpg" alt="WhatsApp Logo" width="20" height="20" style="vertical-align: middle; margin-right: 10px;">Chat on WhatsApp
  </a>

  <!-- Your webpage content goes here -->

  <script>
      // JavaScript to handle the WhatsApp button click
      document.querySelector(".whatsapp-button").addEventListener("click", function(event) {
          // Prevent the default action of the link
          event.preventDefault();
          
          // Open WhatsApp in a new tab or window
          window.open(this.href, "_blank");
      });
  </script>
    <section>
      <div class="container mx-auto my-2">
      <img src="Images/cont.jpg" width="100%" height="400px" >
    </div>
    </section>
    <section>
    <h1 class="text-center"> <u>> Get Touch With Us < </u> </h1> 
    <div class="container-fluid gap">
          <div class="container">
          <div class="row">
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7237.489568832506!2d84.16628913934724!3d24.90668564263191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398daeb8fbb29d6f%3A0x9c888f0e45a4348f!2sNew%20Dillian%2C%20Dehri%2C%20Bihar!5e0!3m2!1sen!2sin!4v1694768516773!5m2!1sen!2sin"
               width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
              <form class="ee fw-bold" action="" method="post">
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label" >Name</label>
                  <input type="text" name="name" required class="form-control" placeholder="Suraj Kumar" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                </div>
                <div class="mb-3">
                  <label for="exampleInputContactNo" class="form-label" placeholder="8340596877">Contact Number</label>
                  <input type="text" name="contactno"  onkeyup="val(this)" required class="form-control" placeholder="8340596877" id="exampleInputPassword1">
                  <div id="res"></div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputMessage" class="form-label" >Message Us</label>
                  <textarea class="form-control" name="message" required rows="3" id="exampleInputcomment" placeholder="We will contact you within 03 working hours." name="text"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    </section>
    <!-- Footer-->
    <footer class="section footer-classic context-dark bg-image " style="background:  #2d3246;">
      <div class="container">
        <div class="row ">
          <div class="col-md-4">
            <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="Swe Softech" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
              <p>We are an award-winning creative agency,<br> dedicated to the best result in web design,<br>
                promotion, business consulting, and <br> marketing.</p>
              <!-- Rights-->
              <p class="rights"><span>©  </span><span class="copyright-year">2024</span><span> </span><span>Swe Softech</span><span>. </span><span>All Rights Reserved.</span></p>
            </div>
          </div>
          <div class="col-md-2 item ser"><!--rrr-->
            <h3>Services</h3>
            <ul>
                <li><a href="contact.php">Web design</a></li>
                <li><a href="contact.php">Development</a></li>
                <li><a href="contact.php">Hosting</a></li>
            </ul>
        </div><!--remove-->
          <div class="col-md-4">
            <h5>Contacts</h5>
            <dl class="contact-list">
              <dt>Address:</dt>
              <dd> Swe Softech Pvt. Ltd., New Dillian ,<br> Dehri-On-Sone,(821307) Rohtas, Bihar.</dd>
            </dl>
            <dl class="contact-list">
              <dt>email:</dt>
              <dd><a href="mailto:surajkumarsharma.83405@gmail.com">Surajkumarsharma@gmail.com</a></dd>
            </dl>
            <dl class="contact-list">
              <dt>phones:</dt>
              <dd><a href="tel:8340596877">83405968xx</a> <span>or</span> <a href="tel:8340596877">97984xxxx</a>
              </dd>
            </dl>
          </div>
          <div class="col-md-2 lin">
            <h5 class="lin">Links</h5>
            <ul class="nav-list">
              <li><a href="Profile.html">About</a></li>
              <li><a href="index.html">Projects</a></li>
              <li><a href="Blog.html">Blog</a></li>
              <li><a href="contact.php">Contacts</a></li>
              <li><a href="contact.php">Pricing</a></li>
            </ul>
          </div><!--Add-->
          <div class="col item social"><a href="https://www.facebook.com/profile.php?id=100010284462319"><i class="icon ion-social-facebook"></i></a>
            <a href="#"><i class="icon ion-social-twitter"></i></a>
            <a href="https://www.snapchat.com/add/sikriwaljii0034?share_id=CtvnRJ3q8f0&locale=en-GB"><i class="icon ion-social-snapchat"></i></a>
            <a href="https://instagram.com/half_engineer0034?igshid=MzMyNGUyNmU2YQ=="><i class="icon ion-social-instagram"></i></a></div>
        </div>
      </div>
  </footer><!-- Footer- End-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
     <script type="text/JavaScript">
        document.getElementById('res').style.color="red";

        function val(elem) {
            if(isNaN(elem.value)){
                document.getElementById('res').innerText= "Please, Enter digits only.";
            }
            else{
                document.getElementById('res').innerText= "";
                  if (elem.value.length > 10){
                    document.getElementById('res').innerText= " Please, Enter a valid number";
                  }
                  else if(elem.value.length < 10){
                    document.getElementById('res').innerText= "Please, Enter a valid number";
                  }
                  else{
                    document.getElementById('res').innerText=" ";
                  }
                }
            }
        
       
     </script>
  
  </body>
</html>