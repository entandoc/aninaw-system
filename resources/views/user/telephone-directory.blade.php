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
    <link rel="stylesheet" href="/css/telephone-directory.css">

    <title>Telephone Directory</title>
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
                    <li class="complaints"><a href="/complaint">Complaints</a></li>
                    <li class="about"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>LAS PINAS TELEPHONE DIRECTORY</h2>
    </section>

    <!-- Body -->
    <div class="table-container">
        <h1>National Office</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Telephone No.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Department">RD</td>
                    <td data-label="Telephone No.">0921-465-7061</td>
                </tr>

                <tr>
                    <td data-label="Department">BIR</td>
                    <td data-label="Telephone No.">802-2753 / 802-3037</td>
                </tr>

                <tr>
                    <td data-label="Department">COA</td>
                    <td data-label="Telephone No.">873-8545</td>
                </tr>

                <tr>
                    <td data-label="Department">COMELEC</td>
                    <td data-label="Telephone No.">839-0695</td>
                </tr>

                <tr>
                    <td data-label="Department">DEPARTMENT OF EDUCATION (Division Office)</td>
                    <td data-label="Telephone No.">822-3840/835-9030</td>
                </tr>

                <tr>
                    <td data-label="Department">DILG LAS PINAS</td>
                    <td data-label="Telephone No.">241-9709</td>
                </tr>

                <tr>
                    <td data-label="Department">DISTRICT HOSPITAL</td>
                    <td data-label="Telephone No.">873-1887 / 873-0557</td>
                </tr>

                <tr>
                    <td data-label="Department">LPDRRMO</td>
                    <td data-label="Telephone No.">552-7694 / 242-5836</td>
                </tr>

                <tr>
                    <td data-label="Department">BUREAU OF FIRE PROTECTION (F/SUPT. ARTHUR L. SAWATE, PH.D.,DSC )</td>
                    <td data-label="Telephone No.">478-2161 / 874-6177</td>
                </tr>

                <tr>
                    <td data-label="Department">LTO</td>
                    <td data-label="Telephone No.">875-3200 / 875-2864</td>
                </tr>

                <tr>
                    <td data-label="Department">NBI (MS.EVELYN VIRREY)</td>
                    <td data-label="Telephone No.">823-6902</td>
                </tr>

                <tr>
                    <td data-label="Department">POLICE (PCOL. SIMNAR S. GRAN)</td>
                    <td data-label="Telephone No.">551-4601 / 808-7395</td>
                </tr>

                <tr>
                    <td data-label="Department">POST OFFICE (PM CESAR A. FELICITAS)</td>
                    <td data-label="Telephone No.">873-0829 / 873-5529</td>
                </tr>
            </tbody>
        </table>

        <h1>Councilors - District II</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Telephone No.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Department">LORD LINLEY R. AGUILAR</td>
                    <td data-label="Telephone No.">869-4683</td>
                </tr>

                <tr>
                    <td data-label="Department">DANILO V. HERNANDEZ</td>
                    <td data-label="Telephone No.">843-20-41</td>
                </tr>

                <tr>
                    <td data-label="Department">LUIS I. BUSTAMANTE</td>
                    <td data-label="Telephone No.">776-3515</td>
                </tr>

                <tr>
                    <td data-label="Department">RUBEN C. RAMOS</td>
                    <td data-label="Telephone No.">772-8030 / 871-4348</td>
                </tr>

                <tr>
                    <td data-label="Department">BONIFACIO C. RIGUERA</td>
                    <td data-label="Telephone No.">618-56-60</td>
                </tr>

                <tr>
                    <td data-label="Department">IGNACIO B. SANGGA</td>
                    <td data-label="Telephone No.">808-9994 / 519-7404</td>
                </tr>
            </tbody>
        </table>

        <h1>Councilors - District I</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Telephone No.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Department">ALFREDO L. MIRANDA</td>
                    <td data-label="Telephone No.">872-01-05</td>
                </tr>

                <tr>
                    <td data-label="Department">FLORANTE S. DELA CRUZ</td>
                    <td data-label="Telephone No.">998-78-36</td>
                </tr>

                <tr>
                    <td data-label="Department">FILEMON A. AGUILAR III</td>
                    <td data-label="Telephone No.">777-35-60</td>
                </tr>

                <tr>
                    <td data-label="Department">OSCAR C. PENA</td>
                    <td data-label="Telephone No.">832-5653</td>
                </tr>

                <tr>
                    <td data-label="Department">REX H. RIGUERA</td>
                    <td data-label="Telephone No.">833-35-61</td>
                </tr>
            </tbody>
        </table>

        <h1>Others</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Telephone No.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Department">ACCOUNTING</td>
                    <td data-label="Telephone No.">873-0533</td>
                </tr>

                <tr>
                    <td data-label="Department">AGRICULTURE</td>
                    <td data-label="Telephone No.">519-5687</td>
                </tr>

                <tr>
                    <td data-label="Department">ASSESSORS</td>
                    <td data-label="Telephone No.">874-6781</td>
                </tr>

                <tr>
                    <td data-label="Department">BOC</td>
                    <td data-label="Telephone No.">779-8017</td>
                </tr>

                <tr>
                    <td data-label="Department">BPLO</td>
                    <td data-label="Telephone No.">817-44-60</td>
                </tr>

                <tr>
                    <td data-label="Department">CIVIL REGISTRY</td>
                    <td data-label="Telephone No.">253-4370</td>
                </tr>

                <tr>
                    <td data-label="Department">CSWD</td>
                    <td data-label="Telephone No.">403-7045</td>
                </tr>

                <tr>
                    <td data-label="Department">DFCAITTI</td>
                    <td data-label="Telephone No.">511-84-02 / 831-3681</td>
                </tr>

                <tr>
                    <td data-label="Department">ENGINEERING</td>
                    <td data-label="Telephone No.">873-30-04</td>
                </tr>

                <tr>
                    <td data-label="Department">GSO</td>
                    <td data-label="Telephone No.">871-6195</td>
                </tr>

                <tr>
                    <td data-label="Department">HEALTH</td>
                    <td data-label="Telephone No.">824-5764 / 874-6408 / 776-7268</td>
                </tr>

                <tr>
                    <td data-label="Department">LAS PIÑAS MANPOWER (TESDA)</td>
                    <td data-label="Telephone No.">847-0739</td>
                </tr>

                <tr>
                    <td data-label="Department">LIBRARY</td>
                    <td data-label="Telephone No.">952-7481</td>
                </tr>

                <tr>
                    <td data-label="Department">LYING-IN CLINIC (CAA)</td>
                    <td data-label="Telephone No.">829-5572</td>
                </tr>

                <tr>
                    <td data-label="Department">MAYOR'S OFFICE</td>
                    <td data-label="Telephone No.">871-4343 / 871-4345</td>
                </tr>

                <tr>
                    <td data-label="Department">MAYOR'S GREENCARD</td>
                    <td data-label="Telephone No.">873-0765</td>
                </tr>

                <tr>
                    <td data-label="Department">NUTRITION</td>
                    <td data-label="Telephone No.">541-6382</td>
                </tr>

                <tr>
                    <td data-label="Department">OSCA</td>
                    <td data-label="Telephone No.">842-6066</td>
                </tr>

                <tr>
                    <td data-label="Department">PERSONNEL/HR</td>
                    <td data-label="Telephone No.">256-5198</td>
                </tr>

                <tr>
                    <td data-label="Department">PLANNING</td>
                    <td data-label="Telephone No.">872-0921</td>
                </tr>

                <tr>
                    <td data-label="Department">SECRETARIAT</td>
                    <td data-label="Telephone No.">816-0901 / 403-3116</td>
                </tr>
            </tbody>
        </table>
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