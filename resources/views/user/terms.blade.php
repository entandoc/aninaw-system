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
    <link rel="stylesheet" href="/css/terms.css">

    <title>Terms and Conditions</title>
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
                    <li class="form active"><a href="/complaint/create">Form</a></li>
                    <li class="complaints"><a href="/complaint">Complaints</a></li>
                    <li class="about"><a href="/complaint/about">About</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h2>TERMS AND CONDITIONS</h2>
    </section>

    <!-- Body -->
    <div class="body">
        <div class="container">
            <h2>Terms and Conditions</h2>
            <h3>Please read these terms and conditions carefully.</h3>
            <p><span>Interpretation</span> <br>
                The words of which the initial letter is capitalized have meanings defined
                under the following conditions. The following definitions shall have the
                same meaning regardless of whether they appear in singular or in plural.
            </p>

            <p><span>Definitions</span> <br>
                For the purposes of these Terms and Conditions:
                <ul>
                    <li>Affiliate means an entity that controls, is controlled by or is
                        under common control with a party, where "control" means ownership
                        of 50% or more of the shares, equity interest or other securities
                        entitled to vote for election of directors or other managing authority.
                    </li>

                    <li>Country refers to: Philippines.</li>

                    <li>Company (referred to as either "the Company", "We", "Us" or "Our" in
                        this Agreement) refers to Aninaw.
                    </li>

                    <li>Device means any device that can access the Service such as a
                        computer, a cellphone, or a digital tablet.
                    </li>

                    <li>Service refers to the Website.</li>

                    <li>Terms and Conditions (also referred as "Terms") mean these Terms
                        and Conditions that form the entire agreement between You and the
                        Company regarding the use of the Service. This Terms and Conditions
                        agreement has been created with the help of the Terms and Conditions
                        Generator.
                    </li>

                    <li>Third-party Social Media Service means any services or content
                        (including data, information, products or services) provided by a
                        third-party that may be displayed, included or made available by
                        the Service.
                    </li>

                    <li>Website refers to Aninaw, accessible from http://aninaw.com</li>

                    <li>You mean the individual accessing or using the Service, or the
                        company, or other legal entity on behalf of which such individual
                        is accessing or using the Service, as applicable.
                    </li>
                </ul>
            </p>

            <p><span>Acknowledgment</span> <br>
                These are the Terms and Conditions governing the use of this Service and
                the agreement that operates between You and the Company. These Terms and
                Conditions set out the rights and obligations of all users regarding the
                use of the Service. <br> <br>

                Your access to and use of the Service is conditioned on Your acceptance
                of and compliance with these Terms and Conditions. These Terms and Conditions
                apply to all visitors, users and others who access or use the Service. <br> <br>

                By accessing or using the Service You agree to be bound by these Terms and
                Conditions. If You disagree with any part of these Terms and Conditions then
                You may not access the Service. <br> <br>

                You represent that you are over the age of 18. The Company does not permit those
                under 18 to use the Service. <br> <br>

                Your access to and use of the Service is also conditioned on Your acceptance
                of and compliance with the Privacy Policy of the Company. Our Privacy Policy 
                describes Our policies and procedures on the collection, use and disclosure
                of Your personal information when You use the Application or the Website and
                tells You about Your privacy rights and how the law protects You. Please read
                Our Privacy Policy carefully before using Our Service.
            </p>

            <div class="button">
                <a href="/complaint/create"><i class="fas fa-arrow-left"></i> Go back</a>
            </div>

        </div>
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
                        <li><a href="/directory">Telephone Directory</a></li>
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
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/complaint/create">Submit Form</a></li>
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