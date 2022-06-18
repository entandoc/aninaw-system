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

    @php
        include('../public/includes/status.inc.php');
    @endphp

    <!-- Body -->
    <div class="wrapper">
        <div class="con-container"></div>
        <form action="" method="get">
            <div class="container">
                <label>Email </label>
                <p>{{ $appeal->complainant->email }}</p>
            </div>
        
            <div class="container">
                <label>Name (Last, First, Middle) </label>
                <p>{{ $appeal->complainant->name }}</p>
            </div>
        
            <div class="container">
                <label>Location </label>    
                <div class="location-drp">
                    <select name="slct" id="slct">
                        <option value=""> {{ $appeal->address->barangay }}</option>
                    </select>
                </div>
            </div>
        
            <div class="container">
                <label>Full Address </label>
                <p>{{ $appeal->address->home_address }}</p>
            </div>
        
            <div class="container">
                <label>Landmark </label>
                <p>{{ $appeal->address->landmark }}</p>
            </div>
        
            <div class="container">
                <label>Phone Number </label>
                <p>{{ $appeal->complainant->phone_number }}</p>
            </div>
        
            <div class="container">
                <label>Subject of Complaint </label>
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
                <label>Complaint Description </label>
                <h5 id="complaint-description"><span>{{ $appeal->complaint->description }}</span>
                </h5>
            </div>
        
            <div class="container" id="image">
                <label>Attach a photo (Optional)</label>
                <img src="{{ asset('uploads/' . $appeal->complaint->image) }}" alt="" width="300" height="200">
            </div>
        
            <div class="container">
                <div class="checkbox">
                    <label>Anonymous </label>
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
        </form>
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
                            <td><h4 class="status status-completed">{{ $appeal->status }}</h4></td>
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

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-row">

        <div class="footer-col">
          <h4>Las Pinas City Hall</h4>
          <ul>
            <li><a href="/complaint/about/laspinas">About Us</a></li>
            <li><a href="/operatinghours">Operating Hours</a></li>
            <li><a href="/directory">Telephone Directory</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Aninaw</h4>
          <ul>
            <li><a href="/complaint/about/aninaw">About Us</a></li>
            <li><a href="/complaint/about#developers">The Developers</a></li>
            <li><a href="/privacyterms">Privacy and Terms</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="/faqs">FAQs</a></li>
            <li><a href="/complaint/create">Submit Form</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Socials</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/AninawLPC"><i class="fa fa-facebook-square"></i></a>
            <a href="https://twitter.com/Aninaw_LPC"><i class="fa fa-twitter-square"></i></a>
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