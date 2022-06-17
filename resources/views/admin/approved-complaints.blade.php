<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="/images/logo.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/approved-complaints.css">

<title>Approved Complaints</title>
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
                <a href="/admin/approved" class="active">
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
            <span class="dashboard">Approved Complaints</span>
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
                            <th>Status</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            include('../public/includes/status.inc.php');
                        @endphp
                        @foreach($appeals as $appeal)
                        <tr>
                            <td data-label="Reference ID">{{ $appeal->flag }}</td>
                            <td data-label="Date">{{ date('m/d/Y h:i:sa', strtotime($appeal->updated_at)); }}</td>
                            <td data-label="Name">{{ $appeal->complainant->name }}</td>
                            <td data-label="Location">{{ $appeal->address->barangay }}</td>
                            <td data-label="Nature of Complaint">{{ $appeal->complaint->subject }}</td>
                            <td data-label="Status"><p class="status {{ indicateStatus($appeal->status); }}">{{ $appeal->status }}</p></td>
                            <td data-label="View"><a href="/admin/approved/view/{{ $appeal->id }}" class="btn" id="view">View</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Delete Modal -->
    <div class="container">
        <input type="checkbox" id="check">
        <div class="background"></div>
        <div class="alert_box">
            <div class="icon">
                <i class="fas fa-exclamation"></i>
            </div>
            <header>Delete Approved Complaint</header>
            <p>Are you sure you want to delete the approved complaint?</p>
            <div class="btns">
                <label for="check">Yes, Delete!</label>
                <label for="check">Cancel</label>
            </div>
        </div>
    </div>

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