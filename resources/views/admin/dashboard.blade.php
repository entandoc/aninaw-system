<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/jpg" href="/images/logo.png">

  <!-- CSS -->
  <link rel="stylesheet" href="/css/dashboard.css">

  <title>Dashboard</title>
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
        <a href="/admin/dashboard" class="active">
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
        <a href="/admin/approved">
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

  <!-- Dashboard Body -->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Complaint Requests</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-mail-send cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Approved Requests</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-message-square-check cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Ongoing Complaints</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-time-five cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Finished Complaints</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bx-list-check cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Complaint Requests</div>
          <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                          <th>Date</th>
                          <th>Name</th>
                          <th>Location</th>
                          <th>Nature of Complaint</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td data-label="Date">1000</td>
                          <td data-label="Name">01-01-2022</td>
                          <td data-label="Location">Snow, Jon</td>
                          <td data-label="Nature of Complaint">Almanza</td>
                        </tr>

                        <tr>
                          <td data-label="Date">1000</td>
                          <td data-label="Name">01-01-2022</td>
                          <td data-label="Location">Snow, Jon</td>
                          <td data-label="Nature of Complaint">Almanza</td>
                        </tr>

                        <tr>
                          <td data-label="Date">1000</td>
                          <td data-label="Name">01-01-2022</td>
                          <td data-label="Location">Snow, Jon</td>
                          <td data-label="Nature of Complaint">Almanza</td>
                        </tr>

                        <tr>
                          <td data-label="Date">1000</td>
                          <td data-label="Name">01-01-2022</td>
                          <td data-label="Location">Snow, Jon</td>
                          <td data-label="Nature of Complaint">Almanza</td>
                        </tr>

                        <tr>
                          <td data-label="Date">1000</td>
                          <td data-label="Name">01-01-2022</td>
                          <td data-label="Location">Snow, Jon</td>
                          <td data-label="Nature of Complaint">Almanza</td>
                        </tr>

                        <tr>
                          <td data-label="Date">1000</td>
                          <td data-label="Name">01-01-2022</td>
                          <td data-label="Location">Snow, Jon</td>
                          <td data-label="Nature of Complaint">Almanza</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          <div class="button">
            <a href="/admin/requests">See All</a>
          </div>
        </div>

        <div class="top-sales box">
          <div class="title">Most numbered complaints</div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <span class="product">Police Department</span>
              </a>
              <span class="price">1000</span>
            </li>

            <li>
              <a href="#">
                <span class="product">HR Department</span>
              </a>
              <span class="price">900</span>
            </li>

            <li>
              <a href="#">
                <span class="product">Office of the City Mayor</span>
              </a>
              <span class="price">800</span>
            </li>

            <li>
              <a href="#">
                <span class="product">Office of the Engineer</span>
              </a>
              <span class="price">700</span>
            </li>

            <li>
              <a href="#">
                <span class="product">City Health Offie</span>
              </a>
              <span class="price">600</span>
            </li>

            <li>
              <a href="#">
                <span class="product">Urban Poor Affairs Offices</span>
              </a>
              <span class="price">500</span>
            </li>

            <li>
              <a href="#">
                <span class="product">City Social Welfare and Development Office</span>
              </a>
              <span class="price">400</span>
            </li>
          </ul>
        </div>
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