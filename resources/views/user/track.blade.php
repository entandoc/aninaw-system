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
    <link rel="stylesheet" href="/css/track.css">

    <title>Track Complaints</title>
</head>
<body>
    <!-- Sub-header -->
    <section class="sub-header">
        <nav>
            <h1>Aninaw</h1>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="home"><a href="/">Home</a></li>
                    <li class="news"><a href="/complaint/news">News</a></li>
                    <li class="form"><a href="/complaint/create">Form</a></li>
                    <li class="complaints active"><a href="/complaint">Complaints</a></li>
                    <li class="about"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>TRACK COMPLAINTS</h2>
    </section>

    <!-- Body -->
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
                            <td><h4 class="status status-completed">Completed</h4></td>
                        </tr>
                    </table>
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
                        <li><a href="about-aninaw.html#developers">The Developers</a></li>
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