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
    <link rel="stylesheet" href="/css/faqs.css">

    <title>Aninaw FAQs</title>
</head>
<body>

    <!-- Sub-header -->
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
                    <li class="about"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>FREQUENTLY ASKED QUESTIONS</h2>
    </section>

    <!-- Body -->
    <section class="faqs">
        <div class="faqs-body">
            <button class="collapsible">Communication Channels?</button>
            <div class="content">
                <p>Citizens’ can lodge their complaints, concerns, and suggestion to Aninaw
                    through the Aninaw website. Get the fastest response from
                    Las Piñas City Hall through email/call. 
                </p>
            </div>

            <button class="collapsible">Concerns accepted by Aninaw?</button>
            <div class="content">
                <p>The Aninaw system is built for easy access and communication between the local
                    government and its citizens. It is created to cater complaints and suggestions
                    that needed to be addressed by the local government, officers, and employees.
                    <br>
                    <br>
                    Click <a href="/"> here</a> to view all the complaints that the Aninaw caters.
                </p>
            </div>

            <button class="collapsible">Benefits of having Aninaw aside from phone calls and suggestion boxes?</button>
            <div class="content">
                <p>It will improve the life of citizens on a day-to-day basis by being provided with a website where
                    they can submit their complaints and suggestion regarding how to make the city a better place to live in. 
                </p>
            </div>

            <button class="collapsible">Information Needed to Submit a concern?</button>
            <div class="content">
                <p>Las Piñas citizen who wished to submit a complaint needs to provide their basic information
                    for documentation, processing, and verification. At the minimum, this information should
                    include the following data as part of the process:
                    (a) Email, (b) Full Name, (c) Full Address, (d) Landmark, (e) Subject of Complaint, 
                    (f) Complaint Description, (g) Proof of photo (optional), and (h) Accepted terms and conditions.
                    Take note that the resident's details will be required.
                    <br>
                    <br>
                    Click <a href="/complaint/create"> here</a> to be redirected to form page.
                </p>
            </div>

            <button class="collapsible">Confidentiality?</button>
            <div class="content">
                <p>The personal information of the citizen will be kept confidential and will only be used for
                    the purpose of addressing complaints, suggestions, and for any follow-through actions.
                </p>
            </div>
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
            <li><a href="/complaint/about/laspinas">About Us</a></li>
            <li><a href="/operatinghours">Operating Hours</a></li>
            <li><a href="/directory">Telephone Directory</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Aninaw</h4>
          <ul>
            <li><a href="/complaint/about/aninaw">About Us</a></li>
            <li><a href="/complaint/about#developers">The Developers</a></li>
            <li><a href="/privacyterms">Privacy and Terms</a></li>
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
            <a href="https://www.facebook.com/AninawLPC"><i class="fa fa-facebook-square"></i></a>
            <a href="https://twitter.com/Aninaw_LPC"><i class="fa fa-twitter-square"></i></a>
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

    <!-- JavaScript for Toggle Collapse Section -->
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
    
        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
            content.style.maxHeight = null;
            }else{
            content.style.maxHeight = content.scrollHeight + "px";
            } 
        });
        }
    </script>
</body>
</html>