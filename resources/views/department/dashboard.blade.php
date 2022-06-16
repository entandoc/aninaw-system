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
    <link rel="stylesheet" href="/css/dept-dashboard.css">

<title>Dashboard</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo-details">
        <i class='bx bxl-adobe'></i>
        <span class="logo_name">Department</span>
        </div>

        <ul class="nav-links">
            <li>
                <a id="user">
                    <i class='bx bx-user'></i>
                    <span class="links_name">A-001</span>
                </a>
            </li>

            <li>
                <a href="/department/dashboard" class="active">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
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
            <span class="dashboard">Police Department</span>
          </div>
        </nav>

        <div class="home-content">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ticket No.</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Nature of Complaint</th>
                            <th>Status</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Ticket No.">1000</td>
                            <td data-label="Date">01-01-2022</td>
                            <td data-label="Name">Snow, Jon</td>
                            <td data-label="Location">Almanza</td>
                            <td data-label="Nature of Complaint">Garbage</td>
                            <td data-label="Status"><p class="status status-pending">Pending</p></td>
                            <td data-label="View"><a href="/department/view" class="btn" id="view">View</td>
                        </tr>

                        <tr>
                            <td data-label="Ticket No.">1000</td>
                            <td data-label="Date">01-01-2022</td>
                            <td data-label="Name">Lannister, Tyrion</td>
                            <td data-label="Location">Almanza</td>
                            <td data-label="Nature of Complaint">Garbage</td>
                            <td data-label="Status"><p class="status status-on-going">On Going</p></td>
                            <td data-label="View"><a href="/department/view" class="btn" id="view">View</td>
                        </tr>

                        <tr>
                            <td data-label="Ticket No.">1000</td>
                            <td data-label="Date">01-01-2022</td>
                            <td data-label="Name">Stark, Arya</td>
                            <td data-label="Location">Almanza</td>
                            <td data-label="Nature of Complaint">Garbage</td>
                            <td data-label="Status"><p class="status status-completed">Completed</p></td>
                            <td data-label="View"><a href="/department/view" class="btn" id="view">View</td>
                        </tr>

                        <tr>
                            <td data-label="Ticket No.">1000</td>
                            <td data-label="Date">01-01-2022</td>
                            <td data-label="Name">Targaryen, Daenerys</td>
                            <td data-label="Location">Almanza</td>
                            <td data-label="Nature of Complaint">Garbage</td>
                            <td data-label="Status"><p class="status status-pending">Pending</p></td>
                            <td data-label="View"><a href="/department/view" class="btn" id="view">View</td>
                        </tr>

                        <tr>
                            <td data-label="Ticket No.">1000</td>
                            <td data-label="Date">01-01-2022</td>
                            <td data-label="Name">The Hound</td>
                            <td data-label="Location">Almanza</td>
                            <td data-label="Nature of Complaint">Garbage</td>
                            <td data-label="Status"><p class="status status-on-going">On Going</p></td>
                            <td data-label="View"><a href="/department/view" class="btn" id="view">View</td>
                        </tr>

                        <tr>
                            <td data-label="Ticket No.">1000</td>
                            <td data-label="Date">01-01-2022</td>
                            <td data-label="Name">Snow, Jon</td>
                            <td data-label="Location">Almanza</td>
                            <td data-label="Nature of Complaint">Garbage</td>
                            <td data-label="Status"><p class="status status-completed">Completed</p></td>
                            <td data-label="View"><a href="/department/view" class="btn" id="view">View</td>
                        </tr>
                    </tbody>
                </table>
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