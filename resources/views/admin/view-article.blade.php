<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdnjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fontawesome cdn -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="/images/logo.png">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/view-article.css">

  <title>News Article Access</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-details">
        <i class='bx bxl-adobe'></i>
        <span class="logo_name">Admin</span>
        </div>

        <ul class="nav-links">
            <li>
                <a href="/admin/dashboard">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/admin/requests">
                <i class='bx bx-mail-send'></i>
                <span class="links_name">Complaint Requests</span>
                </a>
            </li>

            <li>
                <a href="/admin/approved"  class="active">
                <i class='bx bx-message-square-check'></i>
                <span class="links_name">Approved Complaints</span>
                </a>
            </li>

            <li>
                <a href="/admin/news">
                <i class='bx bx-news' ></i>
                <span class="links_name">News</span>
                </a>
            </li>

            <!-- <li>
                <a href="#">
                <i class='bx bx-line-chart'></i>
                <span class="links_name">Analytic Review</span>
                </a>
            </li> -->

            <li>
                <a href="/admin/users">
                <i class='bx bx-user'></i>
                <span class="links_name">Admin Users</span>
                </a>
            </li>

            <li class="log_out">
                <a href="#">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
          <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Approved Complaints</span>
          </div>
        </nav>

        <div class="home-content">
            <div class="container">
                <article>
                    <!-- <h4 class ="mb-4" id="category"><a href="">FRIENDSHIP ROUTE STICKERS</a></h4> -->
                    <h1>Las Pinas Denies Selling Friendship Route Stickers</h1>
                    <h5>April 1, 2022 <br> by Metro Cities News</h5>
                    <img class="img-fluid rounded" src="/images/news/n1.jpg">
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
                </article>
            </div>
        </div>
    </section>

    <!-- JavaScript for Sidebar Toggle -->  
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function(){
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>


</body>
</html>