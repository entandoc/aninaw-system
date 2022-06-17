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
    <link rel="stylesheet" href="/css/view-approved.css">

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
                <a href="/admin/logout">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    @php
        include('../public/includes/status.inc.php');
    @endphp

    <section class="home-section">
        <nav>
          <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Approved Complaints</span>
          </div>
        </nav>

        <div class="home-content">
            <div class="wrapper">
                <div class="con-container"></div>
                <form action="" method="get">
                    <div class="container">
                        <label>Email</label>
                        <p>{{ $appeal->complainant->email }}</p>
                    </div>
        
                    <div class="container">
                        <label>Name (Last, First, Middle)</label>
                        <p>{{ $appeal->complainant->name }}</p>
                    </div>
        
                    <div class="container">
                        <label>Location</label>    
                        <div class="location-drp">
                            <select name="slct" id="slct">
                                <option value=""> {{ $appeal->address->barangay }}</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="container">
                        <label>Full Address</label>
                        <p>{{ $appeal->address->home_address }}</p>
                    </div>
        
                    <div class="container">
                        <label>Landmark</label>
                        <p>{{ $appeal->address->landmark }}</p>
                    </div>
        
                    <div class="container">
                        <label>Phone Number</label>
                        <p>{{ $appeal->complainant->phone_number }}</p>
                    </div>
        
                    <div class="container">
                        <label>Subject of Complaint</label>
                        <div class="department-drp">
                            <select name="slct1" id="slct1">
                                <option value=""> {{ $appeal->complaint->department->name }}</option>
                            </select>
                        </div>
                        <div class="nature-drp">
                            <select name="slct2" id="slct2">
                                <option value=""> {{ $appeal->complaint->subject }}</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="container">
                        <label>Complaint Description</label>
                        <h5 id="complaint-description"><span>{{ $appeal->complaint->description }}</span>
                        </h5>
                    </div>
        
                    <div class="container">
                        <label>Image</label>
                        <img src="{{ asset('uploads/' . $appeal->complaint->image) }}" alt="">
                    </div>
        
                    <div class="container">
                        <div class="checkbox">
                            <label>Anonymous: </label>
                                @php
                                    $temp = $appeal->complainant->name;
                                @endphp
                                @if($temp == 1)
                                    <p>Yes</p>
                                    @else
                                        <p>No</p>
                                @endif
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="container-two">
                        <h2 class="status-label">DEPARTMENT STATUS</h2>
                        <div class="table-info">
                            <table style="width:100%">
                                <tr>
                                    <td class="title">Location:</td>
                                    <td>{{ $appeal->address->barangay }}</td>
                                </tr>
                                <tr>
                                    <td class="title">Subject of complaint:</td>
                                    <td>{{ $appeal->complaint->subject }}</td>
                                </tr>
                                <tr>
                                    <td class="title">Status:</td>
                                    <td><h4 class="status {{ indicateStatus($appeal->status); }}">{{ $appeal->status }}</h4></td>
                                </tr>
                            </table>
                        </div>
                        <div class="log-div">
                            <table class="log-table" style="width:100%">
                                @foreach($appeal->log as $log)
                                <tr class="log-tr">
                                    <td class="track">{{ $log['message'] }}</td>
                                    <td>{{ $log['created_at'] }}</td>
                                </tr>
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </form>
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