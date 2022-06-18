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

  <title>About Las Pinas</title>
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
        <h2>ABOUT LAS PINAS</h2>
    </section>

    <div class="container">
    <article>
        <img class="img-fluid rounded" src="/images/about-us/a2.png">
        <section class="content">
            <p>From its days as the salt center of Manila to its bright present as a rapidly urbanizing
                residential-commercial center, Las Piñas has indeed come a long way.
            </p>

            <p>Known nationwide for its bamboo organ, salt beds, and jeepney factories, Las Piñas is
                distinguished as one of Metro Manila’s fastest-growing communities. Continued economic
                growth, coupled with effective local governance, have earned Las Piñas the distinction
                of being Metro Manila’s cleanest and most peaceful city for three years straight.
            </p>

            <p>Although it became a city only in 1997, Las Piñas was one of the first settlements on
                the outskirts of Manila. In 1797, during Spain’s four-hundred-year rule, a Spanish
                missionary by the name of Fr. Diego Cera was brought to a barrio in Parañaque with a
                mere 1,200 inhabitants—what was to later become Las Piñas. This holy man’s hard work,
                persistence, and vision put the sleepy fishing village on the road to progress and
                development, leading to the establishment of the Las Piñas Church in 1819, the six-year
                construction of the bamboo organ, as well as the building of roads and bridges that spawned
                the industries of dye making, salt production, and handicrafts.
            </p>

            <p>The years that followed were trying times for the barrio as it fell prey to roaming bandits,
                and then in 1880, they lost hundreds of residents from outbreaks of cholera and smallpox.
                More residents were lost sixteen years later when, during the Philippine revolution against
                Spain, Las Piñas became the battlefield of several bloody encounters between the forces of
                Gen. Emilio Aguinaldo and the Spanish troops. Some years after the Philippine-American war,
                on March 27, 1907, Las Piñas was spun off from Parañaque and was proclaimed an independent
                municipality.
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