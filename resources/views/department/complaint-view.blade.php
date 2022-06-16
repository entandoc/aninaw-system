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
    <link rel="stylesheet" href="/css/complaint-view.css">

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
            <div class="wrapper">
                <div class="con-container"></div>
                <form action="" method="get">
                    <div class="container">
                        <label>Email <span style="color: red;">*</span></label>
                        <p>erikanicole.tandoc@tup.edu.ph</p>
                    </div>
        
                    <div class="container">
                        <label>Name (Last, First, Middle) <span style="color: red;">*</span></label>
                        <p>Tandoc, Erika Nicole, Lopez</p>
                    </div>
        
                    <div class="container">
                        <label>Location <span style="color: red;">*</span></label>    
                        <div class="location-drp">
                            <select name="slct" id="slct">
                                <option value=""> Almanza</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="container">
                        <label>Full Address <span style="color: red;">*</span></label>
                        <p>Almanza, Las Pinas City</p>
                    </div>
        
                    <div class="container">
                        <label>Landmark <span style="color: red;">*</span></label>
                        <p>SM Southmall</p>
                    </div>
        
                    <div class="container">
                        <label>Phone Number <span style="color: red;">*</span></label>
                        <p>09123456789</p>
                    </div>
        
                    <div class="container">
                        <label>Subject of Complaint <span style="color: red;">*</span></label>
                        <div class="department-drp">
                            <select name="slct1" id="slct1">
                                <option value=""> Police Department</option>
                            </select>
                        </div>
                        <div class="nature-drp">
                            <select name="slct2" id="slct2">
                                <option value=""> Sexual Assault</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="container">
                        <label>Complaint Description <span style="color: red;">*</span></label>
                        <h5 id="complaint-description"><span>Someone sexual assualted me while walking at the street near SM Soutmall.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, delectus.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita vel excepturi
                            aspernatur officiis ipsam aut, nam ducimus enim ipsa similique quas dolor iste
                            laudantium commodi voluptatibus optio, deserunt modi reiciendis.</span>
                        </h5>
                    </div>
        
                    <div class="container">
                        <label>Attach a photo (Optional)</label>
                        <p> N/A</p>
                    </div>

                    <div class="container">
                        <label>Phone Number <span style="color: red;">*</span></label>
                        <p>09123456789</p>
                    </div>
        
                    <div class="container">
                        <div class="checkbox">
                            <label>Anonymous (Optional)</label>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="container-two">
                        <h2 class="status-label">DEPARTMENT STATUS</h2>
                        <div class="table-info">
                            <table style="width:100%">
                                <tr>
                                    <td class="title">Location:</td>
                                    <td>Almanza</td>
                                </tr>
                                <tr>
                                    <td class="title">Subject of complaint:</td>
                                    <td>Covid-19 Positivity in all aspect</td>
                                </tr>
                                <tr>
                                    <td class="title">Status:</td>
                                    <td>
                                        <select name="slct3" id="slct3">
                                            <option value=""> Pending</option>
                                            <option value=""> On Going</option>
                                            <option value=""> Completed</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <textarea placeholder="Content"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        <div class="log-div">
                            <table class="log-table" style="width:100%">
                                <tr class="log-tr">
                                    <td class="track">The complaint has been resolved</td>
                                    <td>06-16-2022 9:30am</td>
                                </tr>
                                <tr class="log-tr">
                                    <td class="track">Coordinated with police to investigate</td>
                                    <td>06-16-2022 9:00am</td>
                                </tr>
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