<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap cdn-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="/css/style.css">

  <title>Home</title>
</head>

<body>

  <!--Navigation Bar-->
  <section class="header">
    <nav>
      <h1>Aninaw</h1>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li class="home active"><a href="/">Home</a></li>
            <li class="news"><a href="/complaint/news">News</a></li>
            <li class="form"><a href="/complaint/create">Form</a></li>
            <li class="complaints"><a href="/complaint">Complaints</a></li>
            <li class="about"><a href="/complaint/about">About</a></li>
          </ul>
      </div> 
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
  
    <!--Header Content-->
    <div class="text-box">
      <img src="/images/home/logo.svg">
      <h1>WELCOME TO ANINAW!</h1>
      <p>A complaint and suggestion management system for Las Pinas City.</p>
      <a href="about-aninaw.html" class="hero-btn">Learn More</a>
    </div>
  </section>

  <!--Citizens' Guide-->
  <section class="guide">
    <h1>Citizens' Guide</h1>
    <p>A breif guide of what the citizen can do on the website.</p>

    <div class="row">
      <div class="guide-col">
        <img src="/images/home/1.svg">
        <p>Submit concerns and report issues at Las Pinas City Hall.</p>
      </div>

      <div class="guide-col">
        <img src="/images/home/2.svg">
        <p>Get the fastest response from Las Pinas City Hall through call or email.</p>
      </div>

      <div class="guide-col">
        <img src="/images/home/3.svg">
        <p>Get the latest news and updates from Las Pinas City Hall.</p>
      </div>
    </div>
  </section>

  <!--Call To Action-->
  <section class="cta">
    <h1>DO YOU HAVE CONCERNS?</h1>
    <p>Submit your concerns, complaints, and reports by filling-up the form provided. <br> Click the button below.</p>
    <a href="form.html" class="hero-btn">Click Here</a>
  </section>

  <!--Updates-->
  <section class="updates">
    <h1>Las Pinas City Updates</h1>
    <p>Recent updates in Las Pinas City.</p>

    <div class="row">
      <div class="updates-col">
          <h3>Free Education</h3>
          <p>For those inclines in information technology (IT) may enroll at Dr. Filemon C. Aguilar Information Technology Traning Institute (DFCAITTI), also subsidized by the city. Diploma courses...</p>
          <a href="">Read More -></a>
      </div>

      <div class="updates-col">
          <h3>Clean and Green Environment</h3>
          <p>Waste management is a well-known best practice in the city. Regular and efficient collection of garbage is done in over 250 private villages and subdivisions as well as the rest...</p>
          <a href="">Read More -></a>
      </div>

      <div class="updates-col">
          <h3>Infrastructure Development</h3>
          <p>The rapid modernization of Las Piñas can be attributed to local government’s resolve to give precedence on infrastructure projects. Budgetary constraints did not deter the administration...</p>
          <a href="">Read More -></a>
      </div>
    </div>

    <div class="row">
      <div class="updates-col">
        <h3>Best Practices in Good Governance</h3>
        <p>Las Piñas is home to some of the best practices in local governance. The City Hall is a model of public office that is accessible and people-friendly. City employees have internalized...</p>
        <a href="">Read More -></a>
      </div>

      <div class="updates-col">
        <h3>Free Hospitalization via Green Card</h3>
        <p>Green Card is synonymous with the health care system of Las Piñas. Every bonafide resident is entitled to free hospitalization worth PhP 30,000 subsidized by the city...</p>
        <a href="">Read More -></a>
      </div>

      <div class="updates-col">
        <h3>Historical Milestone</h3>
        <p>1979- The appointment of Fray Diego Cera, the visionary Agustinian priest, to Las Piñas. His arrival in the once sleepy village of Las Piñas, a barrio of Parañaque, had steered the way...</p>
        <a href="">Read More -></a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">

        <div class="footer-col">
          <h4>Las Pinas City Hall</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Operating Hours</a></li>
            <li><a href="#">Telephone Directory</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Aninaw</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">The Developers</a></li>
            <li><a href="#">Privacy and Terms</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQs</a></li>
            <li><a href="form.html">Submit Form</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Socials</h4>
          <div class="social-links">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href=""><i class="fa fa-twitter-square"></i></a>
            <div class="copyright">
              <i class="fa fa-copyright"> 2022</i>
            </div>
          </div>
        </div>

      </div>
    </div>
 </footer>

  <!-- JavaScript for Toggle Menu -->
  <script>
    var navLinks=document.getElementById("navLinks");
    function showMenu(){
      navLinks.style.right="0";
    }
    function hideMenu(){
      navLinks.style.right="-200px";
    }
  </script>

</body>
</html>