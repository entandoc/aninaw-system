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
  <link rel="stylesheet" href="/css/news.css">
  
  <title>News</title>
</head>

<body>

  <!-- sub-header -->
  <section class="sub-header">
    <nav>
      <h1>Aninaw</h1>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li class="home"><a href="/">Home</a></li>
            <li class="news active"><a href="/complaint/news">News</a></li>
            <li class="form"><a href="/complaint/create">Form</a></li>
            <li class="complaints"><a href="/complaint">Complaints</a></li>
            <li class="about"><a href="/complaint/about">About</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h2>GET THE LATEST NEWS IN THE MUNICIPALITY OF LAS PINAS</h2>
  </section>

  <!-- News Main Content -->
  <main>
    <section class = "main-container-left">
      <h2>Top Stories</h2>
      <div class = "container-top-left">
        <article>
          <img src = "/images/news/n1.jpg">
            <div>
              <h3>Las Pinas denies seeling friendship route stickers</h3>
              <p>Las Pinas cautioned motorists, who are using public or private roads as alternative routes to ease or decongest traffic along the main thoroughfares in the city, against dealing with unscrupulous pers...</p>
              <a href = "/complaint/news/{id}">Read More <span>>></span></a>
            </div>
        </article>
      </div>

      <div class = "container-bottom-left">
        <article>
          <img src = "/images/news/n2.jpg">
            <div>
              <h3>Zapote River among most improved estero in Metro Manila</h3>
              <p>Nasungkit po ng Las Piñas City ang 4th Runner-up award sa entry nitong Zapote River sa katatapos na Award Ceremony ng "Gawad Taga-Ilog 2.0:Search for the Most Improved Estero in Metro Mani...</p>
              <a href = "#">Read More <span>>></span></a>
            </div>
        </article>

        <article>
          <img src = "/images/news/n3.jpg">
            <div>
              <h3>Las Pinas celebrates 25th cityhood</h3>
              <p>Las Piñas City celebrates its 25th year of cityhood on March 26 and its 115th founding anniversary on March 27, according to a report by Manila Bulletin. In line with the celebration of the ci...</p>
              <a href = "#">Read More <span>>></span></a>
            </div>
        </article>

        <article>
          <img src = "/images/news/n4.jpg">
            <div>
              <h3>Las Pinas mobilizes bus for vaccination</h3>
              <p>The Las Pinas City government deployed on Thursday (March 10) a “Bakuna Bus” to administer Covid-19 vaccines to residents who remain unvaccinated, according to a report by Manila Bulletin...</p>
              <a href = "#">Read More <span>>></span></a>
            </div>
        </article>

        <article>
          <img src = "/images/news/n5.jpg">
            <div>
              <h3>Las Pinas holds mass anti-rabies vaccination</h3>
              <p>A total of 1,072 dogs and cats received anti-rabies shots from the Las Pinas City Veterinary Office to give the community and these pets protection against animal rabies, according to a report by Mani...</p>
              <a href = "#">Read More <span>>></span></a>
            </div>
        </article>
      </div>
    </section>

    <section class = "main-container-right">
      <h2>Latest Stories</h2>
          
      <article>
        <h4>just in </h4>
        <div>
          <h2>11,575 Las Pinas kids receive vaccines</h2>
          <p>The Las Pinas City government vaccinated a total of 11,575 kids aged 5 to 11 against the coronavirus disease (COVID-19), according to a report by Manila Bulletin. Vice Mayor April Aguilar has be...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n6.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>DSWD recognizes Las Pinas 4p's program</h2>
          <p>Ginawaran si Vice Mayor April Aguilar ng Plaque of Recognition ng DSWD-NCR dahil sa pagpasa ng City Ordinance 1759-21 Series of 2021 o kung tawagin ay Institutionalizing the Expanded Benefits of Panta...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n7.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>Las Pinas opens safari-inspired vaccination sites for children</h2>
          <p>The Las Piñas City government had set up safari and toys and carnival-inspired vaccination sites for the COVID-19 vaccination of children aged 5 to 11 on Tuesday, according to a report by ...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n8.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>46,827 Las Pinas minors get full doses of vaccines</h2>
          <p>The Las Piñas City government has already vaccinated a total of 46,827 minors aged 12 to 17, according to a report by Manila Bulletin. Citing the data of the City Health Office (CHO), May...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n6.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>Las Pinas enforces face mask mandate</h2>
          <p>Las Pinas City Mayor Imelda Aguilar on Friday, Jan. 7, said the city government has it made it mandatory for residents and visitors to wear their face masks, according to a report by Manila Bulletin...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n3.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>Las Pinas school participates in pilot F2F classes</h2>
          <p>The Las Piñas City conducted face-to-face classes for students taking up technical-vocational livelihood strand at Las Piñas National High School, according to a report by Manila Bulletin...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n3.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>Las Pinas teams up with DA for supply chain program</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n3.jpg">
      </article>

      <article>
        <h4>just in </h4>
        <div>
          <h2>Las Pinas offers free cataract surgery</h2>
          <p>The Las Piñas City government launched the blindness prevention program on Nov. 15, offering free cataract surgery for residents who are “green card” holders, according to a report...</p>
          <a href = "#">Read More <span>>></span></a>
        </div>
        <img src = "/images/news/n10.jpg">
      </article>
    </section>
  </main>

  <!-- Pagination -->
  <div class="pagination">
    <li class="page-item previous-page disable"><a class="page-link" href="">Prev</a></li>
    <li class="page-item current-page active"><a class="page-link" href="">1</a></li>
    <li class="page-item current-page"><a class="page-link" href="">2</a></li>
    <li class="page-item current-page"><a class="page-link" href="">3</a></li>
    <li class="page-item next-page"><a class="page-link" href="">Next</a></li>
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
            <li><a href="#">FAQs</a></li>
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