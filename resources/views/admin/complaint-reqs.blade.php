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
    <link rel="stylesheet" href="/css/complaint-reqs.css">

<title>Complaint Requests</title>
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
                <a href="/admin/requests" class="active">
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
                <a href="/admin/logout">
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
            <span class="dashboard">Complaint Requests</span>
          </div>
        </nav>

        <div class="home-content">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Reference ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Nature of Complaint</th>
                            <th>View</th>
                            <th>Approve</th>
                            <th>Reject</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appeals as $appeal)
                        <tr>
                            <td data-label="Reference ID">{{ $appeal->flag }}</td>
                            <td data-label="Date">{{ date('m/d/Y h:i:sa', strtotime($appeal->created_at)); }}</td>
                            <td data-label="Name">{{ $appeal->complainant->name }}</td>
                            <td data-label="Location">{{ $appeal->address->barangay }}</td>
                            <td data-label="Nature of Complaint">{{ $appeal->complaint->subject }}</td>
                            <td data-label="View"><a href="/admin/requests/view/{{ $appeal->id }}" class="btn" id="view">View</td>
                            <td data-label="Approve"><a href="/approve/{{ $appeal->id }}" class="btn" id="approve">Approve</td>
                            <td data-label="Reject"><a href="/reject/{{ $appeal->id }}" class="btn" id="reject">Reject</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Reject Modal -->
        <div class="container">
            <input type="checkbox" id="check">
            <div class="background"></div>
            <div class="alert_box">
              <div class="icon">
                <i class="fas fa-exclamation"></i>
              </div>
              <header>Reject Complaint Request</header>
              <p>Are you sure you want to reject the requested complaint?</p>
              <div class="btns">
                <label for="check">Yes, Reject!</label>
                <label for="check">Cancel</label>
              </div>
            </div>
        </div> 

        <!-- Approve Modal -->
        <div class="container2">
            <input type="checkbox" id="check2">
            <div class="background2"></div>
            <div class="alert_box2">
              <div class="icon2">
                <i class="fas fa-solid fa-check"></i>
              </div>
              <header>Approve Complaint Request</header>
              <p>Are you sure you want to approve the requested complaint?</p>
              <div class="btns2">
                <label for="check2">Yes, Approve!</label>
                <label for="check2">Cancel</label>
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