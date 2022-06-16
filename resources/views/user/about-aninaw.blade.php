<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- cdnjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  <!-- Fontawesome cdn -->
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpg" href="/images/logo.png">

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="/css/about-aninaw2.css">

  <title>About Aninaw</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <h1>Aninaw</h1>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                  <li class="home"><a href="/">Home</a></li>
                  <li class="news"><a href="/complaint/news">News</a></li>
                  <li class="form"><a href="/complaint/create">Form</a></li>
                  <li class="complaints"><a href="/complaint">Complaints</a></li>
                  <li class="about active"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>ABOUT ANINAW</h2>
    </section>

    <div class="container">
    <article>
        <img class="img-fluid rounded" src="/images/about-us/a1.svg">
        <section class="content">
            <p>Aninaw is a complaint and suggestion management system for the municipality
                of Las Pinas city. 
            </p>
            <p>The system aims to aid the direct communication problem between the Las Pinas city
                local government unit and its residents. It aims to create and develop an application
                that will address the residents’s concerns when it comes to abuse, broken roads and bridges,
                certificates, permits, drugs, health, polutions, employee and public officials complaints, and many more. 
            </p>

            <p>The goal of the Aninaw developers is to establish a complaints/ suggestion base website for las pinas
                citizens. An article written by Gelb et al. (2019), suggests that one of the most crucial
                demurrals of administrative law is the advancing of the quality, impact, and efficiency of
                public service. One way to resolve this hindrance in advancement is through involvement of
                the people by putting them at the center of governance. This can be accomplished by giving
                the people the power through governance participation and incentivizing conveyance,
                transparency through information accessibility, allowing the citizens to have knowledge
                of service level and standard, and the inclusion of the people in policy making and
                reinforcement. The purpose of the website is to help both the las pinas government and
                the citizens amidst covid 19 to raise their concern and complaints virtually through the
                website. Citizens will not fall in line anymore in the offices of las pinas just to submit
                a complaint, users will be able to use a user-friendly website and less hassle for them in
                submitting their complaints through face to face.
            </p>
        </section>
        <div class="button">
            <a href="/complaint/about"><i class="fas fa-arrow-left"></i> Go back</a>
        </div>
    </article>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
          <div class="footer-row">
    
            <div class="footer-col">
              <h4>Las Pinas City Hall</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Operating Hours</a></li>
                <li><a href="/directory">Telephone Directory</a></li>
              </ul>
            </div>
    
            <div class="footer-col">
              <h4>Aninaw</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="/complaint/about#developers">The Developers</a></li>
                <li><a href="#">Privacy and Terms</a></li>
              </ul>
            </div>
            
            <div class="footer-col">
              <h4>Get Help</h4>
              <ul>
                <li><a href="/faqs">FAQs</a></li>
                <li><a href="/complaint/create">Submit Form</a></li>
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
    
    <!-- ----- Javascript ----- -->
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