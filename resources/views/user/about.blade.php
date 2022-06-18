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
    <link rel="stylesheet" href="/css/about-aninaw.css">

    <title>About Us</title>
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
                    <li class="about active"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>ABOUT US</h2>
    </section>

    <!-- About Aninaw Content -->
    <section class="section-one">
        <div class="container-one">
            <div class="title-one">
                <h1>About Aninaw</h1>
            </div>
            <div class="content-one">
                <div class="article-one">
                    <h3>Aninaw is a complaint and suggestion management system for the municipality
                        of Las Pinas city. 
                    </h3>
                    <p>The system aims to aid the direct communication problem between the Las Pinas city
                        local government unit and its residents. It aims to create and develop an application
                        that will address the residents’s concerns when it comes to abuse, broken roads and bridges,
                        certificates, permits, drugs, health, polutions, employee and public officials complaints, and many more. 
                    </p>
                    <div class="button">
                        <a href="/complaint/about/aninaw">Read More</a>
                    </div>
                </div>
            </div>
            <div class="image-section-one">
                <img src="/images/about-us/a1.svg">
            </div>
        </div>
    </section>

    <!-- About Las Pinas Content -->
    <section class="section-two">
        <div class="container-two">
            <div class="title-two">
                <h1>About Las Pinas</h1>
            </div>
            <div class="content-two">
                <div class="article-two">
                    <h3>From its days as the salt center of Manila to its bright
                        present as a rapidly urbanizing residential-commercial
                        center, Las Piñas has indeed come a long way.
                    </h3>
                    <p>Known nationwide for its bamboo organ, salt beds, and
                        jeepney factories, Las Piñas is distinguished as one of
                        Metro Manila’s fastest-growing communities. Continued
                        economic growth, coupled with effective local governance,
                        have earned Las Piñas the distinction of being Metro Manila’s
                        cleanest and most peaceful city for three years straight.
                    </p>
                    <div class="button">
                        <a href="/complaint/about/laspinas">Read More</a>
                    </div>
                </div>
            </div>
            <div class="image-section-two">
                <img src="/images/about-us/a2.png">
            </div>
        </div>
    </section>

    <!-- The Developers -->
    <section class="section-three" id="developers">
        <div class="container-three">
            <div class="row-three">
                <div class="title-three">
                    <h1>The Developers</h1>
                </div>
            </div>
            <div class="team-card">
                <div class="card">
                    <div class="image-section-three">
                        <img src="/images/about-us/img1.svg">
                    </div>
                    <div class="content-three">
                        <h3>Erika Tandoc</h3>
                        <h4>Front-end Developer</h4>
                        <p>Bachelor of Science in Information Technology</p>
                        <p>Technological University of the Philippines - Manila</p>
                    </div>
                </div>

                <div class="card">
                    <div class="image-section-three">
                        <img src="/images/about-us/img2.svg">
                    </div>
                    <div class="content-three">
                        <h3>Endrew Tolentino</h3>
                        <h4>Back-end Developer</h4>
                        <p>Bachelor of Science in Information Technology</p>
                        <p>Technological University of the Philippines - Manila</p>
                    </div>
                </div>

                <div class="card">
                    <div class="image-section-three">
                        <img src="/images/about-us/img3.svg">
                    </div>
                    <div class="content-three">
                        <h3>Will Baulete</h3>
                        <h4>Back-end Developer</h4>
                        <p>Bachelor of Science in Information Technology</p>
                        <p>Technological University of the Philippines - Manila</p>
                    </div>
                </div>

                <div class="card">
                    <div class="image-section-three">
                        <img src="/images/about-us/img4.svg">
                    </div>
                    <div class="content-three">
                        <h3>Raymund Cambronero</h3>
                        <h4>Q.A. Tester</h4>
                        <p>Bachelor of Science in Information Technology</p>
                        <p>Technological University of the Philippines - Manila</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="section-four">
        <div class="container-four">
            <div class="title-four">
                <h1>Contact Us</h1>
            </div>

            <div class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.609220478457!2d120.98040461483849!3d14.449670089898706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cdfeaf64701d%3A0xdc611878c600261a!2sLas%20Pi%C3%B1as%20City%20Hall!5e0!3m2!1sen!2sph!4v1655464728864!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="image-section-four">
                <img src="/images/about-us/a3.svg">
            </div>

            <div class="content-four">
                <form>
                    <h3>Contact Aninaw developers here.</h3>

                    <div>
                        <input type="text" class = "form-control" placeholder="First Name" required>
                        <input type="text" class = "form-control" placeholder="Last Name" required>
                    </div>

                    <div>
                        <input type="email" class = "form-control" placeholder="Email Address" required>
                        <input type="text" class = "form-control" placeholder="Contact Number" required>
                    </div>

                    <textarea placeholder="Message" required></textarea>
                </form>

                <div class="btn">
                    <button class="submit" a href="">Submit</button>
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


    <!-- Javascript for navigation bar -->
    <script>
        var navLinks=document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>

    <!-- JavaScript for Description -->
    <script>
        const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e =>{
        textarea.style.height = "auto";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
        });
    </script>
    
</body>
</html>