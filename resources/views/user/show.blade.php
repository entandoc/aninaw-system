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
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="article.css">

    <title>Aninaw News | Las Pinas</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <h1>Aninaw</h1>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="home"><a href="index.html">Home</a></li>
                    <li class="news"><a href="news.html">News</a></li>
                    <li class="form"><a href="form.html">Form</a></li>
                    <li class="complaints"><a href="complaints.html">Complaints</a></li>
                    <li class="about"><a href="about-aninaw.html">About</a></li>
                  </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>ANINAW NEWS ARTICLE</h2>
    </section>

    <div class="container">
    <article>
        <h4 class ="mb-4" id="category"><a href="">FRIENDSHIP ROUTE STICKERS</a></h4>
        <h1>Las Pinas Denies Selling Friendship Route Stickers</h1>
        <h5>April 1, 2022 <br> by Metro Cities News</h5>
        <img class="img-fluid rounded" src="images/news/n1.jpg">
        <section class="content">
            <p>Las Pinas cautioned motorists, who are using public or private roads as
                alternative routes to ease or decongest traffic along the main thoroughfares
                in the city, against dealing with unscrupulous persons selling fake friendship
                route stickers, according to a report by Manila Bulletin.
            </p>

            <p>The city government issued the advisory after a fake Las Pinas City government
                account was created, selling fake friendship stickers for P600 to P,1000.
            </p>

            <p>The city government reiterated its call to motorists who wish to avail of a free
                friendship route sticker to visit the link
                <a id="link" href="https://docs.google.com/forms/d/e/1FAIpQLSdIKlDn1eRXOON3YUwSzttcbVzmji144weA9EO85YeJOOG_wQ/viewform">bit.ly/LPCFriendshipStickerApp.</a>
            </p>

            <p>Persons caught selling fake friendship route stickers will be slapped with a
                fine of P3,000 to P5,000, according to city officials.
            </p>

            <p>The city government issued on March 17 guidelines on how to apply for the
                friendship route stickers.
            </p>

            <p>It said the vehicle’s official receipt (OR) and Certificate of Registration
                (CR) of the owner should be registered with Las Piñas address.
            </p>

            <p>Las Pinas residents can still avail of the stickers even as their vehicle is
                not registered in the city by just showing driver’s license or any other documents
                that will prove that the applicant is a city resident.
            </p>

            <p>Those that are not qualified to apply for the stickers are public utility jeepneys,
                buses, taxis, school bus, delivery trucks and vans, tricycle and motorcycles,
                as well as vehicles stamped with “FOR HIRE” notation.
            </p>
        </section>
        <div class="button">
            <a href="news.html"><i class="fas fa-arrow-left"></i> Go back</a>
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