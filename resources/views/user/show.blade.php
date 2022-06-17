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
  <link rel="stylesheet" href="/css/article.css">

  <title>Aninaw News Article</title>
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
                  <li class="about"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>ANINAW NEWS ARTICLE</h2>
    </section>

    <div class="container">
    <article>
        <!-- <h4 class ="mb-4" id="category"><a href="">FRIENDSHIP ROUTE STICKERS</a></h4> -->
        <h1>{{ $news->title }}</h1>
        <h5>{{ date('M_d,Y h:ia', strtotime($news->created_at)) }} <br> by Aninaw Moderator</h5>
        <img class="img-fluid rounded" src="{{ asset('uploads/' . $news->image) }}">
        <section class="content">
            <p>{{ $news->content }}</p>

        </section>
        <div class="button">
            <a href="/complaint/news"><i class="fas fa-arrow-left"></i> Go back</a>
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